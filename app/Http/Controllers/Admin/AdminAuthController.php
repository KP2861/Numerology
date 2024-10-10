<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;


class AdminAuthController extends Controller
{
    //
    public function index()
    {
        return  view('Admin.auth.login');
    }

    //user login
    public function loginsubmit(Request $request)
    {
        try {

            // Check if the session 'user_login' exists and clear it
            if (session()->has('user_login')) {
                session()->flush();
            }
            // Validate request data
            $validator = Validator::make($request->all(), [
                'email' => 'required|exists:users,email',
                'password' => 'required|string|min:8',
            ]);

            if ($validator->fails()) {
                return redirect('/admin')
                    ->withErrors($validator)
                    ->withInput();
            }

            // Attempt to retrieve user by email
            $user = User::where('email', $request->email)->first();

            // Check if user exists and has the correct role
            if ($user && $user->role === "1") {
                $credentials = $request->only('email', 'password');

                if (Auth::attempt($credentials)) {
                    return redirect()->intended('/admin/dashboard');
                }

                // Authentication failed
                return redirect('/admin')
                    ->with('error', 'Invalid credentials. Please try again.')
                    ->withInput();
            }

            // User does not have the correct role
            return redirect('/admin')
                ->with('error', 'Unauthorized access. Please check your role.')
                ->withInput();
        } catch (ValidationException $e) {
            return redirect('/admin')
                ->withErrors($e->validator)
                ->withInput();
        } catch (\Exception $e) {

            return redirect('/admin')
                ->with('error', 'An unexpected error occurred. Please try again.')
                ->withInput();
        }
    }


    //Admin logout function...
    public function destroy()
    {
        try {
            Auth::logout();
            return redirect('admin');
        } catch (\Exception $e) {
            // Log or handle the exception appropriately
            return redirect()->back()->withInput()->withErrors(['error' => 'An error occurred while logout.']);
        }
    }
    //...end

}
