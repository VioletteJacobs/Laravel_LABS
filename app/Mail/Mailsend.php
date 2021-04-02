<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Mailsend extends Mailable
{
    use Queueable, SerializesModels;

    public $letter;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->letter = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        return $this->from($this->letter->email)->subject($this->letter->subject)->view('template.mail.templateMail')->with(["email" => $this->letter->email, "message" => $this->letter->message, "name" => $this->letter->name]);
    }
}
