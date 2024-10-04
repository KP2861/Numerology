<?php

namespace App\Http\Controllers;

use App\Mail\TestEmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\JsonResponse;

class EmailController extends Controller
{
    public function sendEmail(): JsonResponse
    {
        Mail::to('mandeeps7572@gmail.com')->send(new TestEmail());
        return response()->json(['message' => 'Email sent successfully!']);
    }

    public function payment1()
    {
        return view('emails.payment_success');
    }
    //testMail2

    public function testMail2()
    {
        return view('emails.forgetPassword');
    }
}
