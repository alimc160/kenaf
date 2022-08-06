<?php

namespace App\Jobs;

use App\Services\OctoparseService;
use App\Traits\CommonTrait;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\DB;

class GetFeedsDataJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels,CommonTrait;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(OctoparseService $octoparseService)
    {
        $accessToken = $octoparseService->getSavedToken();
        if (!$accessToken) {
            $accessToken = $this->getToken();
            $octoparseService->updateToken($accessToken);
        }
        $task=DB::table('tasks')->first();
        $res=$this->getStatusOfTask($accessToken->access_token,$task->task_id);
        if ($res['data'][0]['status'] == 2 ){
            $feeds=$this->getNonExportedFeeds($accessToken->access_token,$task->task_id);
            if ($feeds['error'] != "taskid_error" && $feeds['data']['total'] > 0){
                SaveFeedsJob::dispatch($feeds,$task->task_id);
            }
        }
    }
}
