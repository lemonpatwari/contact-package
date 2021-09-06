<?php

namespace lemonpatwari\Contact\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMailable extends Mailable
{
    use Queueable, SerializesModels;

    public $description;
    public $email;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($description, $email)
    {
        $this->description = $description;
        $this->email = $email;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('contact::contact.email')->with([
            'message' => $this->description,
            'email' => $this->email
        ]);
    }
}
