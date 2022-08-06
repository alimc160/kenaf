<?php

namespace App\Services;

use App\Jobs\GetTaskJob;
use App\Jobs\SaveFeedsJob;
use App\Traits\CommonTrait;
use Illuminate\Support\Facades\DB;

class OctoparseService
{
    use CommonTrait;
    public function __construct()
    {
        $this->feedService = new FeedService;
    }

    public function updateToken($request)
    {
        $response = DB::table('octoparse_token')->first()->update([
            'access_token' => $request['access_token'],
            'token_type' => $request['token_type'],
            'expires_in' => $request['expires_in'],
            'refresh_token' => $request['refresh_token']
        ]);
        return ['status' => 'success', 'result' => $response];
    }

    public function getSavedToken()
    {
        return DB::table('octoparse_token')->first();
    }

    public function addTask($request){
        return DB::table('tasks')->updateOrInsert([
            'task_id' => $request['taskId'],
        ],[
            'task_id' => $request['taskId'],
            'task_name' => $request['taskName']
        ]);
    }

    /**
     * @return array|mixed
     */
    public function dispatchGetGroupsJob(){
        $accessToken = $this->getSavedToken();
        if (!$accessToken) {
            $accessToken = $this->getToken();
            $this->updateToken($accessToken);
        }
        $groups = $this->getGroups($accessToken->access_token);
        if ($groups['error'] == "unauthorized"){
            $accessToken = $this->getToken();
            $this->updateToken($accessToken);
            $groups = $this->getGroups($accessToken->access_token);
        }
        $token=$accessToken->access_token;
        foreach ($groups['data'] as $group){
            $response = $this->getTasks($token,$group['taskGroupId']);
            if(count($response['data']) > 0){
                foreach ($response['data'] as $task){
                    GetTaskJob::dispatch($task);
                }
            }
        }
        return $groups;
    }

    public function dispatchTasksJob($task){
        $accessToken = $this->getSavedToken();
        if (!$accessToken) {
            $accessToken = $this->getToken();
            $this->updateToken($accessToken);
        }
        $taskId = $task['taskId'];
        $token = $accessToken->access_token;
        $statusOfTask = $this->getStatusOfTask($token,$taskId);
        if ($statusOfTask['error'] == "unauthorized"){
            $accessToken = $this->getToken();
            $this->updateToken($accessToken);
            $token = $accessToken->access_token;
            $statusOfTask = $this->getStatusOfTask($token,$taskId);
        }
        $status = $statusOfTask['data'][0]['status'];
        if ($status == 2){
            $feeds=$this->getNonExportedFeeds($token,$taskId);
            if ($feeds['data']['total']>0){
                SaveFeedsJob::dispatch($feeds,$taskId);
            }
        }else{
            $this->startTask($token,$taskId);
        }
        return $task;
    }

    public function dispatchSaveFeedsJob($taskId, $feeds){
        $accessToken = $this->getSavedToken();
        if (!$accessToken) {
            $accessToken = $this->getToken();
            $this->updateToken($accessToken);
        }
        foreach ($feeds['data']['dataList'] as $feed) {
            $body = $feed['Text0'] . $feed['Text1'] . $feed['Text2'] . $feed['Text3'] . $feed['Text4'] . $feed['Text5'] . $feed['Text6'] . $feed['Text7'] . $feed['Text8'] . $feed['Text9'] . $feed['Text10'] . $feed['Text11'] . $feed['Text12'] . $feed['Text13'] . $feed['Text14'] . $feed['Text15'] . $feed['Text16'] . $feed['Text17'] . $feed['Text18'] . $feed['Text19'] . $feed['Text20'] . $feed['Text21'] . $feed['Text22'] . $feed['Text23'] . $feed['Text24'] . $feed['Text25'] . $feed['Text26'] . $feed['Text27'] . $feed['Text28'] . $feed['Text29'] . $feed['Text30'] . $feed['Text31'] . $feed['Text32'] . $feed['Text33'] . $feed['Text34'] . $feed['Text35'] . $feed['Text36'] . $feed['Text37'] . $feed['Text38'] . $feed['Text39'] . $feed['Text40'] . $feed['Text41'] . $feed['Text42'] . $feed['Text43'] . $feed['Text44'] . $feed['Text45'] . $feed['Text46'] . $feed['Text47'] . $feed['Text48'] . $feed['Text49'] . $feed['Text50'] . $feed['Text51'] . $feed['Text52'] . $feed['Text53'] . $feed['Text54'];
            $data = [
                'author' => $feed['Author'],
                'inLanguage' => null,
                'articleBody' => $body,
                'articleBodyHtml' => $body,
                'url' => null,
                'headline' => $feed['Title'],
                'description' => $feed['Text0'] . $feed['Text1'] . $feed['Text2'],
                'mainImage' => $feed['Img_src'],
                'canonicalUrl' => null
            ];
            $this->feedService->addFeed($data);
        }
        $res=$this->updateTaskStatus($accessToken->access_token,$taskId);
        if ($res['error'] == "unauthorized"){
            $accessToken = $this->getToken();
            $this->updateToken($accessToken);
            $this->updateTaskStatus($accessToken->access_token,$taskId);
        }
        $this->stopCurrentTask($accessToken->access_token,$taskId);
        return $feeds;
    }
}
