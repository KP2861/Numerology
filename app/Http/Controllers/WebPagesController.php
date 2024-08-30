<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebPagesController extends Controller
{
    //
    public function index(){
        return view('Website.pages.contactus');

    }
}
