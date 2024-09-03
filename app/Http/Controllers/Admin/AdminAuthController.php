<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AdminAuthController extends Controller
{
    //
    public function index(){
        return  view('Admin.auth.login');
    }

     //user login
     public function loginsubmit(Request $request)
     {
         try {
             $validator = Validator::make($request->all(), [
                 'email' => 'required|exists:users,email',
                 'password' => 'required|string|min:8',
             ]);
 
             // Check if validation fails
             if ($validator->fails()) {
                 return redirect('/admin/login')
                     ->withErrors($validator)
                     ->withInput();
             }
 
             // Attempt authentication
             $credentials = $request->only('email', 'password');
 
             if (Auth::attempt($credentials)) {
                 return redirect()->intended('/admin/dashboard');
             }
 
             // If authentication fails
             return redirect('/admin/login')
                 ->with('error', 'Invalid credentials. Please try again.');
         }
          catch (ValidationException $e) {
             return redirect('/admin/login')
                 ->withErrors($e->validator)
                 ->withInput();
         } catch (\Exception $e) {
             return redirect('/admin/login')
                 ->with('error', 'An unexpected error occurred. Please try again.')
                 ->withInput();
          }
     }
 
}
