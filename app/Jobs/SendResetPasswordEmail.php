<?php

namespace App\Jobs;

use App\Mail\ResetPasswordMail;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendResetPasswordEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $userEmail;
    protected $token;

    public function __construct($userEmail, $token)
    {
        $this->userEmail = $userEmail;
        $this->token = $token;
    }

    public function handle()
    {
        Mail::to($this->userEmail)->send(new ResetPasswordMail($this->token));
    }
}
