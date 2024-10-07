<?php

namespace App\Http\Controllers;

use App\Models\AreaOfStruggle;
use App\Models\BusinessesList;
use App\Models\Consultant;
use App\Models\Numerology;
use App\Models\Article;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use GuzzleHttp\Client;

class WebPagesController extends Controller
{
    //
    public function index()
    {


        $businesses = BusinessesList::all();

        // Check if any businesses exist
        if ($businesses->isEmpty()) {
            return "No businesses found in the database.";
        }


        // Create the options HTML for the dropdown
        $options = '<option value="" >Select Occupation</option>';
        foreach ($businesses as $business) {
            // Set both value and visible text to business name
            $options .= '<option value=' . $business->bussiness_name . '>' . $business->bussiness_name . '</option>';
        }

        // Pass the options to the view
        return view('Website.pages.contactus', compact('options'));
    }

    public function getCities()

    {
        $client = new Client();
        $username = 'M1213'; // Your GeoNames username

        try {
            // Make a request to the GeoNames API for Indian cities
            $response = $client->get("http://api.geonames.org/searchJSON?country=IN&username={$username}");
            $data = json_decode($response->getBody(), true);

            // Extract the city names and IDs from the response
            $cities = [];
            foreach ($data['geonames'] as $city) {
                $cities[] = [
                    'id' => $city['geonameId'],
                    'name' => $city['name']
                ];
            }

            return response()->json($cities);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Unable to fetch cities: ' . $e->getMessage()], 500);
        }
    }


    public function consultantStore(Request $request)
    {
        try {
            $validated = $request->validate([
                'name' => 'required|string|max:50|regex:/^[A-Za-z ]+$/',
                'email' => 'required|email|max:100',
                'gender' => 'required|string|in:Male,Female',
                'dob' => 'required|date',
                'occupation' => 'required|string',
                'phone' => 'required|string|min:10|regex:/\d{10}/',
                'message' => 'required|string|max:500',
            ]);
        } catch (\Illuminate\Validation\ValidationException $e) {
            Log::error('Validation error: ' . json_encode($e->errors()));
            return redirect()->back()->withErrors($e->validator)->withInput();
        }

        try {
            $user_id = Auth::check() ? Auth::id() : 0;

            Consultant::create([
                'user_id' => $user_id,
                'name' => $validated['name'],
                'email' => $validated['email'],
                'gender' => $validated['gender'],
                'dob' => $validated['dob'],
                'occupation' => $validated['occupation'],
                'phone' => $validated['phone'],
                'message' => $validated['message'],
            ]);

            return redirect()->back()->with('success', 'Thank you! We’ll be in touch soon.');
        } catch (\Exception $e) {
            Log::error('Error in ConsultantController@store: ' . $e->getMessage());
            return redirect()->back()->with('error', 'An error occurred while saving consultant data. Please try again.');
        }
    }


    public function numero()
    {
        return view('Website.pages.numerology');
    }

    public function searchBusiness(Request $request)
    {
        // Fetch all businesses
        $businesses = BusinessesList::all();

        // Return businesses in JSON format
        return response()->json($businesses);
    }


    public function profile()
    {
        return view('Website.pages.profile');
    }
    //profile fetch 

    //numero
    public function fetchNumerologyType($type)
    {

        $numerology = Numerology::where('numerology_type', $type)->first();

        return response()->json(['numerology' => $numerology]);
    }
    public function reportHeader()
    {
        return view('pdf-reports.report-header');
    }

    public function reportFooter()
    {
        return view('pdf-reports.report-footer');
    }

    public function newHomePage()
    {
        return view('Website.pages.newHomePage');
    }
    public function getAreaOfStruggles()
    {
        $struggles = AreaOfStruggle::all();
        return response()->json($struggles);
    }
    public function confirmOrder()
    {
        return view('Website.pages.orderConfirm');
    }
    public function products()
    {
        return view('Website.pages.newNumerology');
    }
    public function home()
    {
        $article = Article::with('category')->latest()->take(6)->get();
        // dd($article);
        return view('Website.pages.home', ['article' => $article]);
    }
    public function error()
    {
        return view('Website.pages.error404');
    }

}
