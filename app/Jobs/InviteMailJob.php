<?php

namespace App\Jobs;

use App\Mail\InviteMail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class InviteMailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    public $poll_id;
    public $voters;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($poll_id,$voters)
    {
        $this->poll_id = $poll_id;
        $this->voters = $voters;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        // mail to voters
        foreach($this->voters as $voter) {
            Mail::to($voter)->send(new InviteMail($this->poll_id));
        }
    }
}
