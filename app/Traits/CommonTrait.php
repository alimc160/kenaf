<?php

namespace App\Traits;
use App\Feed;
use App\FeedLanguage;
use Illuminate\Support\Facades\Http;

trait CommonTrait
{
    public function sendCurlRequest($rosette,$content = null){
        $curl_handle = curl_init($rosette['url']);
        curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true);
        $params = 'X-RosetteAPI-Key: '.$rosette['key'];
        curl_setopt($curl_handle, CURLOPT_HTTPHEADER, array(
            $params
        ));

        if($content != null){
            curl_setopt($curl_handle, CURLOPT_POST, 1);
            $payload = json_encode( array( "content"=> $content) );//dd(   $payload );
            curl_setopt( $curl_handle, CURLOPT_POSTFIELDS, $payload );
            curl_setopt($curl_handle, CURLOPT_HTTPHEADER, array('Content-Type: application/json','Accept: application/json','Cache-Control: no-cache',$params));


        }
        $buffer = curl_exec($curl_handle);

        curl_close($curl_handle);

        return $buffer;
    }

    public function getToken(){
        return Http::asForm()->post('https://advancedapi.octoparse.com/token', [
            'username' => config('app.octoparse_credentials.user_name'),
            'password' => config('app.octoparse_credentials.password'),
            'grant_type' => config('app.octoparse_credentials.grant_type')
        ])->json();
    }

    public function getGroups($token){
        return Http::withToken($token)->get('https://advancedapi.octoparse.com/api/TaskGroup')->json();
    }

    public function getTasks($token,$groupId){
        $url ='https://advancedapi.octoparse.com/api/Task';
        return Http::withToken($token)->get($url, [
            'taskGroupId' => $groupId
        ])->json();
    }

    public function startTask($token,$taskId){
        $url = 'https://advancedapi.octoparse.com/api/task/StartTask?taskId='.$taskId.'';
        return Http::withToken($token)->post($url)->json();
    }

    public function getNonExportedFeeds($token,$taskId){
        $url = 'https://advancedapi.octoparse.com/api/notexportdata/gettop?taskId='.$taskId.'&size=20';
        return Http::withToken($token)->get($url)->json();
    }

    public function getStatusOfTask($token,$taskId){
        $url = 'https://advancedapi.octoparse.com/api/task/GetTaskStatusByIdList';
        return Http::withToken($token)->post($url, [
            "taskIdList" => [$taskId]
        ])->json();
    }

    public function updateTaskStatus($token,$taskId){
        $url = 'https://advancedapi.octoparse.com/api/notexportdata/update?taskId='.$taskId.'';
        return Http::withToken($token)->post($url)->json();
    }

    public function stopCurrentTask($token,$taskId){
        $url = 'https://advancedapi.octoparse.com/api/task/StopTask?taskId='.$taskId.'';
        return Http::withToken($token)->post($url)->json();
    }
}
