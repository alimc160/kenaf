<?php

namespace App\Http\Controllers\Octoparse;

use App\Http\Controllers\Controller;
use App\Jobs\GetFeedsDataJob;
use App\Jobs\GetGroupsJob;
use App\Services\OctoparseService;
use App\Traits\CommonTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class OctoparseController extends Controller
{
    use CommonTrait;

    public function __construct()
    {
        $this->octoparseService = new OctoparseService;
    }

    /**
     * @return array
     */
    public function getAccessToken()
    {
        try {
            $response = $this->getToken();
            return ['status' => 'success', 'result' => $response];
        } catch (\Exception $exception) {
            error_logs($exception);
            return ['status' => 'fail', 'message' => $exception->getMessage()];
        }
    }

    /**
     * @param Request $request
     * @return array
     */
    public function refreshToken($refreshToken)
    {
        try {
            $url = 'https://advancedapi.octoparse.com/token';
            return Http::asForm()->post($url, [
                'refresh_token' => $refreshToken,
                'grant_type' => 'refresh_token'
            ])->json();
        } catch (\Exception $exception) {
            error_logs($exception);
            return ['status' => 'fail', 'message' => $exception->getMessage()];
        }
    }

    /**
     * @return array
     */
    public function getAllTaskGroups($token)
    {
        try {
            $response = $this->getGroups($token);
            if (isset($response['error']) && $response['error'] == "unauthorized") {
                $getToken = $this->getToken();
                if (!isset($refreshToken['error'])) {
                    $this->octoparseService->updateToken($getToken);
                }
                $response = $this->getGroups($getToken['access_token']);
            }
            return ['status' => 'success', 'result' => $response];
        } catch (\Exception $exception) {
            error_logs($exception);
            return ['status' => 'fail', 'message' => $exception->getMessage()];
        }
    }

    /**
     * @param Request $request
     * @return array
     */
    public function getListAllTasksByGroup($token)
    {
        try {
            $accessToken = $this->octoparseService->getSavedToken();
            $groups = ['data'=>[['taskGroupId'=>523151],['taskGroupId'=>525109]]];
            foreach ($groups['data'] as $group){
                $response = $this->getTasks($accessToken->access_token,$group['taskGroupId']);
                if(count($response['data']) > 0){
                    foreach ($response['data'] as $task){
                        $this->startTask($accessToken->access_token,$task['taskId']);
                        $this->octoparseService->addTask($task);
                    }
                }
            }
//            dd($response['data']);
//            return ['status' => 'success', 'result' => $response];
        } catch (\Exception $exception) {
            error_logs($exception);
            return ['status' => 'fail', 'message' => $exception->getMessage()];
        }
    }

    /**
     * @param Request $request
     * @return array
     */
    public function tasksStatus(Request $request)
    {
        $request->validate([
            'token' => 'required',
        ]);
        try {
            $url = config('app.octoparse_url') . '/api/task/GetTaskStatusByIdList';
            $response = Http::withToken($request->token)->post($url, [
                "taskIdList" => [
                    "47e86a42-f656-381d-cf1e-2ed1fe84abcc",
                    "77aa2f90-29f4-469c-9cee-6973cf240452",
                    "8564be0c-4e21-4e11-9ba6-37b8c886cda6",
                    "c7294182-bff2-4ad3-95e5-76c98b587408",
                    "ce1c40bf-740c-4e82-820c-00d19ca19d1e",
                    "f2610a00-fc18-46f9-9738-2f7efd90db3d"
                ]
            ])->json();
            return ['status' => 'success', 'result' => $response];
        } catch (\Exception $exception) {
            error_logs($exception);
            return ['status' => 'fail', 'message' => $exception->getMessage()];
        }
    }

    /**
     * @param Request $request
     */
    public function startGroupTask(Request $request)
    {
        try {
            $response = $this->octoparseService->getSavedToken();
            return ['status' => 'success', 'result' => $response];
        } catch (\Exception $exception) {
            error_logs($exception);
            return ['status' => 'fail', 'message' => $exception->getMessage()];
        }
    }

    /**
     * @param Request $request
     * @return array
     */
    public function stopTask(Request $request)
    {
        $request->validate([
            'token' => 'required',
        ]);
        try {
            $url = 'https://advancedapi.octoparse.com/api/task/StopTask?taskId=f2610a00-fc18-46f9-9738-2f7efd90db3d';
            $response = Http::withToken($request->token)->post($url)->json();
            return ['status' => 'success', 'result' => $response];
        } catch (\Exception $exception) {
            error_logs($exception);
            return ['status' => 'fail', 'message' => $exception->getMessage()];
        }
    }

    public function getNonExportData(Request $request)
    {
        $request->validate([
            'token' => 'required',
        ]);
        try {
            $url = 'https://advancedapi.octoparse.com/api/notexportdata/gettop?taskId=f2610a00-fc18-46f9-9738-2f7efd90db3d&size=20';
            $response = Http::withToken($request->token)->get($url)->json();
            return ['status' => 'success', 'result' => $response];
        } catch (\Exception $exception) {
            error_logs($exception);
            return ['status' => 'fail', 'message' => $exception->getMessage()];
        }
    }

    public function getDataOfTaskByOffset(Request $request)
    {
        $request->validate([
            'token' => 'required',
        ]);
        try {
            $url = 'https://advancedapi.octoparse.com/api/alldata/GetDataOfTaskByOffset?taskId=f2610a00-fc18-46f9-9738-2f7efd90db3d&size=10&offset=1';
            $response = Http::withToken($request->token)->get($url)->json();
            return ['status' => 'success', 'result' => $response];
        } catch (\Exception $exception) {
            error_logs($exception);
            return ['status' => 'fail', 'message' => $exception->getMessage()];
        }
    }

    /**
     * @param Request $request
     * @return array
     */
    public function updateDataExported(Request $request)
    {
        $request->validate([
            'token' => 'required',
        ]);
        try {
            $url = 'https://advancedapi.octoparse.com/api/notexportdata/update?taskId=f2610a00-fc18-46f9-9738-2f7efd90db3d';
            $response = Http::withToken($request->token)->post($url)->json();
            return ['status' => 'success', 'result' => $response];
        } catch (\Exception $exception) {
            error_logs($exception);
            return ['status' => 'fail', 'message' => $exception->getMessage()];
        }
    }

    public function RemoveTaskData(Request $request)
    {
        $request->validate([
            'token' => 'required',
        ]);
        try {
            $url = 'https://advancedapi.octoparse.com/api/task/RemoveDataByTaskId?taskId=f2610a00-fc18-46f9-9738-2f7efd90db3d';
            $response = Http::withToken($request->token)->post($url)->json();
            return ['status' => 'success', 'result' => $response];
        } catch (\Exception $exception) {
            error_logs($exception);
            return ['status' => 'fail', 'message' => $exception->getMessage()];
        }
    }

    public function dispatchGroupJob(){
        GetGroupsJob::dispatch();
        return "get group job dispatched";
    }

    public function dispatchGetFeedsJob(){
        GetFeedsDataJob::dispatch();
        return "get feeds job dispatched";
    }
}
