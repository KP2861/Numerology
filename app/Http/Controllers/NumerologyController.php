<?php

namespace App\Http\Controllers;

use App\Models\NameNumerology;
use App\Models\BusinessNumerology;
use App\Models\Numerology;
use App\Models\PhoneNumerology;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class NumerologyController extends Controller
{
    // View numerology type form
    public function createNumerology()
    {
        return view('numerology.numerology');
    }

    public function storeNumerology(Request $request)
    {
        try {
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'type' => 'required|numeric',
            ]);

            // Assuming user_id should be dynamic, but using 1 for now
            $validated['user_id'] = Auth::id() ?? 1;

            Numerology::create($validated);

            return redirect()->route('numerology.selectNumerology')->with('success', 'Record added successfully!');
        } catch (\Exception $e) {
            Log::error('Failed to add numerology record: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Failed to add record. Please try again.');
        }
    }

    // Display the form to create a new Name Numerology record
    public function createNameNumerology()
    {
        return view('numerology.name_numerology');
    }

    // Store a new Name Numerology record
    public function storeNameNumerology(Request $request)
    {
        try {
            $validated = $request->validate([
                'numerology_type' => 'required|integer',
                'first_name' => 'required|string|max:10',
                'last_name' => 'required|string|max:10',
                'dob' => 'required|date',
                'gender' => 'required|string|in:Male,Female',
            ]);

            NameNumerology::create($validated);

            return redirect()->back()->with('success', 'Record added successfully!');
        } catch (\Exception $e) {
            Log::error('Failed to add name numerology record: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Failed to add record. Please try again.');
        }
    }

    // Display the form to create a new Business Numerology record
    public function createBusinessNumerology()
    {
        return view('numerology.business_numerology');
    }

    // Store a new Business Numerology record
    public function storeBusinessNumerology(Request $request)
    {
        try {
            $validated = $request->validate([
                'numerology_type' => 'required|integer',
                'first_name' => 'required|string|max:255',
                'last_name' => 'required|string|max:255',
                'dob' => 'required|date',
                'phone_number' => 'required|string|max:10',
                'type_of_business' => 'required|string|max:255',
            ]);

            BusinessNumerology::create($validated);

            return redirect()->back()->with('success', 'Record added successfully!');
        } catch (\Exception $e) {
            Log::error('Failed to add business numerology record: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Failed to add record. Please try again.');
        }
    }

    // Display the form to create a new Phone Numerology record
    public function createPhoneNumerology()
    {
        return view('numerology.phone_numerology');
    }

    // Store a new Phone Numerology record
    public function storePhoneNumerology(Request $request)
    {
        try {
            $validated = $request->validate([
                'numerology_type' => 'required|integer',
                'phone_number' => 'required|string|max:20',
                'dob' => 'required|date',
                'area_of_concern' => 'required|string|max:255',
            ]);

            PhoneNumerology::create($validated);

            return redirect()->back()->with('success', 'Record added successfully!');
        } catch (\Exception $e) {
            Log::error('Failed to add phone numerology record: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Failed to add record. Please try again.');
        }
    }
}
