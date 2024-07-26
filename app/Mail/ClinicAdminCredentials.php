<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ClinicAdminCredentials extends Mailable
{
    use Queueable, SerializesModels;

    public $username;
    public $password;
    public $licenseKey;

    public function __construct($username, $password, $licenseKey)
    {
        $this->username = $username;
        $this->password = $password;
        $this->licenseKey = $licenseKey;
    }

    public function build()
    {
        return $this->subject('Your Clinic Admin Credentials')
            ->view('emails.clinic_admin_credentials');
    }
}
