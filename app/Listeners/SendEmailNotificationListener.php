<?php

namespace App\Listeners;

use App\Events\PrivatePollCreatedEvent;
use App\Mail\SendInvitationMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendEmailNotificationListener implements ShouldQueue
{
    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(PrivatePollCreatedEvent $poll)
    {
        // dd($poll);
        // dd ($poll->request->allowed_voters);
        $emails = json_decode($poll->request->allowed_voters);
        // dd(gettype($emails));
        foreach($emails as $email)
        {
            Mail::to($email)->send(new SendInvitationMail($poll->request,$email));
        }
    }
}
