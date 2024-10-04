<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PaymentSuccessMail extends Mailable
{
    use Queueable, SerializesModels;

    public $emailData;
    public $NumerologyData; // Add this property

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($emailData, $NumerologyData)
    {
        $this->emailData = $emailData;
        $this->NumerologyData = $NumerologyData; // Initialize it
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Payment Successful - Numerology Service')
            ->view('emails.payment_success');
    }
}
