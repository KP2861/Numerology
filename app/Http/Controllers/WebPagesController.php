<?php

namespace App\Http\Controllers;

use App\Models\Numerology;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WebPagesController extends Controller
{
    //
    public function index()
    {
        return view('Website.pages.contactus');
    }
    public function numero()
    {
        return view('Website.pages.numerology');
    }
    public function profile()
    {
        return view('Website.pages.profile');
    }
    public function fetchNumerologyType($type)
    {
        // Fetch the numerology type from the database
        $numerologyType = Numerology::where('numerology_type', $type)->value('numerology_type');

        // Return the numerology type as a JSON response
        return response()->json(['numerology_type' => $numerologyType]);
    }
}
