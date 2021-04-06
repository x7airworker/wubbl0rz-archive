<?php

namespace App\Jobs;

use App\Repositories\Interfaces\ClipRepositoryInterface;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class DownloadTwitchClip implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Execute the job.
     *
     * @param ClipRepositoryInterface $clipsRepo
     * @return void
     */
    public function handle(ClipRepositoryInterface $clipsRepo)
    {

    }
}
