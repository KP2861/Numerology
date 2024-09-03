<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminProfileController extends Controller
{
    //
    public function index(Request $request){
        return  view('Admin.profile.admin_profile');
    }

       //...Display the admin profile page...
       public function changePassword() {
        return view('Admin.profile.admin_changepass');
     }
   //end

}

