<?php

namespace App\Http\Controllers;

use App\Models\CrystalDetails;
use App\Models\MobileNumberTotal;
use Illuminate\Http\Request;
use Mpdf\Mpdf;
use Illuminate\Support\Facades\DB;
use App\Models\PhoneNumerology;
use App\Models\User;
use App\Models\MultiCount;
use App\Models\MultiCountDOB;
use App\Models\DateDetail;
use App\Models\MultipleCountDOBLessDtl;
use App\Models\PdfTemplate;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;

class MobileNumerologyController extends Controller
{
    public function showMobileForm()
    {
        if (!session()->has('phone_numerology_data') && !session()->has('advance_numerology_data')) {
            return view('payment.session_expired', [
                'message' => 'Your session has expired! Please re-enter your details.'
            ]);
        }

        return view('numerology.mobile_numerology_form');
    }

    private function getCombinationData($combinations)
    {
        // Check if the input is a valid array
        if (!is_array($combinations)) {
            throw new \InvalidArgumentException('Input must be an array of combinations.');
        }

        try {
            // Attempt to retrieve all records from the table
            $data = DB::table('mobile_combination_details')->get()->keyBy('combination_number');
        } catch (\Exception $e) {
            // Handle database errors (e.g., connection issues, table not found)
            throw new \Exception('Error retrieving data from the database: ' . $e->getMessage());
        }

        $result = [];

        // Loop through each combination and fetch the corresponding data
        foreach ($combinations as $combination) {
            if (!is_numeric($combination)) {
                // Handle invalid combination type (expecting numeric combination numbers)
                $result[$combination] = (object)['type' => 'Invalid', 'message' => 'Invalid combination format.'];
            } else {
                // Retrieve the data for the combination or provide a default message
                $result[$combination] = $data->get($combination, (object)['type' => 'Unknown', 'message' => 'No data for this combination.']);
            }
        }

        return $result;
    }


    private function evaluateResults($singleDigit, $total, $combinationData, $mobileNumber, $maxDigit, $maxCount, $messageForMaxDigit)
    {
        try {
            // Fetch the message for the single digit from the MobileNumberTotal model
            $messageRecord = MobileNumberTotal::where('number', $singleDigit)->first();

            // If the query returns no result, use a default message
            $personalizedMessage = $messageRecord ? $messageRecord->impact : 'No message available.';
        } catch (\Exception $e) {
            // Handle any errors during the query or database interaction
            $personalizedMessage = 'Error fetching personalized message: ' . $e->getMessage();
            // Optionally log the exception for debugging purposes
            Log::error('Error in evaluateResults: ' . $e->getMessage());
        }

        try {
            // Construct the result array
            $result = [
                'Mobile Number' => $mobileNumber,
                'Total' => $total,
                'Single Digit' => $singleDigit,
                'Personalized Message' => $personalizedMessage,
                'Combinations' => $combinationData,
                'Largest Recurring Digit' => $maxDigit,
                'Occurrence Count' => $maxCount,
                'Message for Max Digit' => $messageForMaxDigit,
            ];
        } catch (\Exception $e) {
            // Handle any errors during result processing
            Log::error('Error constructing result array: ' . $e->getMessage());
            // Return a user-friendly error message
            return ['error' => 'An error occurred while evaluating the results. Please try again.'];
        }

        return $result;
    }


    // Method to get Phone Number
    private function getPhoneNumber($request)
    {
        try {
            // Retrieve the latest successful PhoneNumerology record
            $latestPhoneNumerology = PhoneNumerology::where('payment_status', 'success')
                ->latest('created_at')
                ->first();

            // Check if a record was found
            if (!$latestPhoneNumerology) {
                // Return a default message or handle the case where no records are found
                throw new \Exception('No successful phone numerology records found.');
            }

            // Extract the phone number from the record
            $phoneNumber = $latestPhoneNumerology->phone_number;
        } catch (\Exception $e) {
            // Handle any errors or exceptions (e.g., log the error and return a safe default)
            Log::error('Error in getPhoneNumber: ' . $e->getMessage());
            return 'Error: Unable to retrieve phone number.';
        }

        // Return the phone number
        return $phoneNumber;
    }


    private function getUserName($phoneNumber)
    {
        try {
            // Get the latest PhoneNumerology entry
            $latestPhoneNumerology = PhoneNumerology::latest()->first();

            // Check if a PhoneNumerology record exists and has a valid user_id
            if ($latestPhoneNumerology && $latestPhoneNumerology->user_id) {
                // Find the user associated with the user_id
                $user = User::find($latestPhoneNumerology->user_id);
                if ($user) {
                    return $user->name;
                }
            }

            // If no user is found but the current user is authenticated, return the authenticated user's name
            if (auth()->check()) {
                return auth()->user()->name;
            }
        } catch (\Exception $e) {
            // Log any errors and return a fallback message
            Log::error('Error in getUserName: ' . $e->getMessage());
            return 'Error retrieving user name.';
        }

        // If no user is found, return the phone number as a fallback
        return $phoneNumber;
    }


    // Method to get Largest Recurring Digit
    // private function getLargestRecurringDigit($phoneNumber)
    // {
    //     $digits = array_count_values(str_split($phoneNumber));

    //     $maxDigit = array_keys($digits, max($digits))[0];
    //     $maxCount = $digits[$maxDigit];

    //     return [$maxDigit, $maxCount];
    // }

    // private function getMessageForMaxDigit($maxDigit)
    // {
    //     $multiCountRecord = MultiCount::where('digit', $maxDigit)->first();
    //     return $multiCountRecord ? $multiCountRecord->message : 'No message found for this digit';
    // }


    private function getLargestRecurringDigit($phoneNumber)
    {
        try {
            // Ensure the phone number is valid (contains digits only)
            if (!is_numeric($phoneNumber)) {
                throw new \InvalidArgumentException('Invalid phone number format.');
            }

            // Count the occurrences of each digit in the phone number
            $digits = array_count_values(str_split($phoneNumber));

            // Check if there are any digits in the phone number
            if (empty($digits)) {
                throw new \Exception('No digits found in the phone number.');
            }

            // Find the digit with the maximum occurrences
            $maxDigit = array_keys($digits, max($digits))[0];
            $maxCount = $digits[$maxDigit];

            // Return the digit and its count only if it occurs more than 2 times
            return $maxCount > 2 ? [$maxDigit, $maxCount] : null;
        } catch (\Exception $e) {
            // Log the error and return null to indicate failure
            Log::error('Error in getLargestRecurringDigit: ' . $e->getMessage());
            return null;
        }
    }


    private function getMessageForMaxDigit($maxDigit)
    {
        try {
            // Check if the max digit is valid (non-null)
            if ($maxDigit !== null) {
                // Query the MultiCount model for the message based on the max digit
                $multiCountRecord = MultiCount::where('digit', $maxDigit)->first();

                // Return the message if found, otherwise provide a default message
                return $multiCountRecord ? $multiCountRecord->behaviour : 'No message found for this digit';
            }
        } catch (\Exception $e) {
            // Log the error for debugging purposes
            Log::error('Error in getMessageForMaxDigit: ' . $e->getMessage());

            // Return a fallback error message
            return 'Error retrieving message for the max digit.';
        }
    }


    // New method to get Date of Birth (DOB) from PhoneNumerology model
    private function getDOB($phoneNumber)
    {
        try {
            // Retrieve the PhoneNumerology record by phone number
            $phoneNumerology = PhoneNumerology::where('phone_number', $phoneNumber)
                ->latest('created_at')
                ->first();

            // Check if a record was found and if it has a valid dob
            if ($phoneNumerology && $phoneNumerology->dob) {
                $dobParts = explode('-', $phoneNumerology->dob);

                // Check if the DOB format is valid (YYYY-MM-DD)
                if (count($dobParts) === 3) {
                    $year = $dobParts[0];
                    $month = ltrim($dobParts[1], '0'); // Remove leading zero from month
                    $day = ltrim($dobParts[2], '0');   // Remove leading zero from day

                    // Return the date in 'YYYY-M-D' format
                    return "$year-$month-$day";
                } else {
                    throw new \Exception('Invalid date format in the database.');
                }
            }

            // Return null if no DOB is found or the record is incomplete
            return null;
        } catch (\Exception $e) {
            // Log the error for debugging purposes
            Log::error('Error in getDOB: ' . $e->getMessage());

            // Return null to indicate failure
            return null;
        }
    }




    private function getMultiDateCount($dob)
    {
        try {
            // Remove dashes and split DOB into individual digits
            $dobDigits = str_split(str_replace('-', '', $dob));

            // Filter out zeroes and count occurrences of each remaining digit
            $dobDigitCounts = array_count_values(array_filter($dobDigits, function ($digit) {
                return $digit !== '0';
            }));

            // Get the maximum occurrence
            $maxCount = max($dobDigitCounts);
            $largestDigits = array_keys($dobDigitCounts, $maxCount);

            // Initialize largestDigit
            $largestDigit = '';

            // Check if there are any largest digits and take the first one
            if (!empty($largestDigits)) {
                $largestDigit = $largestDigits[0];
            }

            // Fetch records from MultiCountDOB for the digits found in the DOB
            $multiDateCount = MultipleCountDOBLessDtl::whereIn('your_unique_number', array_keys($dobDigitCounts))->get();

            // If no matching records found, return a message
            if ($multiDateCount->isEmpty()) {
                return 'No matching records found.';
            }

            // Find the corresponding record for the largest occurring digit and its count
            $largestDigitRecord = $multiDateCount->firstWhere(function ($record) use ($largestDigit, $maxCount) {
                return $record->your_unique_number == $largestDigit && $record->occurrence == $maxCount;
            });

            // Return the relevant information
            return [
                'multiDateCount' => $multiDateCount,
                'largestDigit' => $largestDigit,
                'maxCount' => $maxCount,
                'largestDigitDetails' => $largestDigitRecord ? [
                    'your_unique_number' => $largestDigitRecord->your_unique_number,
                    'occurrence' => $largestDigitRecord->occurrence,
                    'discover_your_nature' => $largestDigitRecord->discover_your_nature,
                    'your_key_characteristics' => $largestDigitRecord->your_key_characteristics,
                    'your_emotional_insights' => $largestDigitRecord->your_emotional_insights,
                    'your_behavior_insights' => $largestDigitRecord->your_behavior_insights,
                    'balance_through_vastu_and_numerology' => $largestDigitRecord->balance_through_vastu_and_numerology,
                    'focus_area_to_balance' => $largestDigitRecord->focus_area_to_balance,
                    'why_this_direction_works_and_potential_challenges' => $largestDigitRecord->why_this_direction_works_and_potential_challenges
                ] : null,
            ];
        } catch (\Exception $e) {
            Log::error('Error in getMultiDateCount: ' . $e->getMessage(), [
                'dob' => $dob,
                'dobDigits' => $dobDigits ?? null,
                'dobDigitCounts' => $dobDigitCounts ?? null,
                'largestDigit' => $largestDigit ?? null,
                'maxCount' => $maxCount ?? null,
            ]);

            return 'An error occurred while processing the date of birth.';
        }
    }


    private function getDateDetails($dob)
    {
        try {
            // Split the date into components
            $dobComponents = explode('-', $dob);
            //  dd($dobComponents);

            if (count($dobComponents) !== 3) {
                throw new \Exception('Invalid date format.');
            }

            $day = (int)$dobComponents[0];
            $month = (int)$dobComponents[1];
            $year = (int)$dobComponents[2];
            // dd($month);
            // Get day detail
            $dayDetail = DateDetail::where('number', $day)->first();

            // Step 1: Calculate compound number for full DOB (day + month + year)
            $total = array_sum(str_split($day)) + array_sum(str_split($month)) + array_sum(str_split($year));

            // Reduce the total to a single digit
            $singleDigit = $this->reduceToSingleDigit($total);

            // Get detail for single-digit total based on the full DOB compound
            $singleDigitDetail = DateDetail::where('number', $singleDigit)->first();
            // Return result with all necessary details
            return [
                'date' => $day,
                'dateCompound' => $total, // Compound of full DOB
                'dayDetail' => $dayDetail ? $dayDetail->personalized_insights : 'No specific detail found for this day.',
                'daySpecificDetail' => $dayDetail ? $dayDetail->unique_characteristic : 'No specific detail found for this day.',
                'singleDigitDetail' => $singleDigitDetail ? $singleDigitDetail->personalized_insights : 'No specific detail found for this single-digit compound total.',
                'singleDigitSpecificDetail' => $singleDigitDetail ? $singleDigitDetail->unique_characteristic : 'No specific detail found for this single-digit compound total.',
            ];
        } catch (\Exception $e) {
            // Log the error for debugging
            Log::error('Error in getDateDetails: ' . $e->getMessage(), [
                'dob' => $dob,
                'day' => $day ?? null,
            ]);

            // Return a user-friendly error message
            return [
                'error' => 'An error occurred while processing the date details. Please check the date format and try again.',
            ];
        }
    }


    private function reduceToSingleDigit($number)
    {
        try {
            // Validate the number is numeric
            if (!is_numeric($number)) {
                throw new \Exception('Invalid number input.');
            }

            // Ensure the number is an integer
            $number = (int)$number;

            // Reduce to a single-digit number
            while ($number >= 10) {
                $number = array_sum(str_split($number));
            }

            return $number;
        } catch (\Exception $e) {
            // Log the error message
            Log::error('Error in reduceToSingleDigit: ' . $e->getMessage());

            // Return a fallback value in case of an error
            return 0;  // Return 0 if there's an error in reducing to a single digit
        }
    }


    private function getCrystalDetails($dob)
    {
        try {
            // Check if the provided DOB is valid
            if (!$dob || strtotime($dob) === false) {
                throw new \Exception('Invalid DOB format.');
            }

            // Extract the day from the DOB
            $day = date('j', strtotime($dob)); // 'j' returns day without leading zeros

            // Retrieve the crystal details for the specific day
            $crystalDetail = CrystalDetails::where('date', $day)->first();

            // If crystal details are found, return them
            if ($crystalDetail) {
                return [
                    'crystal' => $crystalDetail->crystal,
                    'details' => $crystalDetail->details
                ];
            }

            // Return a default message if no details are found for the day
            return [
                'crystal' => null,
                'details' => 'No crystal detail found for this date.'
            ];
        } catch (\Exception $e) {
            // Log the error for debugging purposes
            Log::error('Error in getCrystalDetails: ' . $e->getMessage());

            // Return a fallback message if an error occurs
            return [
                'crystal' => null,
                'details' => 'Error retrieving crystal details.'
            ];
        }
    }

    private function getPdfTemplateData()
    {
        // Assuming you want the latest template; you can modify the query as needed
        return PdfTemplate::latest()->first();
    }

    public function viewMobileReport(Request $request)
    {
        try {
            // Retrieve session data and check if phone number exists
            $getSessionData = session('phone_numerology_data');
            $mobileNumber = $getSessionData['phone_number'] ?? null;

            if (!$mobileNumber) {
                throw new \Exception('Mobile number not found in session data.');
            }

            // Count the occurrences of each digit and handle zeros
            $digitCounts = array_count_values(str_split($mobileNumber));
            $digitCounts = array_replace(array_fill(0, 10, 0), $digitCounts);

            // Calculate the total and the single digit numerology result
            $mobileNumberWithoutZeros = str_replace('0', '', $mobileNumber);
            $total = array_sum(str_split($mobileNumberWithoutZeros));
            $singleDigit = array_sum(str_split($total));
            while ($singleDigit >= 10) {
                $singleDigit = array_sum(str_split($singleDigit));
            }

            // Generate 2-digit combinations for the mobile number
            $combinations = [];
            for ($i = 0; $i < strlen($mobileNumberWithoutZeros) - 1; $i++) {
                $combinations[] = substr($mobileNumberWithoutZeros, $i, 2);
            }

            // Retrieve combination data
            $combinationData = $this->getCombinationData($combinations);

            // Find the largest recurring digit and its count
            list($maxDigit, $maxCount) = $this->getLargestRecurringDigit($mobileNumber);

            // Get the message for the largest recurring digit
            $messageForMaxDigit = $this->getMessageForMaxDigit($maxDigit);

            // Get DOB from the phone number and additional numerology details
            $dob = $this->getDOB($mobileNumber);

            // Evaluate the results
            $result = $this->evaluateResults($singleDigit, $total, $combinationData, $mobileNumber, $maxDigit, $maxCount, $messageForMaxDigit);

            // Adding DOB-related information to the result
            $result['DOB'] = $dob;

            // Return the result to the Blade view
            return view('numerology.mobile_numerology_result', [
                'result' => $result,
            ]);
        } catch (\Exception $e) {
            // Log the error for debugging
            Log::error('Error in viewMobileReport: ' . $e->getMessage());

            // Return an error view or redirect with an error message
            return redirect()->back()->with('error', 'An error occurred while generating the report.');
        }
    }


    public function processMobileForm(Request $request)
    {
        try {
            // Get the latest mobile number and ID
            // $latestPhoneNumerology = PhoneNumerology::latest()->first();

            // if (!$latestPhoneNumerology) {
            //     throw new \Exception('No phone numerology record found.');
            // }

            // $mobileNumber = $latestPhoneNumerology->phone_number;
            // $id = $latestPhoneNumerology->id;
            // Validate the incoming request
            $request->validate([
                'id' => 'nullable|integer|exists:phone_numerology,id', // ID is optional
            ]);

            // Check if ID is provided; if not, fetch the latest user data with successful payment
            if ($request->id) {
                // Fetch user data by ID
                $latestPhoneNumerology = PhoneNumerology::where('id', $request->id)
                    ->where('payment_status', 'success')
                    ->first();
            } else {
                // Fetch latest user data with payment status as 'success'
                $latestPhoneNumerology = PhoneNumerology::where('payment_status', 'success')
                    ->latest('created_at')
                    ->first();
            }
            $mobileNumber = $latestPhoneNumerology->phone_number;
            $id = $latestPhoneNumerology->id;

            // Count the occurrences of each digit and handle zeros
            $digitCounts = array_count_values(str_split($mobileNumber));
            $digitCounts = array_replace(array_fill(0, 10, 0), $digitCounts);

            // Calculate the total and single digit result
            $mobileNumberWithoutZeros = str_replace('0', '', $mobileNumber);
            $total = array_sum(str_split($mobileNumberWithoutZeros));
            $singleDigit = array_sum(str_split($total));
            while ($singleDigit >= 10) {
                $singleDigit = array_sum(str_split($singleDigit));
            }

            // Generate 2-digit combinations
            $combinations = [];
            for ($i = 0; $i < strlen($mobileNumberWithoutZeros) - 1; $i++) {
                $combinations[] = substr($mobileNumberWithoutZeros, $i, 2);
            }

            // Retrieve combination data
            $combinationData = $this->getCombinationData($combinations);

            // Find the largest recurring digit and its count
            list($maxDigit, $maxCount) = $this->getLargestRecurringDigit($mobileNumber);

            // Get the message for the largest recurring digit
            $messageForMaxDigit = $this->getMessageForMaxDigit($maxDigit);

            // Evaluate the results
            $result = $this->evaluateResults($singleDigit, $total, $combinationData, $mobileNumber, $maxDigit, $maxCount, $messageForMaxDigit);

            // Download the PDF report
            $downloadReport = $this->downloadPDF($result, $id);

            // Optional: Handle what happens after the PDF is downloaded (e.g., redirect or return success message)
            return $downloadReport;
        } catch (\Exception $e) {
            // Log the error for debugging purposes
            Log::error('Error in processMobileForm: ' . $e->getMessage());

            // Optionally redirect or return with an error message
            return redirect()->back()->with('error', 'An error occurred while processing the mobile form.');
        }
    }


    private function downloadPDF($result, $id)
    {
        try {
            $phoneNumber = $this->getPhoneNumber($result['Mobile Number']);
            $userName = $this->getUserName($phoneNumber);

            // Extract data from results
            $total = $result['Total'];
            $singleDigit = $result['Single Digit'];
            $personalizedMessage = $result['Personalized Message'];
            $combinations = $result['Combinations'];

            // Largest recurring digit
            list($maxDigit, $maxCount) = $this->getLargestRecurringDigit($phoneNumber);
            $messageForMaxDigit = $this->getMessageForMaxDigit($maxDigit);

            // Get DOB and related information
            $dob = $this->getDOB($phoneNumber);
            if (!$dob) {
                throw new \Exception('Invalid or missing date of birth.');
            }

            // Format DOB
            $dobFormatted = Carbon::createFromFormat('Y-m-d', $dob)->format('d-m-Y');
            list($day, $month, $year) = explode('-', $dobFormatted);
            $nonLeadingZero = implode('-', [ltrim($day, '0'), ltrim($month, '0'), $year]);

            // Retrieve additional details
            $multiDateCount = $this->getMultiDateCount($dob);
            $dateDetail = $this->getDateDetails($nonLeadingZero);
            $crystalDetails = $this->getCrystalDetails($dob);

            // Retrieve phone numerology record
            $phoneNumerology = PhoneNumerology::where('phone_number', $phoneNumber)->latest('created_at')->first();
            if (!$phoneNumerology) {
                throw new \Exception('No phone numerology record found.');
            }
            $dobWithLeadingZeros = $phoneNumerology->dob;

            // Prepare PDF template data
            $pdfTemplate = $this->getPdfTemplateData();
            $headerData = [
                'header_name' => $pdfTemplate->header_name ?? 'Default Header',
                'header_img' => $pdfTemplate->header_img ?? null,
            ];
            $footerData = [
                'footer_name' => $pdfTemplate->footer_name ?? 'Default Footer',
                'footer_img' => $pdfTemplate->footer_img ?? null,
            ];

            // Compile result data for PDF
            $pdfData = [
                'Name' => $userName,
                'Mobile Number' => $phoneNumber,
                'Total' => $total,
                'Single Digit' => $singleDigit,
                'Personalized Message' => $personalizedMessage,
                'Combinations' => $combinations,
                'Largest Recurring Digit' => $maxDigit,
                'Occurrence Count' => $maxCount,
                'Message for Max Digit' => $messageForMaxDigit,
                'DOB' => $dobFormatted,
                'Multi-Date Count' => $multiDateCount,
                'Date Detail' => $dateDetail,
                'Crystal Details' => $crystalDetails,
                'headerData' => $headerData,
                'footerData' => $footerData,
            ];

            // Initialize mPDF
            $mpdf = new \Mpdf\Mpdf([
                'tempDir' => '/tmp',
                'format' => 'A4',
                'margin_left' => 0,
                'margin_right' => 0,
                'margin_top' => 20,
                'margin_bottom' => 70, // Space for footer
            ]);
            $mpdf->autoScriptToLang = true;
            $mpdf->autoLangToFont = true;

            // Render HTML content for the PDF
            $footerHtmlFirstAndLast = view('pdf.static_page.first_page_footer', ['result' => $pdfData])->render();
            $footerHtmlCommon = view('pdf.static_page.footer', ['result' => $pdfData])->render();
            $firstPageContent = view('pdf.static_page.greetPdf', ['result' => $pdfData])->render();
            $middlePagesContent = view('pdf.dyanamic_page.mobileNumerology', ['result' => $pdfData])->render();
            $lastPageContent = view('pdf.static_page.termAndConditionRemaining', ['result' => $pdfData])->render();

            // Set background image
            $backgroundPdf = public_path('frontend/assests/images/pdf/background-bg2.png');
            $backgroundImagePath = 'data:image/png;base64,' . base64_encode(file_get_contents($backgroundPdf));
            $mpdf->SetDefaultBodyCSS('background', "url('{$backgroundImagePath}')");
            $mpdf->SetDefaultBodyCSS('background-image-resize', 6);

            // Add pages to the PDF
            $mpdf->AddPage();
            $mpdf->SetFooter($footerHtmlFirstAndLast);
            $mpdf->WriteHTML('<div class="content">' . $firstPageContent . '</div>');

            // Add indexing page
            $mpdf->AddPage();
            $mpdf->SetFooter($footerHtmlCommon);
            $mpdf->WriteHTML('<div class="content">' . view('pdf.static_page.index', ['result' => $pdfData])->render() . '</div>');

            // Add middle pages
            for ($i = 2; $i < 3; $i++) {  // Adjust page count as needed
                $mpdf->AddPage();
                $mpdf->SetFooter($footerHtmlCommon);
                $mpdf->WriteHTML('<div class="content">' . $middlePagesContent . '</div>');
            }

            // Add last page
            $mpdf->AddPage();
            $mpdf->SetFooter($footerHtmlFirstAndLast);
            $mpdf->WriteHTML('<div class="content">' . $lastPageContent . '</div>');

            // Ensure directory exists
            $directoryPath = storage_path('app/public/uploads/mobileNumerology');
            if (!File::exists($directoryPath)) {
                File::makeDirectory($directoryPath, 0755, true);
            }

            // Output PDF
            $fileName = 'mobile_' . $phoneNumber . '_' . $id . '.pdf';
            $filePath = storage_path('app/public/uploads/mobileNumerology/' . $fileName);
            $mpdf->Output($filePath, \Mpdf\Output\Destination::FILE);

            return response($mpdf->Output($fileName, 'D'), 200)
                ->header('Content-Type', 'application/pdf');
        } catch (\Exception $e) {
            // Log error for debugging
            Log::error('Error generating PDF: ' . $e->getMessage());
            throw $e; // or handle accordingly (e.g., return an error response)
        }
    }
}
