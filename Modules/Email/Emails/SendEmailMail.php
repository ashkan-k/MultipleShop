<?php

namespace Modules\Email\Emails;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendEmailMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $email = null;
    protected $title = null;
    protected $message = null;
    protected $template = null;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($email, $title, $message, $template)
    {
        $this->email = $email;
        $this->message = $message;
        $this->template = $template;
        $this->title = $title;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject($this->title)
            ->view($this->template);
    }

    public function content()
    {
        return new Content(
            view: $this->template,
            with: [
                'title' => $this->title,
                'data' => $this->message,
            ],
        );
    }
}
