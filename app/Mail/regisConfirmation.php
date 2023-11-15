<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class regisConfirmation extends Mailable
{
    use Queueable, SerializesModels;
    public $data;
    public function __construct($request)
    {
        $this->data = $request;
    }

    public function build()
    {
    return $this->subject("Konfirmasi Registrasi")
    ->view('emails.verifikasi_regis');
    }
}