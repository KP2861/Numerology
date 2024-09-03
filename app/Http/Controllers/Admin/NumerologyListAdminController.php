<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\NameNumerology;
use App\Models\PhoneNumerology;
use App\Models\BusinessNumerology;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\Crypt;

use Exception;

class NumerologyListAdminController extends Controller
{
    public function nameNumerologyList(Request $request)
    {
        try {
            // Fetch all name numerologies and count them
            $nameNumerologies = NameNumerology::with(['numerology.user'])
                ->get()
                ->map(function ($nameNumerology) {
                    $numerology = $nameNumerology->numerology;
                    $user = $numerology ? $numerology->user : null;
                    return [
                        'id' => $numerology ? $numerology->id : 'N/A',
                        'numerology_name' => $numerology ? $numerology->name : 'N/A',
                        'first_name' => $nameNumerology->first_name,
                        'last_name' => $nameNumerology->last_name,
                        'dob' => $nameNumerology->dob,
                        'gender' => $nameNumerology->gender,
                        'user_name' => $user ? $user->name : 'N/A',
                        'user_email' => $user ? $user->email : 'N/A'
                    ];
                });

            // Count the number of name numerologies
            $nameNumerologyCount = $nameNumerologies->count();

            Log::info('Fetched Name Numerologies:', $nameNumerologies->toArray());
            Log::info('Name Numerology Count: ' . $nameNumerologyCount);

            // Pass the count along with the data to the view
            return view('Admin.numerology.list', [
                'nameNumerologies' => $nameNumerologies,
                'nameNumerologyCount' => $nameNumerologyCount
            ]);
        } catch (Exception $e) {
            Log::error('Error fetching name numerologies: ' . $e->getMessage());
            return redirect()->route('error.page')->with('error', 'An error occurred while fetching the name numerologies.');
        }
    }


    public function phoneNumerologyList(Request $request)
    {
        try {
            // Fetch phone numerologies with related numerology and user data
            $phoneNumerologies = PhoneNumerology::with(['numerology.user']) // Eager load the numerology and user
                ->get()
                ->map(function ($phoneNumerology) {
                    $numerology = $phoneNumerology->numerology;
                    $user = $numerology ? $numerology->user : null;

                    return [
                        'id' => $numerology ? $numerology->id : 'N/A',
                        'numerology_type' => $numerology ? $numerology->name : 'N/A',
                        'phone_number' => $phoneNumerology->phone_number,
                        'dob' => $phoneNumerology->dob,
                        'area_of_concern' => $phoneNumerology->area_of_concern,
                        'user_name' => $user ? $user->name : 'N/A',
                        'user_email' => $user ? $user->email : 'N/A',
                    ];
                });

            Log::info('Fetched Phone Numerologies:', $phoneNumerologies->toArray());

            return view('Admin.numerology.phone_numerology_list', ['phoneNumerologies' => $phoneNumerologies]);
        } catch (Exception $e) {
            Log::error('Error fetching phone numerologies: ' . $e->getMessage());
            return redirect()->route('error.page')->with('error', 'An error occurred while fetching the phone numerologies.');
        }
    }


    public function businessNumerologyList(Request $request)
    {
        try {
            // Fetch business numerologies with related numerology and user data
            $businessNumerologies = BusinessNumerology::with(['numerology.user']) // Eager load the numerology and user
                ->get()
                ->map(function ($businessNumerology) {
                    $numerology = $businessNumerology->numerology;
                    $user = $numerology ? $numerology->user : null;

                    return [
                        'id' => $numerology ? $numerology->id : 'N/A',
                        'numerology_type' => $numerology ? $numerology->name : 'N/A', // Adjust if 'name' is the correct field for the type
                        'first_name' => $businessNumerology->first_name,
                        'last_name' => $businessNumerology->last_name,
                        'dob' => $businessNumerology->dob,
                        'phone_number' => $businessNumerology->phone_number,
                        'type_of_business' => $businessNumerology->type_of_business,
                        'user_name' => $user ? $user->name : 'N/A',
                        'user_email' => $user ? $user->email : 'N/A',
                    ];
                });

            Log::info('Fetched Business Numerologies:', $businessNumerologies->toArray());

            return view('Admin.numerology.bussiness_numerology_list', ['businessNumerologies' => $businessNumerologies]);
        } catch (Exception $e) {
            Log::error('Error fetching business numerologies: ' . $e->getMessage());
            return redirect()->route('error.page')->with('error', 'An error occurred while fetching the business numerologies.');
        }
    }



    public function downloadPdf(Request $request, $type)
    {
        try {
            $pdf = null;
            $viewData = [];

            switch ($type) {
                case 'name':
                    $numerologies = NameNumerology::with(['numerology.user'])
                        ->get()
                        ->map(function ($nameNumerology) {
                            $numerology = $nameNumerology->numerology;
                            $user = $numerology ? $numerology->user : null;
                            return [
                                'numerology_name' => $numerology ? $numerology->name : 'N/A',
                                'first_name' => $nameNumerology->first_name,
                                'last_name' => $nameNumerology->last_name,
                                'dob' => $nameNumerology->dob,
                                'gender' => $nameNumerology->gender,
                                'user_name' => $user ? $user->name : 'N/A',
                                'user_email' => $user ? $user->email : 'N/A'
                            ];
                        });
                    $viewData['nameNumerologies'] = $numerologies;
                    $pdf = PDF::loadView('Admin.numerology.pdf', $viewData);
                    break;

                case 'phone':
                    $numerologies = PhoneNumerology::all()
                        ->map(function ($phoneNumerology) {
                            return [
                                'numerology_type' => $phoneNumerology->numerology_type,
                                'phone_number' => $phoneNumerology->phone_number,
                                'dob' => $phoneNumerology->dob,
                                'area_of_concern' => $phoneNumerology->area_of_concern
                            ];
                        });
                    $viewData['phoneNumerologies'] = $numerologies;
                    $pdf = PDF::loadView('Admin.numerology.phone_pdf', $viewData);
                    break;

                case 'business':
                    $numerologies = BusinessNumerology::all()
                        ->map(function ($businessNumerology) {
                            return [
                                'numerology_type' => $businessNumerology->numerology_type,
                                'first_name' => $businessNumerology->first_name,
                                'last_name' => $businessNumerology->last_name,
                                'dob' => $businessNumerology->dob,
                                'phone_number' => $businessNumerology->phone_number,
                                'type_of_business' => $businessNumerology->type_of_business
                            ];
                        });
                    $viewData['businessNumerologies'] = $numerologies;
                    $pdf = PDF::loadView('Admin.numerology.business_pdf', $viewData);
                    break;

                default:
                    return redirect()->route('error.page')->with('error', 'Invalid type for PDF generation.');
            }

            return $pdf->download($type . '_numerologies_report.pdf');
        } catch (Exception $e) {
            Log::error('Error generating PDF: ' . $e->getMessage());
            return redirect()->route('error.page')->with('error', 'An error occurred while generating the PDF.');
        }
    }

    public function nameNumerologyDetail($id)
    {
        try {
            // Decrypt the ID if it is encrypted
            $decryptedId = Crypt::decryptString($id);

            // Fetch the specific NameNumerology entry by the decrypted ID
            $nameNumerology = NameNumerology::with(['numerology.user'])
                ->findOrFail($decryptedId);

            // Get the related numerology and user data
            $numerology = $nameNumerology->numerology;
            $user = $numerology ? $numerology->user : null;

            // Prepare the data for the view
            $data = [
                'id' => $numerology ? $numerology->id : 'N/A',
                'numerology_name' => $numerology ? $numerology->name : 'N/A',
                'first_name' => $nameNumerology->first_name,
                'last_name' => $nameNumerology->last_name,
                'dob' => $nameNumerology->dob,
                'gender' => $nameNumerology->gender,
                'user_name' => $user ? $user->name : 'N/A',
                'user_email' => $user ? $user->email : 'N/A' // Decrypt email
            ];

            Log::info('Fetched Name Numerology Detail:', $data);

            return view('Admin.numerology.name_numerology_detail', ['nameNumerology' => $data]);
        } catch (Exception $e) {
            Log::error('Error fetching name numerology detail: ' . $e->getMessage());
            return redirect()->route('error.page')->with('error', 'An error occurred while fetching the name numerology detail.');
        }
    }

    public function phoneNumerologyDetail($id)
    {
        try {
            // Decrypt the ID if it is encrypted
            $decryptedId = Crypt::decryptString($id);

            // Fetch the specific PhoneNumerology entry by the decrypted ID
            $phoneNumerology = PhoneNumerology::with(['numerology.user'])
                ->findOrFail($decryptedId);

            // Get the related numerology and user data
            $numerology = $phoneNumerology->numerology;
            $user = $numerology ? $numerology->user : null;

            // Prepare the data for the view
            $data = [
                'numerology_type' => $numerology ? $numerology->name : 'N/A',
                'phone_number' => $phoneNumerology->phone_number,
                'dob' => $phoneNumerology->dob,
                'area_of_concern' => $phoneNumerology->area_of_concern,
                'user_name' => $user ? $user->name : 'N/A',
                'user_email' => $user ? $user->email : 'N/A'
            ];

            Log::info('Fetched Phone Numerology Detail:', $data);

            return view('Admin.numerology.phone_numerology_detail', ['phoneNumerology' => $data]);
            } catch (Exception $e) {
            Log::error('Error fetching phone numerology detail: ' . $e->getMessage());
            return redirect()->route('error.page')->with('error', 'An error occurred while fetching the phone numerology detail.');
        }
        
    }

    public function busssinessNumerologyDetail($id)
{
    try {
        // Decrypt the ID if it is encrypted
        $decryptedId = Crypt::decryptString($id);

        // Fetch the specific BusinessNumerology entry by the decrypted ID
        $businessNumerology = BusinessNumerology::with(['numerology.user'])
            ->findOrFail($decryptedId);

        // Get the related numerology and user data
        $numerology = $businessNumerology->numerology;
        $user = $numerology ? $numerology->user : null;

        // Prepare the data for the view
        $data = [
            'id' => $numerology ? $numerology->id : 'N/A',
            'numerology_name' => $numerology ? $numerology->name : 'N/A',
            'first_name' => $businessNumerology->first_name,
            'last_name' => $businessNumerology->last_name,
            'dob' => $businessNumerology->dob,
            'phone_number' => $businessNumerology->phone_number,
            'type_of_business' => $businessNumerology->type_of_business,
            'user_name' => $user ? $user->name : 'N/A',
            'user_email' => $user ? $user->email : 'N/A'
        ];

        Log::info('Fetched Business Numerology Detail:', $data);

        return view('Admin.numerology.business_numerology_detail', ['businessNumerology' => $data]);
    } catch (Exception $e) {
        Log::error('Error fetching business numerology detail: ' . $e->getMessage());
        return redirect()->route('error.page')->with('error', 'An error occurred while fetching the business numerology detail.');
    }
}

}
