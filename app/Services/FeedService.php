<?php

namespace App\Services;

use App\Feed;
use App\FeedLanguage;
use App\FilterAttr;
use App\Http\Resources\FeedResource;
use App\ProjectFilter;
use App\Utils\AppConst;
use App\Jobs\ProcessFeedsJob;

class FeedService
{
    /**
     * @var Feed
     */
    private $feed;
    /**
     * @var ProjectFilter
     */
    private $projectFilters;

    public function __construct()
    {
        $this->feed = new Feed;
        $this->feedLanguage = new FeedLanguage;
        $this->projectFilters = new ProjectFilter;
        $this->filterAttr = new FilterAttr;
    }

    /**
     * @param $projectFilters
     * @param $collectionType
     * @return array
     */
    public function getFilterOrEntitiesCollection($projectFilters, $collectionType)
    {
        $result = [];
        foreach ($projectFilters as $projectFilter) {
            if ($collectionType == "filters") {
                if (count($projectFilter->filters) > 0) {
                    foreach ($projectFilter->filters as $filter) {
                        $result[] = $filter->title;
                    }
                }
            } else {
                if (count($projectFilter->entities) > 0) {
                    foreach ($projectFilter->entities as $entity) {
                        $result[] = $entity->title;
                    }
                }
            }
        }
        return $result;
    }

    public function getFeed($perPage = 10, $page, $request, $paginate = false)
    {
        $feed = $this->feed;
        $total = 0;
        if ($paginate == false) {
            if (isset($request['search']) && in_array('needs_to_processed', $request['search'])) {
                $feed = $feed->needsToProcessed();
            }
            if (isset($request['search']) && array_key_exists('lang', $request['search'])) {
                $feed = $feed->byLang($request['search']['lang']);
            }
            if (isset($request['search']) && array_key_exists('city', $request['search']) && $request['search']['city'] != '') {
                $feed = $feed->byCity($request['search']['city']);
            }
            if (isset($request['search']) && array_key_exists('project_id', $request['search']) && $request['search']['project_id'] != '') {
                if (count($request['project_saved_filters']) > 0) {
                    $projectFilters = $this->projectFilters->with('filters', 'entities')
                        ->whereIn('id', $request['project_saved_filters'])->get();
                    $filters = $this->getFilterOrEntitiesCollection($projectFilters, "filters");
                    $entities = $this->getFilterOrEntitiesCollection($projectFilters, null);
                    if (count($filters) > 0) {
                        $feed = $feed->byFilters($filters);
                    }
                    if (count($entities) > 0) {
                        $feed = $feed->byEntities($entities);
                    }
                }
            }
            $feed = $feed->orderBy('id', 'desc')->get();
            $total = $feed->count();
        } else {
            if (isset($request['search']) && in_array('needs_to_processed', $request['search'])) {
                $feed = $feed->needsToProcessed();
            }
            if (isset($request['search']) && array_key_exists('lang', $request['search'])) {
                $feed = $feed->byLang($request['search']['lang']);
            }
            if (isset($request['search']) && array_key_exists('city', $request['search']) && $request['search']['city'] != '') {
                $feed = $feed->byCity($request['search']['city']);
            }
            if (isset($request['search']) && array_key_exists('project_id', $request['search']) && $request['search']['project_id'] != '') {

                if (count($request['search']['project_saved_filters']) > 0) {
                    $projectFilters = $this->projectFilters->with('filters', 'entities')
                        ->whereIn('id', $request['search']['project_saved_filters'])->get();
                    $filters = $this->getFilterOrEntitiesCollection($projectFilters, "filters");
                    $entities = $this->getFilterOrEntitiesCollection($projectFilters, null);
                    //dd( $feed );
                    if (count($filters) > 0) {
                        $feed = $feed->byFilters($filters);
                    }
                    if (count($entities) > 0) {
                        $feed = $feed->byEntities($entities);
                    }
                }
            }
            $feed = $feed->orderBy('id', 'desc');
            $total = $feed->get()->count();
            $feed = $feed->paginate($perPage);
        }
        return ['result' => $feed, 'total' => $total];
    }

    public function createFeed($request, $user)
    {
        $feed = $this->filterAttr->create($request);
        return ['status' => 'success', 'result' => $feed];
    }

    /**
     * @param $request
     * @return array
     */
    public function addFeed($request)
    {

        $feed = $this->feed->create([
            'author' => $request['author'],
            'lang' => $request['inLanguage'],
            'body' => $request['articleBody'],
            'body_html' => $request['articleBodyHtml'],
            'url' => $request['url'],
            'type' => null,
            'title' => $request['headline'],
            'description' => $request['description'],
            'image' => $request['mainImage'],
            'src' => $request['canonicalUrl']
        ]);
        ProcessFeedsJob::dispatch($feed);
        return ['status' => 'success', 'result' => $feed];
    }

    /**
     * @return mixed
     */
    public function getLatestFeeds(){
        $feeds = $this->feed->orderBy('id', 'desc')->latest()->limit(6)->get();
        return ['status' => 'success', 'result' => $feeds];
    }
}
