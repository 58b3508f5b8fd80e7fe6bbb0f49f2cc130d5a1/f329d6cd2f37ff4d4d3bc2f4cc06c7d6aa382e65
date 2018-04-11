<?php

namespace App\Mail;

use App\Registration;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class RegistrationConfirmation extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    protected $registration;
    public function __construct($id)
    {
        //
        $this->registration = Registration::where('reg_id', $id)->first();
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.registration.confirmation')->with([
            'name'   => $this->registration->first_name,
            'regID'  => $this->registration->reg_id,
            'zone'   => $this->registration->zone,
            'centre' => $this->registration->centre,
            'status' => $this->registration->status
        ]);
    }
}
