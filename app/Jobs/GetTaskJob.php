<?php

namespace App\Jobs;

use App\Services\OctoparseService;
use App\Traits\CommonTrait;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class GetTaskJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels,CommonTrait;

    /**
     * @var $task
     */
    public $task;
    /**
     * @var int
     */
    public $tries = 3;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($task)
    {
        $this->task = $task;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(OctoparseService $octoparseService)
    {
        $octoparseService->dispatchTasksJob($this->task);
    }
}
