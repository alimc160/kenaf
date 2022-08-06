<?php

namespace App\Services;

use App\Entity;
use App\Feed;
use App\Traits\CommonTrait;

class NLPService
{
    use CommonTrait;

    public function __construct()
    {
        $this->feed = new Feed;
        $this->rosette = config('app.rosette');
        $this->entity = new Entity;
        $this->entityService = new EntityService;
    }

    /**
     * pingRosett
     * This is to check and ping rosett api
     * Trait is used here for curl
     * And Time Stamp & Message is received in success
     * @return void
     */
    public function pingRosett()
    {
        $result = $this->sendCurlRequest(['url' => $this->rosette['ping_url'], 'key' => $this->rosette['key']]);

        if (empty($result)) {
            echo "Nothing returned from url.<p>";
        } else {
            $result = json_decode($result);
            $result->time = getDateFormat($result->time, 'm-d-Y H:m:s', 'timestamp');
            echo json_encode($result);
        }
    }

    public function updateEntitiesAndSentiments($feed)
    {
        if ($feed->sentiment != null) {
            return ['total' => 0, 'result' => []];
        } else {
            $this->updateFeedRosett($feed);
        }
    }

    public function updateFeedRosett($feed)
    {
        $result = $this->sendCurlRequest(['url' => $this->rosette['sentiment_extraction'], 'key' => $this->rosette['key']], $feed->body);
        if (empty($result)) {
            echo "<p>Nothing returned from url.</p>";
        } else {

            $result = json_decode($result);
            if (!isset($result->document)) {
                errorTextLog('Start');
                errorTextLog($result->code);
                errorTextLog($result->message);
                errorTextLog('End');
            } else {
                $feed->sentiment = $result->document->label;
                $feed->confidence = $result->document->confidence;
                foreach ($result->entities as $entity) {
                    $checkEntity = $this->entity->title($entity->normalized)->first();
                    if (!$checkEntity) {
                        $this->entityService->createEntity($entity, $feed->id);
                    }
                }
                $feed->update();
            }

        }

    }
}
