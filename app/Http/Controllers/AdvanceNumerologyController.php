<?php

namespace App\Http\Controllers;

use App\Models\AreaOfStruggle;
use App\Models\CrystalDetails;
use App\Models\DateDetail;
use App\Models\MobileNumberTotal;
use App\Models\MultiCount;
use App\Models\MultiCountDOB;
use App\Models\PdfTemplate;
use App\Models\PhoneNumerology;
use App\Models\User;
use Database\Seeders\AreaOfStrugle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdvanceNumerologyController extends Controller
{
    //

    public function showAdvanceForm()
    {
        if (!session()->has('phone_numerology_data') && !session()->has('advance_numerology_data')) {
            return view('payment.session_expired', [
                'message' => 'Your session has expired! Please re-enter your details.'
            ]);
        }

        return view('numerology.advance_numerology_form');
    }

    private function getCombinationData($combinations)
    {
        // Retrieve all records
        $data = DB::table('mobile_combination_details')->get()->keyBy('combination_number');

        $result = [];
        foreach ($combinations as $combination) {
            $result[$combination] = $data->get($combination, (object)['behaviour_of_combination' => 'Unknown', 'message' => 'No data with this combination.']);
        }

        return $result;
    }

    private function evaluateResults($singleDigit, $total, $combinationData, $mobileNumber, $maxDigit, $maxCount, $messageForMaxDigit)
    {
        // Fetch the message for the single digit from the MobileNumberTotal model
        $messageRecord = MobileNumberTotal::where('number', $singleDigit)->first();
        $personalizedMessage = $messageRecord ? $messageRecord->impact : 'No message available.';
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
        // dd($result);
        return $result;
    }

    // Method to get Phone Number
    private function getPhoneNumber($request)
    {
        $latestPhoneNumerology = PhoneNumerology::where('payment_status', 'success')
            ->latest('created_at')
            ->first();
        $phoneNumber = $latestPhoneNumerology->phone_number;
        // dd($phoneNumber);

        return $phoneNumber;
    }

    private function getUserName($phoneNumber)
    {
        // Get the latest PhoneNumerology entry
        $latestPhoneNumerology = PhoneNumerology::latest()->first();

        if ($latestPhoneNumerology && $latestPhoneNumerology->user_id) {
            $user = User::find($latestPhoneNumerology->user_id);
            if ($user) {
                return $user->name;
            }
        }

        if (auth()->check()) {
            return auth()->user()->name;
        }

        return $phoneNumber;
    }

    // Method to get Largest Recurring Digit

    private function getLargestRecurringDigit($phoneNumber)
    {
        // Count the occurrences of each digit in the phone number
        $digits = array_count_values(str_split($phoneNumber));

        // Find the digit with the maximum occurrences
        $maxDigit = array_keys($digits, max($digits))[0];
        $maxCount = $digits[$maxDigit];

        // Return the digit and its count only if it occurs more than 2 times
        return $maxCount > 2 ? [$maxDigit, $maxCount] : null;
    }

    private function getMessageForMaxDigit($maxDigit)
    {
        // Check if the max digit is valid
        if ($maxDigit !== null) {
            $multiCountRecord = MultiCount::where('digit', $maxDigit)->first();
            return $multiCountRecord ? $multiCountRecord->behaviour : 'No message found for this digit';
        }

        return 'No digit occurred more than twice.';
    }

    // New method to get Date of Birth (DOB) from PhoneNumerology model
    private function getDOB($phoneNumber)
    {
        $phoneNumerology = PhoneNumerology::where('phone_number', $phoneNumber)->latest('created_at')->first();

        if ($phoneNumerology && $phoneNumerology->dob) {
            // Assuming dob is in the format 'YYYY-MM-DD'
            // $dobWithLeadingZeros = $phoneNumerology->dob;

            $dobParts = explode('-', $phoneNumerology->dob);
            if (count($dobParts) === 3) {
                $year = $dobParts[0];
                $month = ltrim($dobParts[1], '0'); // Remove leading zero from month
                $day = ltrim($dobParts[2], '0');   // Remove leading zero from day

                return "$year-$month-$day";
            }
        }

        return null;
    }



    private function getMultiDateCount($dob)
    {
        // Remove dashes and split DOB into individual digits
        $dobDigits = str_split(str_replace('-', '', $dob));
        // dd($dobDigits);
        // Count occurrences of each digit, ignoring leading zeros
        $dobDigitCounts = array_count_values(array_map(function ($digit) {
            return $digit === '0' ? '0' : ltrim($digit, '0');
        }, $dobDigits));
        // dd($dobDigitCounts);
        // Get the maximum occurrence
        $maxCount = max($dobDigitCounts);
        // $largestDigits = array_keys($dobDigitCounts, $maxCount);
        // dd($maxCount);
        // Initialize largestDigit
        $largestDigit = '';

        // Check if there are any largest digits
        if (!empty($largestDigits)) {
            // If the largest digit is '0', keep it, otherwise take the first largest
            $largestDigit = in_array('0', $largestDigits) ? '0' : $largestDigits[0];
        }

        // Fetch records from MultiCountDOB for the digits found in the DOB
        $multiDateCount = MultiCountDOB::whereIn('number', array_keys($dobDigitCounts))->get();

        // If no matching records found, return a message
        if ($multiDateCount->isEmpty()) {
            return 'No matching records found.';
        }

        // Find the corresponding record for the largest occurring digit and its count
        $largestDigitRecord = $multiDateCount->firstWhere(function ($record) use ($largestDigit, $maxCount) {
            return $record->number == $largestDigit && $record->occurance == $maxCount;
        });
        // dd($largestDigitRecord);
        // Return the relevant information
        return [
            'multiDateCount' => $multiDateCount,
            'largestDigit' => $largestDigit,
            'maxCount' => $maxCount,
            'largestDigitDetails' => $largestDigitRecord ? [
                'trate' => $largestDigitRecord->trate,
                'direction_to_balance' => $largestDigitRecord->direction_to_balance,
                'behaviour' => $largestDigitRecord->behaviour,
            ] : null,
        ];
    }


    private function getDateDetails($dob)
    {
        $dobComponents = explode('-', $dob);
        $day = (int)$dobComponents[2];
        // dd($day);
        // Get details for the day
        $dayDetail = DateDetail::where('number', $day)->first();

        // Calculate the total (using just the day)
        $total = $day; // Since you only want the day
        $singleDigit = $total;

        // Reduce to single-digit if greater than 9
        while ($singleDigit > 9) {
            $singleDigit = array_sum(str_split($singleDigit));
        }

        // Get detail for single-digit total
        $singleDigitDetail = DateDetail::where('number', $singleDigit)->first();
        //dd($singleDigitDetail);
        return [
            'date' => $day,
            'dateCompound' => $singleDigit,
            'dayDetail' => $dayDetail ? $dayDetail->detail : 'No specific detail found for this day.',
            'daySpecificDetail' => $dayDetail ? $dayDetail->specific_detail : 'No specific detail found for this day.',
            'singleDigitDetail' => $singleDigitDetail ? $singleDigitDetail->detail : 'No specific detail found for this single-digit total.',
            'singleDigitSpecificDetail' => $singleDigitDetail ? $singleDigitDetail->specific_detail : 'No specific detail found for this single-digit total.',

        ];
    }


    private function getCrystalDetails($dob)
    {
        // Extract the day from the DOB
        $day = date('j', strtotime($dob)); // 'j' returns day without leading zeros
        // dd($day);
        // Retrieve the crystal details for the specific day
        $crystalDetail = CrystalDetails::where('date', $day)->first();
        if ($crystalDetail) {
            return [
                'crystal' => $crystalDetail->crystal,
                'details' => $crystalDetail->details
            ];
        }

        return [
            'crystal' => null,
            'details' => 'No crystal detail found for this date.'
        ];
    }


    //     private function getAreaOfConcern(string $idsString)
    // {
    //     // Convert the comma-separated string of IDs into an array
    //     $ids = array_map('trim', explode(',', $idsString));

    //     // Initialize an array to hold the results
    //     $areasOfConcern = [];

    //     // Retrieve the area of concern based on the provided IDs
    //     foreach ($ids as $id) {
    //         // Ensure $id is an integer
    //         $areaOfConcern = AreaOfStruggle::find((int)$id);

    //         if ($areaOfConcern) {
    //             $areasOfConcern[] = [
    //                 'Problem' => $areaOfConcern->problem,
    //                 'Affirmation' => $areaOfConcern->affirmation,
    //                 'Wallpaper' => $areaOfConcern->wallpaper,
    //                 'Rudraksh' => $areaOfConcern->rudraksh,
    //                 'Direction to Work' => $areaOfConcern->direction_to_work,
    //             ];
    //         }
    //     }
    // // dd($areaOfConcern);
    //     // Return the results array, which will be empty if no records are found
    //     return $areasOfConcern;
    // }

    private function getAreaOfConcern(string $idsString)
    {
        // Convert the comma-separated string of IDs into an array
        $ids = array_map('trim', explode(',', $idsString));
        $areasOfConcern = [];

        // Retrieve the area of concern based on the provided IDs
        foreach (array_chunk($ids, 10) as $chunk) { // Adjust the chunk size as needed
            $areaOfConcerns = AreaOfStruggle::whereIn('id', $chunk)->get();
            foreach ($areaOfConcerns as $areaOfConcern) {
                $areasOfConcern[] = [
                    'Problem' => $areaOfConcern->problem,
                    'Affirmation' => $areaOfConcern->affirmation,
                    'Wallpaper' => $areaOfConcern->wallpaper,
                    'Rudraksh' => $areaOfConcern->rudraksh,
                    'Direction to Work' => $areaOfConcern->direction_to_work,
                ];
            }
        }

        return $areasOfConcern;
    }


    private function getPdfTemplateData()
    {
        // Assuming you want the latest template; you can modify the query as needed
        return PdfTemplate::latest()->first();
    }

    public function viewAdvanceReport(Request $request)
    {
        $getSessionData = session('advance_numerology_data');
        $mobileNumber = $getSessionData['phone_number'] ?? null;
        // dd($mobileNumber);

        $digitCounts = array_count_values(str_split($mobileNumber));
        $digitCounts = array_replace(array_fill(0, 10, 0), $digitCounts);

        $mobileNumberWithoutZeros = str_replace('0', '', $mobileNumber);
        $total = array_sum(str_split($mobileNumberWithoutZeros));
        $singleDigit = array_sum(str_split($total));
        while ($singleDigit >= 10) {
            $singleDigit = array_sum(str_split($singleDigit));
        }

        $combinations = [];
        for ($i = 0; $i < strlen($mobileNumberWithoutZeros) - 1; $i++) {
            $combinations[] = substr($mobileNumberWithoutZeros, $i, 2);
        }

        $combinationData = $this->getCombinationData($combinations);
        list($maxDigit, $maxCount) = $this->getLargestRecurringDigit($mobileNumber);

        $messageForMaxDigit = $this->getMessageForMaxDigit($maxDigit);

        // Get DOB and multi-date details
        $dob = $this->getDOB($mobileNumber);
        // Call getMultiDateCount to get DOB related numerology details
        $multiDateCountDetails = $this->getMultiDateCount($dob);
        // $dateDetail = $this->getDateDetails($dob);


        $result = $this->evaluateResults($singleDigit, $total, $combinationData, $mobileNumber, $maxDigit, $maxCount, $messageForMaxDigit);

        // Adding DOB-related information to the result
        $result['DOB'] = $dob;
        $result['MultiDate Count'] = $multiDateCountDetails;
        // $result['Date Detail'] = $dateDetail;
        //  dd($result);
        return view('numerology.advance_numerology_result', [
            'result' => $result,
        ]);
    }

    public function processAdvanceForm(Request $request)
    {
        $mobileNumber = PhoneNumerology::latest()->pluck('phone_number')->first();
        $id = PhoneNumerology::latest()->pluck('id')->first();

        $digitCounts = array_count_values(str_split($mobileNumber));
        $digitCounts = array_replace(array_fill(0, 10, 0), $digitCounts);

        $mobileNumberWithoutZeros = str_replace('0', '', $mobileNumber);
        $total = array_sum(str_split($mobileNumberWithoutZeros));
        $singleDigit = array_sum(str_split($total));
        while ($singleDigit >= 10) {
            $singleDigit = array_sum(str_split($singleDigit));
        }

        $combinations = [];
        for ($i = 0; $i < strlen($mobileNumberWithoutZeros) - 1; $i++) {
            $combinations[] = substr($mobileNumberWithoutZeros, $i, 2);
        }

        $combinationData = $this->getCombinationData($combinations);
        list($maxCount, $maxDigit) = $this->getLargestRecurringDigit($mobileNumber);

        $messageForMaxDigit = $this->getMessageForMaxDigit($maxDigit);
        $result = $this->evaluateResults($singleDigit, $total, $combinationData, $mobileNumber, $maxCount, $maxDigit, $messageForMaxDigit, $id);

        $downloadReport = $this->downloadPDF($result, $id);
    }

    private function downloadPDF($result, $id)
    {
        $phoneNumber = $this->getPhoneNumber($result['Mobile Number']);
        $userName = $this->getUserName($phoneNumber);

        $total = $result['Total'];
        $singleDigit = $result['Single Digit'];
        $personalizedMessage = $result['Personalized Message'];
        $combinations = $result['Combinations'];

        list($maxDigit, $maxCount) = $this->getLargestRecurringDigit($phoneNumber);
        $messageForMaxDigit = $this->getMessageForMaxDigit($maxDigit);

        // Get DOB and multi-date details
        $dob = $this->getDOB($phoneNumber);
        // dd($dob);
        $multiDateCount = $this->getMultiDateCount($dob);
        $dateDetail = $this->getDateDetails($dob);
        $crystalDetails = $this->getCrystalDetails($dob);

        $phoneNumerology = PhoneNumerology::where('phone_number', $phoneNumber)->latest('created_at')->first();
        $dobWithLeadingZeros = $phoneNumerology->dob;

        // Fetch the latest record from MobileNumerology
        $phoneNumerology = PhoneNumerology::where('phone_number', $phoneNumber)->latest('created_at')->first();

        // Extract the 'area_of_concern' field from MobileNumerology
        $areaOfConcernId = $phoneNumerology->area_of_concern;

        // Retrieve the data from AreaOfStruggle based on area_of_concern ID
        $areaOfConcern = $this->getAreaOfConcern($areaOfConcernId);

        $pdfTemplate = $this->getPdfTemplateData();

        // Assuming the retrieved header and footer can be used in the PDF
        $headerData = [
            'header_name' => $pdfTemplate ? $pdfTemplate->header_name : 'Default Header',
            'header_img' => $pdfTemplate ? $pdfTemplate->header_img : null,
        ];

        $footerData = [
            'footer_name' => $pdfTemplate ? $pdfTemplate->footer_name : 'Default Footer',
            'footer_img' => $pdfTemplate ? $pdfTemplate->footer_img : null,
        ];


        $result['DOB'] = $dob;
        $result['MultiDate Count'] = $multiDateCount;
        $result['Date Detail'] = $dateDetail;
        $result['Crystal Details'] = $crystalDetails;
        $result['Area of Concern'] = $areaOfConcern;

        $result = [
            'Name' => $userName,
            'Mobile Number' => $phoneNumber,
            'Total' => $total,
            'Single Digit' => $singleDigit,
            'Personalized Message' => $personalizedMessage,
            'Combinations' => $combinations,
            'Largest Recurring Digit' => $maxDigit,
            'Occurrence Count' => $maxCount,
            'Message for Max Digit' => $messageForMaxDigit,
            'DOB' => $dobWithLeadingZeros,
            'Multi-Date Count' => $multiDateCount,
            'Date Detail' => $dateDetail,
            'Crystal Details' => $crystalDetails,
            'Area of Concern' => $areaOfConcern,
            'headerData' => $headerData,
            'footerData' => $footerData,
        ];

        // dd($result);
        // Initialize mPDF instance with margins
        $mpdf = new \Mpdf\Mpdf([
            'tempDir' => '/tmp',
            'format' => 'A4',
            'margin_left' => 0,
            'margin_right' => 0,
            'margin_top' => 20,
            'margin_bottom' => 70, // Ensure space for footer
        ]);
        $mpdf->autoScriptToLang = true;
        $mpdf->autoLangToFont = true;
        // Prepare the first and last page footer
        // Render the first and last page footer using Blade
        $footerHtmlfirstandLast = view('pdf.static_page.first_page_footer', ['result' => $result])->render();

        // Render the common footer using Blade
        $footerHtmlCommon = view('pdf.static_page.footer', ['result' => $result])->render();
        // Render Blade views into HTML content
        $firstPageContent = view('pdf.static_page.greetPdf', ['result' => $result])->render(); // Greet PDF content
        $middlePagesContent = view('pdf.advance_numerology.advanceNumerology', ['result' => $result])->render(); // Name Numerology content
        $lastPageContent = view('pdf.static_page.termAndConditionRemaining', ['result' => $result])->render(); // Free Gifts content


        // Get the path to the background image and encode it
        $backgroundPdf = public_path('frontend/assests/images/pdf/background-bg2.png');
        $backgroundPdfImg = base64_encode(file_get_contents($backgroundPdf));
        $backgroundImagePath = 'data:image/png;base64,' . $backgroundPdfImg;

        // Set the background image CSS
        $mpdf->SetDefaultBodyCSS('background', "url('" . $backgroundImagePath . "')");
        $mpdf->SetDefaultBodyCSS('background-image-resize', 6); // Stretch the background image

        // Add the first page with its footer
        $mpdf->AddPage();
        $mpdf->SetFooter($footerHtmlfirstandLast);
        $mpdf->WriteHTML('<div class="content">' . $firstPageContent . '</div>');

        // Render the indexing content and add it after the greet page
        $indexingContent = view('pdf.advance_numerology.advanceNumerologyIndex', ['result' => $result])->render();
        $mpdf->AddPage();
        $mpdf->SetFooter($footerHtmlCommon);

        $mpdf->WriteHTML('<div class="content">' . $indexingContent . '</div>');

        // Add content for the middle pages (common footer)
        for ($i = 2; $i < 3; $i++) {  // Adjust page count as needed
            $mpdf->AddPage();
            $mpdf->SetFooter($footerHtmlCommon);  // Apply the common footer
            $mpdf->WriteHTML('<div class="content">' . $middlePagesContent . '</div>'); // Name Numerology content
        }

        // Add the last page with the same footer as the first
        $mpdf->AddPage();
        $mpdf->SetFooter($footerHtmlfirstandLast);
        $mpdf->WriteHTML('<div class="content">' . $lastPageContent . '</div>');

        // Generate a dynamic filename including the phone number
        $fileName = 'advance_' . $phoneNumber . '.pdf';

        // $filePath = storage_path('app\public\uploads\mobileNumerology' . $phoneNumber . '-' . $id . '.pdf');
        // $mpdf->Output($filePath, \Mpdf\Output\Destination::FILE);

        // Output the PDF as a download
        return response($mpdf->Output($fileName, 'I'), 200)
            ->header('Content-Type', 'application/pdf');
    }
}