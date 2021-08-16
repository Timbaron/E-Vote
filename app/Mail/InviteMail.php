<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class InviteMail extends Mailable
{
    use Queueable, SerializesModels;

    public $poll_code;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($poll_code)
    {
        $this->poll_code = $poll_code;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.invite')
        ->from('B-vote@support.com')
        ->subject('You Recieved an Invite Mail');
    }
}
