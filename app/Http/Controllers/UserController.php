<?php

namespace App\Http\Controllers;

use App\Jobs\SendResetPasswordEmail;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use App\Jobs\SendUserRegisteredEmail;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    public function showRegistrationForm()
    {
        if (Auth::check()) {

            return redirect()->intended('/');
        }
        return view('auth.register');
    }


    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|min:2|max:255|regex:/^[A-Za-z ]+$/',
            'middle_name' => 'nullable|string|max:255',
            'last_name' => 'required|string|min:2|max:255|regex:/^[A-Za-z ]+$/',
            'email' => 'required|string|email|max:255|unique:users,email',
            'phone_number' => 'required|numeric|digits_between:10,15',
            'dob' => 'required|date',
            'password' => [
                'required',
                'string',
                'min:8', // At least 8 characters
                'regex:/[a-z]/', // At least one lowercase letter
                'regex:/[A-Z]/', // At least one uppercase letter
                'regex:/[0-9]/'  // At least one digit
            ],
            'password_confirmation' => 'required|same:password'
        ], [
            'name.regex' => 'Name must contain only letters and spaces.',
            'last_name.regex' => 'Last Name must contain only letters and spaces.',
            'password.regex' => 'Password must contain at least one lowercase letter, one uppercase letter, and one digit.',
        ]);

        // If validation fails, return with errors
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        try {

            // Create the user
            $user = User::create([
                'name' => $request->name,
                'middle_name' => $request->middle_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'phone_number' => $request->phone_number,
                'dob' => $request->dob,
                'password' => Hash::make($request->password),
                'role' => 2, // Assuming 2 indicates a standard User role
            ]);

            // Automatically log the user in
            Auth::login($user);

            // Store user login data in the session
            session([
                'user_login' => [
                    'user_id' => $user->id,
                    'user_name' => $user->name,
                ],
            ]);

            // Dispatch the job to send the registration email with the plain password
            SendUserRegisteredEmail::dispatch($user, $request->password);

            // Redirect after successful registration
            return redirect()->intended('/')
                ->with('success', 'Registration successful! You are now logged in.');
        } catch (\Exception $e) {
            // Handle any exceptions during registration
            return redirect()->back()
                ->with('error', 'An unexpected error occurred. Please try again.')
                ->withInput();
        }
    }

    public function showLoginForm()
    {
        if (Auth::check()) {
            // Redirect to home if the user is logged in
            return redirect()->intended('/');
        }
        return view('auth.login');
    }

    //user login
    public function login(Request $request)
    {
        try {
            // Validate request data
            $validator = Validator::make($request->all(), [
                'email' => 'required|exists:users,email',
                'password' => 'required|string|min:8',
            ]);

            if ($validator->fails()) {
                return redirect('/login')
                    ->withErrors($validator)
                    ->withInput();
            }

            // Attempt to retrieve user by email
            $user = User::where('email', $request->email)->first();

            // Check if user exists and has the correct role
            if ($user && $user->role === "2") {
                $credentials = $request->only('email', 'password');

                if (Auth::attempt($credentials)) {
                    session([
                        'user_login' => [
                            'user_id' => $user->id,
                            'user_name' => $user->name,
                        ],
                    ]);
                    return redirect()->intended('/');
                }
                // Authentication failed
                return redirect('/login')
                    ->with('error', 'Invalid credentials. Please try again.')
                    ->withInput();
            }

            // User does not have the correct role
            return redirect('/login')
                ->with('error', 'Unauthorized access. Please check your role.')
                ->withInput();
        } catch (ValidationException $e) {
            return redirect('/login')
                ->withErrors($e->validator)
                ->withInput();
        } catch (\Exception $e) {

            return redirect('/login')
                ->with('error', 'An unexpected error occurred. Please try again.')
                ->withInput();
        }
    }


    // Forget password page view
    public function showForgetPasswordForm()
    {
        return view('auth.forgetPassword');
    }

    public function submitForgetPasswordForm(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
        ]);

        $token = Str::random(64);

        try {
            // Check if a token already exists for this email
            $existingToken = DB::table('password_reset_tokens')->where('email', $request->email)->first();

            if ($existingToken) {
                // Update the existing token
                DB::table('password_reset_tokens')->where('email', $request->email)->update([
                    'token' => $token,
                    'created_at' => now(),
                ]);
            } else {
                // Insert a new token
                DB::table('password_reset_tokens')->insert([
                    'email' => $request->email,
                    'token' => $token,
                    'created_at' => now(),
                ]);
            }
        } catch (\Exception $e) {
            return back()->withErrors(['error' => 'Error while handling the password reset token: ' . $e->getMessage()]);
        }

        try {
            // Dispatch the job to send the reset password email
            SendResetPasswordEmail::dispatch($request->email, $token);
        } catch (\Exception $e) {
            return back()->withErrors(['error' => 'Error while sending the reset password email: ' . $e->getMessage()]);
        }

        return back()->with('message', 'We have e-mailed your password reset link!');
    }



    public function showResetPasswordForm($token)
    {
        return view('auth.forgetPasswordLink', ['token' => $token]);
    }

    // public function submitResetPasswordForm(Request $request)
    // {
    //     $request->validate([
    //         'email' => 'required|email|exists:users,email',
    //         'password' => 'required|string|min:6|confirmed',
    //         'password_confirmation' => 'required',
    //     ]);

    //     $updatePassword = DB::table('password_reset_tokens')
    //         ->where([
    //             'email' => $request->email,
    //             'token' => $request->token,
    //         ])
    //         ->first();

    //     if (!$updatePassword) {
    //         return back()->withInput()->with('error', 'Invalid token!');
    //     }

    //     User::where('email', $request->email)
    //         ->update(['password' => Hash::make($request->password)]);

    //     DB::table('password_reset_tokens')->where(['email' => $request->email])->delete();

    //     return redirect()->route('login')->with('message', 'Your password has been changed!');
    // }

    public function submitResetPasswordForm(Request $request)
    {
        try {
            $request->validate([
                'token' => 'required',
                'password' => 'required|string|min:8|confirmed',
                'password_confirmation' => 'required',
            ]);

            $resetToken = DB::table('password_reset_tokens')
                ->where('token', $request->token)
                ->first();

            if (!$resetToken) {
                return back()->withInput()->with('error', 'Invalid or expired reset token!');
            }


            User::where('email', $resetToken->email)
                ->update(['password' => Hash::make($request->password)]);

            DB::table('password_reset_tokens')->where('token', $request->token)->delete();

            return redirect()->route('login')->with('message', 'Your password has been successfully changed!');
        } catch (\Illuminate\Validation\ValidationException $e) {
            return back()->withInput()->withErrors($e->validator)->with('error', 'Validation error. Please correct the errors.');
        } catch (\Exception $e) {
            return back()->with('error', 'An unexpected error occurred. Please try again later.');
        }
    }


    //logout
    public function logout()
    {
        try {
            // Check if 'user_login' session exists
            if (session()->has('user_login')) {
                session()->flush(); // Clear all sessions
                Auth::logout();
                return redirect('/')->with('status', 'You have been logged out successfully.');
            } else {
                return redirect()->back()->with('error', 'User session not found. Unable to logout.');
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred while logging out. Please try again.');
        }
    }

    // User Password-change submit handler
    public function changePasswordSave(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'current_password' => 'required|string',
                'new_password' => 'required|string|min:8|confirmed',
                'new_password_confirmation' => 'required_with:new_password',
            ]);

            if (!Hash::check($request->input('current_password'), Auth::user()->password)) {
                return redirect()->back()->with('error', 'The current password does not match our records. Please try again.');
            }

            if (strcmp($request->input('current_password'), $request->input('new_password')) === 0) {
                return redirect()->back()->with('error', 'The new password cannot be the same as the current password. Please choose a different password.');
            }
            $user = Auth::user();
            $user->password = Hash::make($request->input('new_password'));
            $user->save();

            return redirect()->back()->with('success', 'Password changed successfully!');
        } catch (\Illuminate\Validation\ValidationException $e) {
            return redirect()->back()->withErrors($e->errors())->withInput();
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred while changing the password. Please try again.');
        }
    }


    //new forgot password

       // Forget password page view
       public function showNewForgetPasswordForm()
       {
           return view('auth.newForgotPassword');
       }

       //update password
       public function showUpdatePasswordForm() {
        return view('auth.newUpdatePassword');
    }
   
}
