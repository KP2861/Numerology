<?php

namespace App\Http\Controllers;

use App\Models\NameNumerology;
use App\Models\BusinessNumerology;
use App\Models\Numerology;
use App\Models\PhoneNumerology;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Razorpay\Api\Api;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;

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
                'type' => 'required|integer|min:1|max:100',
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

    // public function paymentCallback(Request $request)
    // {
    //     try {
    //         $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));
    //         $orderId = $request->input('order_id');
    //         $paymentId = $request->input('payment_id');
    //         $signature = $request->input('signature');
    //         $invoiceId = $request->input('invoice_id');

    //         // Fetch and verify the order
    //         $order = $api->order->fetch($orderId);

    //         if ($api->utility->verifyPaymentSignature([
    //             'order_id' => $orderId,
    //             'payment_id' => $paymentId,
    //             'signature' => $signature
    //         ])) {
    //             // Payment verified successfully
    //             $phoneNumerologyData = $request->except(['order_id', 'payment_id', 'signature', 'invoice_id']);

    //             // Validate the incoming data
    //             $validator = Validator::make($phoneNumerologyData, [
    //                 'numerology_type' => 'required|integer',
    //                 'phone_number' => 'required|string|max:20',
    //                 'dob' => 'required|date',
    //                 'area_of_concern' => 'required|string|max:255',
    //                 'payment_id' => 'required|string',
    //                 'payment_status' => 'required|string',
    //             ]);

    //             if ($validator->fails()) {
    //                 // Handle validation errors
    //                 return redirect()->route('numerology.selectNumerology')
    //                     ->withErrors($validator)
    //                     ->withInput();
    //             }

    //             // Add additional data if needed
    //             $phoneNumerologyData['payment_status'] = 'completed';

    //             // Create the PhoneNumerology record
    //             PhoneNumerology::create($phoneNumerologyData);

    //             // return redirect()->route('numerology.selectNumerology')->with('success', 'Payment successful and record added!');
    //             $redirectRoute = $this->determineRedirectRoute($phoneNumerologyData['numerology_type']);
    //             return redirect()->route($redirectRoute)->with('success', 'Payment successful and record added!');
    //         } else {
    //             return redirect()->route('numerology.form')->with('error', 'Payment verification failed!');
    //         }
    //     } catch (\Exception $e) {
    //         Log::error('Payment callback error: ' . $e->getMessage());
    //         return redirect()->route('numerology.form')->with('error', 'Payment verification failed!');
    //     }
    // }


    // public function showNumerologyHistory(Request $request)
    // {
    //     try {
    //         $userId = Auth::id();
    //         $perPage = $request->get('perPage', 10);

    //         // Fetch all numerology types with pagination
    //         $nameNumerology = NameNumerology::where('user_id', $userId)->get();
    //         $businessNumerology = BusinessNumerology::where('user_id', $userId)->get();
    //         $phoneNumerology = PhoneNumerology::where('user_id', $userId)->get();

    //         // Combine all records into one collection
    //         $allNumerologyRecords = $nameNumerology->concat($businessNumerology)
    //             ->concat($phoneNumerology);

    //         // Paginate the combined collection
    //         $currentPage = $request->get('page', 1);
    //         $totalRecords = $allNumerologyRecords->count();
    //         $paginatedRecords = $allNumerologyRecords->forPage($currentPage, $perPage);


    //         $numerologyTypes = Numerology::all()->keyBy('numerology_type');


    //         $paginatedRecords->transform(function ($item) use ($numerologyTypes) {
    //             $item->numerology_type_name = $numerologyTypes->get($item->numerology_type)->name ?? 'Unknown';
    //             return $item;
    //         });


    //         $paginationData = [
    //             'data' => $paginatedRecords,
    //             'current_page' => $currentPage,
    //             'per_page' => $perPage,
    //             'total' => $totalRecords,
    //             'last_page' => (int)ceil($totalRecords / $perPage),
    //             'from' => ""
    //         ];

    //         return response()->json($paginationData);
    //     } catch (\Exception $e) {

    //         return response()->json(['error' => 'Failed to fetch numerology history. Please try again later.'], 500);
    //     }
    // }

    // public function showNumerologyHistory(Request $request)
    // {
    //     try {
    //         $userId = Auth::id();
    //         $perPage = $request->get('perPage', 10);
    //     } catch (\Exception $e) {
    //         return response()->json(['error' => 'Failed to retrieve user ID or pagination settings.'], 500);
    //     }

    //     try {
    //         // Fetch all numerology types with pagination
    //         $nameNumerology = NameNumerology::where('user_id', $userId)->get();
    //         $businessNumerology = BusinessNumerology::where('user_id', $userId)->get();
    //         $phoneNumerology = PhoneNumerology::where('user_id', $userId)->get();
    //     } catch (\Exception $e) {
    //         return response()->json(['error' => 'Failed to retrieve numerology records.'], 500);
    //     }

    //     try {
    //         // Combine all records into one collection
    //         $allNumerologyRecords = $nameNumerology->concat($businessNumerology)
    //             ->concat($phoneNumerology);
    //     } catch (\Exception $e) {
    //         return response()->json(['error' => 'Failed to combine numerology records.'], 500);
    //     }

    //     try {
    //         // Fetch numerology types for reference, including expiry_day
    //         $numerologyTypes = Numerology::all()->keyBy('numerology_type');
    //     } catch (\Exception $e) {
    //         return response()->json(['error' => 'Failed to retrieve numerology types.'], 500);
    //     }

    //     try {
    //         // Paginate the combined collection
    //         $currentPage = $request->get('page', 1);
    //         $totalRecords = $allNumerologyRecords->count();
    //         $paginatedRecords = $allNumerologyRecords->forPage($currentPage, $perPage);

    //         $paginatedRecords->transform(function ($item) use ($numerologyTypes) {
    //             try {
    //                 // Get numerology type name and expiry_day from the numerology types
    //                 $numerologyType = $numerologyTypes->get($item->numerology_type);
    //                 $item->numerology_type_name = $numerologyType ? $numerologyType->name : 'Unknown';
    //                 $expiryDay = $numerologyType->expiry_day ?? 7; // Default to 7 if expiry_day is not set

    //                 // Calculate expiration date
    //                 $createdAt = \Carbon\Carbon::parse($item->created_at);
    //                 $expirationDate = $createdAt->addDays($expiryDay);
    //                 $item->is_expired = \Carbon\Carbon::now()->greaterThan($expirationDate);
    //                 $item->days_left = $item->is_expired ? 0 : $expirationDate->diffInDays(\Carbon\Carbon::now());

    //                 return $item;
    //             } catch (\Exception $e) {
    //                 // Handle transformation exceptions
    //                 return $item;
    //             }
    //         });
    //     } catch (\Exception $e) {
    //         return response()->json(['error' => 'Failed to paginate or transform numerology records.'], 500);
    //     }

    //     try {
    //         $paginationData = [
    //             'data' => $paginatedRecords,
    //             'current_page' => $currentPage,
    //             'per_page' => $perPage,
    //             'total' => $totalRecords,
    //             'last_page' => (int)ceil($totalRecords / $perPage),
    //             'from' => ""
    //         ];

    //         return response()->json($paginationData);
    //     } catch (\Exception $e) {
    //         return response()->json(['error' => 'Failed to prepare or return pagination data.'], 500);
    //     }
    // }

    public function showNumerologyHistory(Request $request)
    {
        try {
            $userId = Auth::id();
            $perPage = $request->get('perPage', 10);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to retrieve user ID or pagination settings.'], 500);
        }

        try {
            // Fetch all numerology types with pagination
            $nameNumerology = NameNumerology::where('user_id', $userId)->get();
            $businessNumerology = BusinessNumerology::where('user_id', $userId)->get();
            $phoneNumerology = PhoneNumerology::where('user_id', $userId)->get();
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to retrieve numerology records.'], 500);
        }

        try {
            // Combine all records into one collection
            $allNumerologyRecords = $nameNumerology->concat($businessNumerology)
                ->concat($phoneNumerology);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to combine numerology records.'], 500);
        }

        try {
            // Fetch numerology types for reference, including expiry_day
            $numerologyTypes = Numerology::all()->keyBy('numerology_type');
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to retrieve numerology types.'], 500);
        }

        try {
            // Paginate the combined collection
            $currentPage = $request->get('page', 1);
            $totalRecords = $allNumerologyRecords->count();
            $paginatedRecords = $allNumerologyRecords->forPage($currentPage, $perPage);

            $paginatedRecords->transform(function ($item) use ($numerologyTypes) {
                try {
                    // Get numerology type name and expiry_day from the numerology types
                    $numerologyType = $numerologyTypes->get($item->numerology_type);
                    $item->numerology_type_name = $numerologyType ? $numerologyType->name : 'Unknown';
                    $expiryDay = $numerologyType->expiry_day ?? 7; // Default to 7 if expiry_day is not set

                    // Calculate expiration date
                    $createdAt = \Carbon\Carbon::parse($item->created_at);
                    $expirationDate = $expiryDay > 0 ? $createdAt->addDays($expiryDay) : \Carbon\Carbon::now();

                    $item->is_expired = \Carbon\Carbon::now()->greaterThan($expirationDate);

                    // If the expiry day is 0, show 'Today' instead of a number of days
                    if ($expiryDay == 0) {
                        $item->days_left = 0;
                        $item->expiration_date_display = 'Expiry Today';
                    } else {
                        $item->days_left = $item->is_expired ? 0 : $expirationDate->diffInDays(\Carbon\Carbon::now());
                        $item->expiration_date_display = $expirationDate->toDateString();
                    }

                    return $item;
                } catch (\Exception $e) {
                    // Handle transformation exceptions
                    return $item;
                }
            });
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to paginate or transform numerology records.'], 500);
        }

        try {
            $paginationData = [
                'data' => $paginatedRecords,
                'current_page' => $currentPage,
                'per_page' => $perPage,
                'total' => $totalRecords,
                'last_page' => (int)ceil($totalRecords / $perPage),
                'from' => ""
            ];

            return response()->json($paginationData);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to prepare or return pagination data.'], 500);
        }
    }




    // public function downloadReport($type, $id)
    // {
    //     try {
    //         // Example logic for downloading a report
    //         $userId = Auth::id();
    //         $report = null;

    //         // Fetch report based on type and ID
    //         switch ($type) {
    //             case 'name':
    //                 $report = NameNumerology::where('user_id', $userId)->findOrFail($id);
    //                 break;
    //             case 'business':
    //                 $report = BusinessNumerology::where('user_id', $userId)->findOrFail($id);
    //                 break;
    //             case 'phone':
    //                 $report = PhoneNumerology::where('user_id', $userId)->findOrFail($id);
    //                 break;
    //                 // case 'advance':
    //                 //     $report = AdvanceNumerology::where('user_id', $userId)->findOrFail($id);
    //                 //     break;
    //             default:
    //                 return redirect()->back()->with('error', 'Invalid report type.');
    //         }

    //         // Check expiration
    //         $expirationDate = new \DateTime($report->created_at);
    //         $expirationDate->modify('+7 days');
    //         if (new \DateTime() > $expirationDate) {
    //             return redirect()->back()->with('error', 'The report has expired.');
    //         }

    //         // Logic for generating and returning the report file
    //         // For example, you could return a PDF or CSV file
    //         return response()->download(storage_path("app/reports/{$report->file}"));
    //     } catch (\Exception $e) {
    //         \Log::error('Failed to download report: ' . $e->getMessage());
    //         return redirect()->back()->with('error', 'Failed to download the report. Please try again later.');
    //     }
    // }

    public function createNewNumerology()
    {
        return view('Website.pages.newNumerology');
    }
}
