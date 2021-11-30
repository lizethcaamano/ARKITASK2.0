<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\Shouldqueue;
use Illuminate\Bus\Queueable;

class CambiarContrasenaMail extends Mailable
{
    use Queueable, SerializesModels;

    public $idUsuario;
    /**
     * Create a new message instance
     * 
     * @return void
     */
    public function __construct ($idUsuario)
    {
       $this->idUsuario = $idUsuario;
    }
    /**
     * Build the message
     * 
     * @return $this
     */
    public function build()
    {
        return $this->subject('Bienvenido a ARKITASK')->view('emails.CambiarContrasena');
    }
}