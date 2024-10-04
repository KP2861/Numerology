<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Exception;

class UserProfileController extends Controller
{
    public function update(Request $request)
    {
        // Validate the input data
        $request->validate([
            'name' => 'required|string|min:2|max:255|regex:/^[A-Za-z ]+$/',
            'middle_name' => 'nullable|string|max:25|regex:/^[A-Za-z ]+$/',
            'last_name' => 'required|string|max:25|regex:/^[A-Za-z ]+$/',
            'email' => 'required|email|max:50',
            'phone_number' => 'required|string|regex:/\d{10}/',
            'dob' => 'required|date',
            'file' => 'nullable|file|mimes:jpg,jpeg,png|max:2048',
        ]);

        // dd($request->all());

        try {
            // Get the authenticated user
            $user = Auth::user();
            // Check if a file is uploaded
            if ($request->hasFile('file')) {
                $extension = $request->file('file')->getClientOriginalExtension();
                $originalFileName = $request->file('file')->getClientOriginalName();
                $originalFileName = pathinfo($originalFileName, PATHINFO_FILENAME);
                $fileName = $originalFileName . '.' . $extension;

                // Store the file and update the user file path
                $path = $request->file('file')->storeAs('userImg', $fileName, 'public');
                $user->file = $path;
            }

            // Update other user data
            $user->update([
                'name' => $request->input('name'),
                'middle_name' => $request->input('middle_name'),
                'last_name' => $request->input('last_name'),
                'email' => $request->input('email'),
                'phone_number' => $request->input('phone_number'),
                'dob' => $request->input('dob'),
            ]);

            // Redirect with success message
            return redirect()->back()->with('success', 'User updated successfully!');
        } catch (Exception $e) {
            // Log the error for debugging
            Log::error('User profile update failed: ' . $e->getMessage());

            // Return back with error message
            return redirect()->back()->with('error', 'An error occurred while updating the profile. Please try again.');
        }
    }
}
