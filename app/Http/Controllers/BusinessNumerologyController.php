<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\BusinessNumerology;
use App\Models\CrystalDetails;
use App\Models\Dasha;
use App\Models\DateDetail;
use App\Models\MobileNumberTotal;
use App\Models\MultiCount;
use App\Models\MultiCountDOB;
use App\Models\PdfTemplate;
use Illuminate\Support\Facades\DB;


class BusinessNumerologyController extends Controller
{
    public function showForm()
    {
        if (!session()->has('business_numerology_data')) {
            return view('payment.session_expired', [
                'message' => 'Your session has expired! Please re-enter your details.'
            ]);
        }
        return view('numerology.business_numerology_form');
    }


    private function getPdfTemplateData()
    {
        // Assuming you want the latest template; you can modify the query as needed
        return PdfTemplate::latest()->first();
    }

    public function calculate(Request $request)
    {
        $getUserData = BusinessNumerology::where('payment_status', 'success')
            ->latest('created_at')
            ->with('partners')
            ->first();

        $id =  $getUserData->id;
        $user = $getUserData;
        $firstName = $user->first_name;
        $partners = $user->partners ?? []; // Ensure partners is an empty array if null
        $currentDate = Carbon::now();

        // $results = [];
        $mobileNumber = $user['phone_number'];

        $mobileNumberResult = $this->calculateMobileNumberNumerology($mobileNumber);



        $results[] = array_merge(
            $this->getNumerologyResults($user, $currentDate),
            [
                'mobile_numerology' => [
                    'total' => (string) $mobileNumberResult['total'],
                    'single_digit' => (string) $mobileNumberResult['single_digit'],
                    'max_count' =>  $mobileNumberResult['max_count'],
                    'max_digit' => $mobileNumberResult['max_digit'],
                    'message_for_max_digit' => $mobileNumberResult['message_for_max_digit'],
                    'detail' => nl2br(trim((string) $mobileNumberResult['detail'])),
                    'combinations' => array_map('strval', $mobileNumberResult['combinations']),
                    'combination_data' => $mobileNumberResult['combination_data'],
                ],
            ]
        );
        //dd($results);
        // Check if partners exist and process them
        if (!empty($partners)) {
            foreach ($partners as $partner) {
                $mobileNumber = $partner->phone_number ?? null; // Handle missing phone number
                if ($mobileNumber) {
                    $mobileNumberResult = $this->calculateMobileNumberNumerology($mobileNumber);
                    // Add partner's numerology result
                    $results[] = array_merge(
                        $this->getNumerologyResults($partner, $currentDate),
                        [
                            'mobile_numerology' => [
                                'total' => (string) $mobileNumberResult['total'],
                                'single_digit' => (string) $mobileNumberResult['single_digit'],
                                'max_count' =>  $mobileNumberResult['max_count'],
                                'max_digit' => $mobileNumberResult['max_digit'],
                                'message_for_max_digit' => $mobileNumberResult['message_for_max_digit'],
                                'detail' => nl2br(trim((string) $mobileNumberResult['detail'])),
                                'combinations' => array_map('strval', $mobileNumberResult['combinations']),
                                'combination_data' => array_map('strval', $mobileNumberResult['combination_data']),
                            ],
                        ]
                    );
                }
            }
        }

        // Pass the results to the private PDF generation method
        return $this->generatePDF($results, $firstName, $id);
    }



    public function viewBussinessReport(Request $request)
    {
        $user = session('business_numerology_data');
        $partners = session('business_numerology_partners');
        $currentDate = Carbon::now();
        $results = [];

        // Include user’s numerology result
        $mobileNumber = $user['phone_number']; // Assuming user has a phone_number field
        $mobileNumberResult = $this->calculateMobileNumberNumerology($mobileNumber);

        list($maxCount, $maxDigit) = $this->getLargestRecurringDigit($mobileNumber);

        // Get the corresponding message for the largest digit from the MultiCount model
        $messageForMaxDigit = $this->getMessageForMaxDigit($maxDigit);

        $results[] = array_merge(
            $this->getNumerologyResults($user, $currentDate),
            [
                'mobile_numerology' => [
                    'total' => (string) $mobileNumberResult['total'],
                    'single_digit' => (string) $mobileNumberResult['single_digit'],
                    'detail' => nl2br(trim((string) $mobileNumberResult['detail'])),
                    'combinations' => array_map('strval', $mobileNumberResult['combinations']),
                    'combination_data' => $mobileNumberResult['combination_data'],
                    'max_count' => $maxCount,
                    'max_digit' => $maxDigit,
                    'message_for_max_digit' => $messageForMaxDigit
                ],
            ]
        );

        // Check if partners data exists and is not empty
        if (!empty($partners)) {
            // Calculate each partner’s numerology details
            foreach ($partners as $partner) {
                if (!empty($partner['phone_number'])) {
                    $mobileNumber = $partner['phone_number']; // Assuming partners have a phone_number field
                    $mobileNumberResult = $this->calculateMobileNumberNumerology($mobileNumber);

                    list($maxCount, $maxDigit) = $this->getLargestRecurringDigit($mobileNumber);

                    // Get the corresponding message for the largest digit from the MultiCount model
                    $messageForMaxDigit = $this->getMessageForMaxDigit($maxDigit);
                    $results[] = array_merge(
                        $this->getNumerologyResults($partner, $currentDate),
                        [
                            'mobile_numerology' => [
                                'total' => (string) $mobileNumberResult['total'],
                                'single_digit' => (string) $mobileNumberResult['single_digit'],
                                'detail' => nl2br(trim((string) $mobileNumberResult['detail'])),
                                'combinations' => array_map('strval', $mobileNumberResult['combinations']),
                                'combination_data' => array_map('strval', $mobileNumberResult['combination_data']),
                                'max_count' => $maxCount,
                                'max_digit' => $maxDigit,
                                'message_for_max_digit' => $messageForMaxDigit
                            ],
                        ]
                    );
                }
            }
        }

        return view('numerology.business_numerology_result', ['results' => $results]);
    }


    private function getLargestRecurringDigit($phoneNumber)
    {
        // Step 1: Split phone number into digits and count occurrences
        $digits = array_count_values(str_split($phoneNumber));

        // Step 2: Find the digit with the maximum occurrence
        $maxDigit = array_keys($digits, max($digits))[0];
        $maxCount = $digits[$maxDigit];

        return [$maxDigit, $maxCount];  // Return both the digit and the count
    }

    private function getMessageForMaxDigit($maxDigit)
    {
        // Step 2: Check the MultiCount model for a corresponding message
        $multiCountRecord = MultiCount::where('digit', $maxDigit)->first();
        return $multiCountRecord ? $multiCountRecord->message : 'No message found for this digit';
    }

    private function getNumerologyResults($person, $currentDate)
    {
        $fullNameTotal = $this->calculateNumerology($person['first_name'] . ' ' . $person['last_name']);
        $fullNameSingleDigit = $this->reduceToSingleDigit($fullNameTotal);
        $dob = Carbon::parse($person['dob']);
        $personalYear = $this->calculatePersonalYear($dob, $currentDate);
        $personalMonth = $this->calculatePersonalMonth($personalYear, $currentDate);
        $personalDay = $this->calculatePersonalDay($personalMonth, $currentDate);

        $dasha = $this->getDasha($dob);

        if ($dob) {
            // Assuming dob is in the format 'YYYY-MM-DD'
            $dobParts = explode('-', $dob);
            if (count($dobParts) === 3) {
                $year = $dobParts[0];
                $month = ltrim($dobParts[1], '0'); // Remove leading zero from month
                $day = ltrim($dobParts[2], '0');   // Remove leading zero from day

                // Reconstruct the DOB without leading zeros
                $dobNonLeadingZero = "$year-$month-$day";
            }
        }
        //  dd($dobNonLeadingZero);
        $multiDateCount = $this->getMultiDateCount($dobNonLeadingZero);
        $dateDetail = $this->getDateDetails($dobNonLeadingZero);
        $crystalDetails = $this->getCrystalDetails($dobNonLeadingZero);
        $getBasicDetail = $this->getDOBCompound($dobNonLeadingZero);
        return [
            'name' => $person['first_name'] . ' ' . $person['last_name'],
            'dob' => $person['dob'],
            'full_name_total' => (string) $fullNameTotal,
            'full_name_single_digit' => (string) $fullNameSingleDigit,
            'personal_year' => $personalYear,
            'personal_month' => (string) $personalMonth,
            'personal_day' => (string) $personalDay,
            'dasha' => $dasha,
            'Multi-Date Count' => $multiDateCount,
            'Date Detail' => $dateDetail,
            'Crystal Details' => $crystalDetails,
            'getBasicDetail' => $getBasicDetail
        ];
    }


    private function getMultiDateCount($dob)
    {
        // Use DateTime to reformat the date to 'Y-n-j' (YYYY-M-D) without leading zeros
        $formattedDob = (new \DateTime($dob))->format('Y-n-j');

        // Remove dashes and split DOB into individual digits
        $dobDigits = str_split(str_replace('-', '', $formattedDob));

        // Count occurrences of each digit, ignoring leading zeros
        $dobDigitCounts = array_count_values(array_map(function ($digit) {
            return $digit === '0' ? '0' : ltrim($digit, '0');
        }, $dobDigits));

        // Get the maximum occurrence
        $maxCount = max($dobDigitCounts);
        $largestDigits = array_keys($dobDigitCounts, $maxCount);

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
        // dd($crystalDetail->crystal);
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


    private function calculateNumerology($name)
    {
        $conversionTable = [
            'A' => 1,
            'I' => 1,
            'J' => 1,
            'Q' => 1,
            'Y' => 1,
            'B' => 2,
            'K' => 2,
            'R' => 2,
            'C' => 3,
            'G' => 3,
            'L' => 3,
            'S' => 3,
            'D' => 4,
            'M' => 4,
            'T' => 4,
            'E' => 5,
            'H' => 5,
            'N' => 5,
            'X' => 5,
            'U' => 6,
            'V' => 6,
            'W' => 6,
            'O' => 7,
            'Z' => 7,
            'F' => 8,
            'P' => 8
        ];

        $total = 0;
        foreach (str_split(strtoupper($name)) as $char) {
            $total += $conversionTable[$char] ?? 0;
        }

        return $total;
    }

    private function reduceToSingleDigit($number)
    {
        while ($number >= 10) {
            $number = array_sum(str_split($number));
        }
        return $number;
    }

    private function calculatePersonalYear($dob, $currentDate)
    {
        $birthDay = $dob->day;
        $birthMonth = $dob->month;
        $presentYear = $currentDate->year;

        return $this->reduceToSingleDigit($birthDay + $birthMonth + $presentYear);
    }

    private function calculatePersonalMonth($personalYear, $currentDate)
    {
        $presentMonth = $currentDate->month;
        return $this->reduceToSingleDigit($personalYear + $presentMonth);
    }

    private function calculatePersonalDay($personalMonth, $currentDate)
    {
        $presentDay = $currentDate->day;
        return $this->reduceToSingleDigit($personalMonth + $presentDay);
    }

    // private function getDasha($dob)
    // {
    //     $year = $dob->year;
    //     // dd($year);
    //     $dashaTable = [
    //         1986 => ['owner' => 'GURU', 'next' => 3],
    //         1989 => ['owner' => 'RAHU', 'next' => 4],
    //         1993 => ['owner' => 'BUDH', 'next' => 5],
    //         1998 => ['owner' => 'SHUKRA', 'next' => 6],
    //         2004 => ['owner' => 'KETU', 'next' => 7],
    //         2011 => ['owner' => 'SHANI', 'next' => 8],
    //         2019 => ['owner' => 'MANGAL', 'next' => 9],
    //         2028 => ['owner' => 'SUYRA', 'next' => 1],
    //         2029 => ['owner' => 'CHANDRA', 'next' => 2],
    //         2031 => ['owner' => 'GURU', 'next' => 3],
    //         2034 => ['owner' => 'RAHU', 'next' => 4],
    //         2038 => ['owner' => 'BUDH', 'next' => 5],
    //         2043 => ['owner' => 'SHUKRA', 'next' => 6],
    //         2049 => ['owner' => 'KETU', 'next' => 7],
    //         2056 => ['owner' => 'SHANI', 'next' => 8],
    //         2064 => ['owner' => 'MANGAL', 'next' => 9],
    //         2073 => ['owner' => 'SUYRA', 'next' => 1],
    //         2074 => ['owner' => 'CHANDRA', 'next' => 2],
    //         2076 => ['owner' => 'GURU', 'next' => 3],
    //         2079 => ['owner' => 'RAHU', 'next' => 4],
    //     ];

    //     $dasha = [];
    //     foreach ($dashaTable as $startYear => $data) {
    //         if ($year >= $startYear) {
    //             $endYear = $startYear + $data['next'];
    //             $dasha[] = [
    //                 'start_year' => $startYear,
    //                 'end_year' => $endYear,
    //                 'owner' => $data['owner']
    //             ];
    //         }
    //     }
    //     // dd($dasha);
    //     return $dasha;
    // }
    private function getDasha($dob)
    {
        $dashas = [];
        $sequence = [1, 2, 3, 4, 5, 6, 7, 8, 9]; // Sequence of numbers 1 to 9

        // Extract day from DOB and calculate compound number
        $dobDay = date('d', strtotime($dob));
        $compound = array_sum(str_split($dobDay));

        // Ensure the compound number is within the range of the sequence
        while ($compound >= 10) {
            $compound = array_sum(str_split($compound));
        }

        // Starting year of the Dasha
        $startYear = date('Y', strtotime($dob)); // Year of birth
        $currentYear = $startYear; // Keep track of the current year for each Dasha

        // Define the starting index based on the compound number
        $startIndex = array_search($compound, $sequence);

        // Loop to generate the Dasha for the next 20 years
        for ($i = 0; $i < 20; $i++) {
            // Get the current number in the sequence (wrapping around using modulus)
            $number = $sequence[($startIndex + $i) % count($sequence)];

            // Determine the end year for the current Dasha
            $endYear = $currentYear + $number; // Adding current number to current year

            // Find the planet details from the Dasha model
            $dashaData = Dasha::where('number', $number)->first();
// dd($dashaData );
            // If data found, push to array
            if ($dashaData) {
                $dashas[] = [
                    'startYear' => $currentYear,
                    'endYear' => $endYear,
                    'number' => $number,
                    'planet' => $dashaData->planet,
                    'detail' => $dashaData->details
                ];

                // Update the current year for the next cycle
                $currentYear = $endYear; // Start year for the next Dasha is the end year of the current Dasha
            }
        }

        // Format the output for each Dasha entry
        $formattedResult = [];
        foreach ($dashas as $dasha) {
            $formattedResult[] = [
                'Year from' => $dasha['startYear'],
                'Year to' => $dasha['endYear'],
                'PY year' => $dasha['number'],
                'Owner Planet' => $dasha['planet'],
                'Detail' =>  $dasha['detail']
            ];
        }

        // Debug output for verification
        //  dd($formattedResult);

        return $formattedResult; // Return the formatted result
    }










    private function generatePDF($results, $firstName, $id)
    {

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

        $result = [
            'headerData' => $headerData,
            'footerData' => $footerData,
        ];
        // Create a new mPDF instance with auto language and script support
        $mpdf = new \Mpdf\Mpdf([
            'tempDir' => '/tmp',
            'format' => 'A4',
            'margin_left' => 0,
            'margin_right' => 0,
            'margin_top' => 20,
            'margin_bottom' => 90, // Ensure space for footer
        ]);

        // Enable automatic font and language detection
        // Enable automatic font and language detection
        $mpdf->autoScriptToLang = true;
        $mpdf->autoLangToFont = true;


        // Set the background image (watermark) for all pages
        // $backgroundImagePath = public_path('frontend/assests/images/pdf/background-bg.png');
        // $mpdf->SetWatermarkImage($backgroundImagePath, 0.8, 'P', 'C'); // Full opacity, centered
        // $mpdf->showWatermarkImage = true; // Ensure watermark is visible
      // dd($results);
        // Generate HTML content from the Blade view
        $html = view('pdf.business_numerology.businessnumerology', ['results' => $results])->render();

        // Define CSS rules for content and footer
        $css = "
  .content-section { height: calc(100vh - 60mm); } /* Adjust content height */
  .footer { position: fixed; bottom: 0; width: 100%; height: 60mm; } /* Footer height = 60mm */
";
        $mpdf->WriteHTML($css, \Mpdf\HTMLParserMode::HEADER_CSS);

        // Define and set the HTML footer
        $footerHtml = view('pdf.static_page.footer', ['result' => $result])->render();
        $mpdf->SetHTMLFooter($footerHtml, 'O');

        // Write the HTML content to the PDF
        $mpdf->WriteHTML($html);
        // Generate a dynamic filename including the phone number
        $fileName = 'advance_.pdf';

        $filePath = storage_path('/app/public/uploads/bussinessNumerology.pdf');
        $mpdf->Output($filePath, \Mpdf\Output\Destination::FILE);

        // Generate a dynamic filename including the phone number
        $fileName = 'mobile_.pdf';

        // $filePath = storage_path('app\public\uploads\mobileNumerology' . $phoneNumber . '-' . $id . '.pdf');
        // $mpdf->Output($filePath, \Mpdf\Output\Destination::FILE);

        // Output the PDF as a download
        return response($mpdf->Output($fileName, 'I'), 200)
            ->header('Content-Type', 'application/pdf');
    }



    private function getLuckyNumbers($dob)
    {
        // No need for a database query, just return the predefined lucky numbers
        return [1, 2, 3, 5];
    }

    private function getNeutralNumbers($dob)
    {
        // No need for a database query, just return the predefined neutral numbers
        return [4, 7, 8, 9];
    }

    private function getAvoidNumbers($dob)
    {
        // No need for a database query, just return the predefined avoid number
        return [6];
    }



    private function calculateMobileNumberNumerology($mobileNumber)
    {
        // Step 1: Count digit occurrences
        $digitCounts = array_count_values(str_split($mobileNumber));
        $digitCounts = array_replace(array_fill(0, 10, 0), $digitCounts); // Ensure all digits are represented

        // Step 2: Remove zeros
        $mobileNumberWithoutZeros = str_replace('0', '', $mobileNumber);

        // Step 3: Calculate total of each digit
        $total = array_sum(str_split($mobileNumberWithoutZeros));

        // Step 4: Convert to single digit
        $singleDigit = array_sum(str_split($total));
        while ($singleDigit >= 10) {
            $singleDigit = array_sum(str_split($singleDigit));
        }

        // Step 5: Create combinations
        $combinations = [];
        for ($i = 0; $i < strlen($mobileNumberWithoutZeros) - 1; $i++) {
            $combinations[] = substr($mobileNumberWithoutZeros, $i, 2);
        }

        // Step 6: Get predefined table data (existing method)
        $combinationData = $this->getCombinationData($combinations);

        // Step 7: Retrieve detail from MobileNumberTotal model based on 'total'
        $mobileNumberDetail = MobileNumberTotal::where('number', $singleDigit)->first();
        // dd($mobileNumberDetail);

        $detail = $mobileNumberDetail ? $mobileNumberDetail->detail : 'No details found for this mobile number total.';
        list($maxCount, $maxDigit) = $this->getLargestRecurringDigit($mobileNumber);

        // Get the corresponding message for the largest digit from the MultiCount model
        $messageForMaxDigit = $this->getMessageForMaxDigit($maxDigit);
        //  dd($messageForMaxDigit);
        // Step 8: Evaluate and format results
        return [
            'total' => (string) $total,
            'single_digit' => (string) $singleDigit,
            'detail' => $detail,
            'combinations' => array_map('strval', $combinations),
            'combination_data' => array_map(function ($data) {
                return is_string($data) ? $data : json_encode($data); // Convert non-strings to JSON strings
            }, $combinationData),
            'max_count' => $maxCount,
            'max_digit' => $maxDigit,
            'message_for_max_digit' => $messageForMaxDigit
        ];
    }


    private function getCombinationData($combinations)
    {
        // Retrieve all records
        $data = DB::table('mobile_combination_details')->get()->keyBy('combination_number');

        $result = [];
        foreach ($combinations as $combination) {
            $result[$combination] = $data->get($combination, (object)['type' => 'Unknown', 'message' => 'No data with this combination.']);
        }

        return $result;
    }

    private function evaluateResults($singleDigit, $total, $combinationData, $mobileNumber)
    {
        // $messages = [
        //     1 => 'You are a natural leader with a strong will and independence. You thrive on challenges and are highly motivated.',
        //     2 => 'You are a peacemaker with a diplomatic nature. You value harmony and work well in collaborative environments.',
        //     3 => 'You are creative and expressive with a vibrant personality. You enjoy social interactions and are often the life of the party.',
        //     4 => 'You are practical and disciplined. You value stability and work hard to achieve your goals through methodical planning.',
        //     5 => 'You are adventurous and dynamic, with a love for freedom. You thrive on change and enjoy exploring new opportunities.',
        //     6 => 'You are nurturing and responsible. You have a strong sense of duty and are dedicated to family and community.',
        //     7 => 'You are introspective and analytical. You seek knowledge and have a deep understanding of spiritual and intellectual matters.',
        //     8 => 'You are ambitious and determined. You have a strong drive for success and are focused on achieving material and professional goals.',
        //     9 => 'You are compassionate and humanitarian. You are driven by a desire to help others and make a positive impact in the world.',
        // ];

        // Fetch the message for the single digit from the MobileNumberTotal model
        $messageRecord = MobileNumberTotal::where('number', $singleDigit)->first();
        $personalizedMessage = $messageRecord ? $messageRecord->detail : 'No message available.';

        $result = [
            'Mobile Number' => $mobileNumber,
            'Total' => $total,
            'Single Digit' => $singleDigit,
            'Personalized Message' => $personalizedMessage,
            'Combinations' => $combinationData,
        ];
        //dd($result);
        return $result;
    }

    private function reduceDOBSingleDigit($number)
    {
        while ($number >= 10) {
            $number = array_sum(str_split($number));
        }
        return $number;
    }

    private function getDOBCompound($dob)
    {
        // Assuming $dob is in 'Y-m-d' format
        $dateParts = explode('-', $dob);

        // Step 1: Calculate compound number for full DOB (Queen)
        $year = array_sum(str_split($dateParts[0])); // Sum digits of year
        $month = array_sum(str_split($dateParts[1])); // Sum digits of month
        $day = array_sum(str_split($dateParts[2]));   // Sum digits of day

        $queen = $year + $month + $day; // Compound number for full DOB (Queen)
        $king = array_sum(str_split($dateParts[2])); // Compound number for day (King)

        // Ensure queen and king are single-digit numbers
        $queen = array_sum(str_split($queen));
        $king = array_sum(str_split($king));
        // dd($queen);

        $queen = $this->reduceDOBSingleDigit($queen);
        $king = $this->reduceDOBSingleDigit($king);

        // Predefined data for matching (based on provided table)
        $predefinedData = [
            1 => ['lucky' => [9, 2, 5, 1, 3], 'unlucky' => [], 'hardcore' => [8], 'neutral' => [6, 2, 7]],
            2 => ['lucky' => [1, 5, 3], 'unlucky' => [9, 4], 'hardcore' => [8], 'neutral' => [6, 2, 7]],
            3 => ['lucky' => [1, 5, 2, 3, 7], 'unlucky' => [], 'hardcore' => [6], 'neutral' => [7, 8, 9, 4]],
            4 => ['lucky' => [7, 6, 8, 1, 4], 'unlucky' => [9, 2, 4, 8], 'hardcore' => [], 'neutral' => [3, 5]],
            5 => ['lucky' => [1, 2, 3, 6, 5], 'unlucky' => [], 'hardcore' => [], 'neutral' => [7, 8, 9, 4]],
            6 => ['lucky' => [4, 5, 6, 7], 'unlucky' => [3], 'hardcore' => [3], 'neutral' => [8, 9, 2, 1]],
            7 => ['lucky' => [4, 5, 6, 1], 'unlucky' => [], 'hardcore' => [], 'neutral' => [3, 8, 9, 2, 7]],
            8 => ['lucky' => [5, 6, 3, 4, 8], 'unlucky' => [1, 2, 4, 8], 'hardcore' => [1, 2], 'neutral' => [9, 7]],
            9 => ['lucky' => [1, 5, 3], 'unlucky' => [2, 4], 'hardcore' => [], 'neutral' => [9, 8, 7, 6]],
        ];

        // Step 2: Match compound numbers with Srno
        $queenSrno = $queen; // Use the queen's compound number directly as the Srno for lookup
        $kingSrno = $king;    // Use the king's compound number directly as the Srno for lookup

        // Step 3: Get lucky numbers for both king and queen
        $queenLuckyNumbers = $predefinedData[$queenSrno]['lucky'] ?? [];
        $kingLuckyNumbers = $predefinedData[$kingSrno]['lucky'] ?? [];

        // Get common lucky numbers in both king's and queen's lists
        $commonLuckyNumbers = array_intersect($queenLuckyNumbers, $kingLuckyNumbers);

        // Get hardcore numbers which are defined in the predefined data for both king and queen
        $hardcoreNumbers = array_unique(array_merge(
            $predefinedData[$queenSrno]['hardcore'],
            $predefinedData[$kingSrno]['hardcore']
        ));

        // Get all numbers from both the king and queen that should be avoided (unlucky numbers)
        $unluckyNumbers = array_unique(array_merge(
            $predefinedData[$queenSrno]['unlucky'],
            $predefinedData[$kingSrno]['unlucky']
        ));

        // Define all possible numbers from 1 to 9
        $allNumbers = range(1, 9);

        // Calculate the remaining lucky numbers
        $remainingLuckyNumbers = array_diff($allNumbers, $commonLuckyNumbers, $hardcoreNumbers, $unluckyNumbers);

        // Determine neutral numbers as those not included in lucky or hardcore numbers
        $neutralNumbers = array_diff($allNumbers, $commonLuckyNumbers, $hardcoreNumbers);

        return [
            'queen' => $queen,
            'king' => $king,
            'lucky' => array_values($commonLuckyNumbers), // Returning the common lucky numbers
            'hardcore' => array_values($hardcoreNumbers),  // Returning only hardcore numbers defined in predefined data
            'neutral' => array_values($neutralNumbers)     // Returning the neutral numbers
        ];
    }

    /////////////////
    /////Dasha///////
    /////////////////
    //     private function calculatePersonalYear($dob, $currentDate)
    //     {
    //         // Extract the day and month from DOB
    //         $dobDayMonth = $dob->format('dm'); // Format DOB as DDMM
    //         $dobDayMonthDigits = str_split($dobDayMonth); // Split the day and month digits

    //         // Extract the current year digits
    //         $currentYearDigits = str_split($currentDate->format('Y')); // Split the current year into digits

    //         // Sum all digits from the DOB (day/month) and the current year
    //         $sum = array_sum($dobDayMonthDigits) + array_sum($currentYearDigits);

    //         // Reduce the sum to a single digit
    //         $personalYear = $this->reduceToSingleDigit($sum);

    //         // Return the calculated personal year
    //         return $personalYear;
    //     }



    //     // Method to calculate Personal Month (PM)
    //     private function calculatePersonalMonth($personalYear, $dob, $currentDate)
    // {
    //     // Get the month from the DOB (ensure it's not leading zero)
    //     $dobMonth = $dob->format('m');

    //     // Get the current month
    //     $currentMonth = (int) $currentDate->format('m');
    //     $dobDayMonthDigits = str_split($currentMonth);

    //     // Sum the personal year and the DOB month
    //     $sum = $personalYear + $dobMonth + $dobDayMonthDigits;

    //     // Reduce the result to a single digit
    //     $personalMonth = $this->reduceToSingleDigit($sum);
    // // dd($personalMonth);
    //     return $personalMonth;
    // }



    //     // Method to calculate Personal Day (PD)
    //     private function calculatePersonalDay($personalMonth, $currentDate)
    //     {
    //         $currentDay = $currentDate->day;
    //         $personalDay = $personalMonth + $currentDay;
    //         return $this->reduceToSingleDigit($personalDay);
    //     }


}
