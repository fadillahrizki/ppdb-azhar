<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SmkRegistration extends Mailable
{
    use Queueable, SerializesModels;

    public $siswa;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($siswa)
    {
        //
        $this->siswa = $siswa;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Pendaftaran Peserta Didik Baru Al Azhar Jenjang SMK')->view('mails.smk-registration');
    }
}
