<?php

namespace App\Jobs;

use App\Mail\PaymentSuccessMail;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendPaymentSuccessEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $userEmail;
    protected $emailData;
    protected $NumerologyData; // Add this property

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($userEmail, $emailData, $NumerologyData)
    {
        $this->userEmail = $userEmail;
        $this->emailData = $emailData;
        $this->NumerologyData = $NumerologyData; // Initialize it
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        // Sending the email using Mailable
        Mail::to($this->userEmail)->send(new PaymentSuccessMail($this->emailData, $this->NumerologyData));
    }
}
