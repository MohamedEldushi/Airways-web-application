<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class YourCustomJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $argument1;
    protected $argument2;

    /**
     * Create a new job instance.
     *
     * @param mixed $argument1 First argument
     * @param mixed $argument2 Second argument
     */
    public function __construct($argument1, $argument2)
    {
        $this->argument1 = $argument1;
        $this->argument2 = $argument2;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        // You can use $this->argument1 and $this->argument2 here
    }
}
