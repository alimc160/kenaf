<?php

namespace App\Jobs;

use App\Services\FeedService;
use App\Services\OctoparseService;
use App\Traits\CommonTrait;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SaveFeedsJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels,CommonTrait;

    public $feeds;
    public $taskId;
    public $tries = 3;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($feeds, $taskId)
    {
        $this->feeds = $feeds;
        $this->taskId = $taskId;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(OctoparseService $octoparseService)
    {
        $octoparseService->dispatchSaveFeedsJob($this->taskId,$this->feeds);
    }
}
