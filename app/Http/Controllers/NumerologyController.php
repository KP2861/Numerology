<?php

namespace App\Http\Controllers;

use App\Models\NameNumerology;
use App\Models\BusinessNumerology;
use Illuminate\Http\Request;

class NumerologyController extends Controller
{
    // Display the form to create a new Name Numerology record
    public function createNameNumerology()
    {
        return view('numerology.name_numerology');
    }

    // Store a new Name Numerology record
    public function storeNameNumerology(Request $request)
    {
        $validated = $request->validate([
            'numerology_type' => 'required|integer',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'dob' => 'required|date',
        ]);

        NameNumerology::create($validated);

        return redirect()->back()->with('success', 'Record added successfully!');
    }

    // Display the form to create a new Business Numerology record
    public function createBusinessNumerology()
    {
        return view('numerology.business_numerology');
    }

    // Store a new Business Numerology record
    public function storeBusinessNumerology(Request $request)
    {
        $validated = $request->validate([
            'numerology_type' => 'required|integer',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'dob' => 'required|date',
            'phone_number' => 'required|string|max:20',
            'type_of_business' => 'required|string|max:255',
        ]);

        BusinessNumerology::create($validated);

        return redirect()->back()->with('success', 'Record added successfully!');
    }
}
