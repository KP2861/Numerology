<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function showPaymentPage()
    {
        if (!session()->has('numerology_payment')) {

            return view('payment.payment', ['sessionExpired' => true]);
        }

        return view('payment.payment', ['sessionExpired' => false]);
    }
}
