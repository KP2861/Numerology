<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    //
    public function index(Request $request){
        return  view('Admin.dashboard.dashboard');
    }
}
