<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TestMail extends Mailable
{
    use Queueable, SerializesModels;
public $detalles;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($detalles)
    {
       $this->detalles=$detalles;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject("Este es un correo de prueba")
        ->view('emails.test');
    }
}
