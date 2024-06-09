<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class sendEmail extends Mailable
{
    use Queueable, SerializesModels;
    public $mailData;
    public $vista;
    public $asunto;
    public $remitente;
    /**
     * Create a new message instance.
     */
    public function __construct($mailData, $vista, $asunto, $remitente)
    {
        $this->mailData = $mailData;
        $this->vista = $vista;
        $this->asunto =  $asunto;
        $this->remitente = $remitente;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject($this->asunto)
                    ->view($this->vista);
    }
}
