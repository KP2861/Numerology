<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mpdf\Mpdf;
use App\Models\NameNumerology;
use App\Models\CharacterDeatil;
use App\Models\CrystalDetails;
use App\Models\DateDetail;
use App\Models\MultiAlphabetOccurance;
use App\Models\MultiCountDOB;
use App\Models\NameNumberTotal;
use App\Models\PdfTemplate;
use App\Models\WordAndCombination;

class NameNumerologyController extends Controller
{
    // Character to number mapping
    protected $characterConversion = [
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
        'P' => 8,
    ];

    // Lucky, Neutral, Avoid numbers
    // protected $luckyNumbers = [1, 2, 3, 5];
    // protected $neutralNumbers = [4, 7, 8, 9];
    // protected $avoidNumbers = [6];

    // Special messages for specific totals
    protected $specialMessages = [
        32 => "Number 32 presents wisdom, and powers of the mother goddess (Mohini, Siddhi). The number has magical powers to sway the masses & get help from high positions. This number is good for people in advertising, marketing and PR. The person can also work under pressure. They come out with unique ideas & techniques even without prior experience. This potent & powerful number can make anyone a prominent person. This number is said to be the epitome of wisdom and intuition. They will attain high position in life & will be youthful in appearance even in old age.",
        11 => "Number 11 is considered a master number in numerology. It represents intuition, spirituality, and enlightenment. Individuals with this number are often visionaries, capable of achieving great things through their deep understanding of the world around them. They are highly sensitive and have a strong connection to their inner voice, which guides them toward their life's purpose.",
        22 => "Number 22, known as the Master Builder, holds immense power in numerology. This number combines practical knowledge with a deep spiritual understanding, allowing individuals to turn dreams into reality. People with this number often have the ability to see the big picture and are capable of manifesting large-scale projects that can have a lasting impact on society.",
        33 => "Number 33 is the Master Teacher in numerology. It is a number of compassion, blessings, inspiration, honesty, discipline, and courage. Those with this number are naturally inclined to help others and are often involved in humanitarian efforts. They are driven by a desire to make the world a better place and to share their wisdom with others.",
        44 => "Number 44 is known as the Master Healer. It signifies stability, discipline, and focus, combined with a deep spiritual awareness. Individuals with this number have the potential to achieve great success through hard work and determination. They are often seen as pillars of strength, providing support and healing to those around them.",
        55 => "Number 55 is a symbol of personal freedom and independence. It represents adventure, curiosity, and the desire for new experiences. Those with this number are often unconventional and thrive in environments that allow them to express their individuality. They are natural explorers, always seeking new opportunities and ways to expand their horizons.",
        77 => "Number 77 is associated with spiritual awakening and enlightenment. It represents deep introspection, intuition, and the pursuit of knowledge. People with this number are often highly spiritual and may have a strong connection to the metaphysical realm. They are seekers of truth and are driven by a desire to understand the mysteries of life.",
        88 => "Number 88 signifies abundance, power, and financial success. It is a number of achievement, representing the potential for great wealth and prosperity. Individuals with this number are often driven by a strong desire to succeed and are capable of achieving their goals through hard work and determination. They are also seen as leaders and are often in positions of authority.",
        99 => "Number 99 is a number of universal love, compassion, and humanitarianism. It represents the completion of a cycle and the beginning of a new one. Those with this number are often drawn to helping others and are involved in philanthropic efforts. They have a strong sense of duty to make the world a better place and are often seen as selfless and giving."
    ];

    public function showForm()
    {
        // dd(session('name_numerology_data'));
        if (!session()->has('name_numerology_data')) {
            return view('payment.session_expired', [
                'message' => 'Your session has expired! Please re-enter your details.'
            ]);
        }

        return view('numerology.name_numerology_form');
    }



    public function viewNameReport(Request $request)
    {
        $getSessionData = session('name_numerology_data');

        // dd($getSessionData);
        $firstName = $getSessionData['first_name'];
        $lastName = $getSessionData['last_name'];

        // Calculate totals for first name and full name

        $firstNameTotal = $this->calculateNameTotal($firstName);
        $firstNameSingleDigit = $this->reduceToSingleDigit($firstNameTotal);

        $fullName = $firstName . $lastName;
        $fullNameTotal = $this->calculateNameTotal($fullName);
        $fullNameSingleDigit = $this->reduceToSingleDigit($fullNameTotal);

        // Interpretations with special message check
        // $firstNameInterpretation = $this->interpretNumber($firstNameSingleDigit, $firstNameTotal);
        // $fullNameInterpretation = $this->interpretNumber($fullNameSingleDigit, $fullNameTotal);

        $dob = $getSessionData['dob']; // Assuming the DOB is part of the session data
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
        $firstNameInterpretation = $this->interpretNumber($firstNameSingleDigit, $firstNameTotal, $dobNonLeadingZero);
        $fullNameInterpretation = $this->interpretNumber($fullNameSingleDigit, $fullNameTotal, $dobNonLeadingZero);

        $firstNameDetails = $this->getCharacterDetailsForName($firstName);
        $lastNameDetails = $this->getCharacterDetailsForName($lastName);

        $result = [
            'first_name_total' => $firstNameTotal,
            'first_name_single_digit' => $firstNameSingleDigit,
            'full_name_total' => $fullNameTotal,
            'full_name_single_digit' => $fullNameSingleDigit,
            'first_name_interpretation' => $firstNameInterpretation,
            'full_name_interpretation' => $fullNameInterpretation,
            'first_name_details' => $firstNameDetails,
            'last_name_details' => $lastNameDetails,
        ];


        return view('numerology.name_numerology_result', [
            'result' => $result,
        ]);
    }
    // New method to get Date of Birth (DOB) from PhoneNumerology model
    private function getDOB($name)
    {
        $phoneNumerology = NameNumerology::where('first_name', $name)->first();
        return $phoneNumerology ? $phoneNumerology->dob : null;
    }

    private function getMultiDateCount($dob)
    {
        // Remove dashes and split DOB into individual digits
        $dobDigits = str_split(str_replace('-', '', $dob));

        // Count occurrences of each digit, ignoring leading zeros
        $dobDigitCounts = array_count_values(array_map(function ($digit) {
            return $digit === '0' ? '0' : ltrim($digit, '0');
        }, $dobDigits));
        // dd($dobDigitCounts);
        // Get the maximum occurrence
        $maxCount = max($dobDigitCounts);
        $largestDigits = array_keys($dobDigitCounts, $maxCount);
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





    // New method to get specific details from DateDetail model based on DOB
    // private function getDateDetails($dob)
    // {
    //     $dobComponents = explode('-', $dob);

    //     $dateDetail = DateDetail::where('number', $dobComponents[2])->first(); // Matching by day part of DOB

    //     return $dateDetail ? $dateDetail->detail : 'No specific detail found for this date.';
    // }


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

    public function calculateNumerology(Request $request)
    {

        $getUserData = NameNumerology::where('payment_status', 'success')
            ->latest('created_at')
            ->first(['first_name', 'last_name', 'dob', 'id']);
        //dd($getUserData);
        $firstName = $getUserData->first_name;
        $lastName = $getUserData->last_name;
        $dob = $getUserData->dob;

        if ($dob) {
            // Assuming dob is in the format 'YYYY-MM-DD'
            $dobParts = explode('-', $dob);
            if (count($dobParts) === 3) {
                $year = $dobParts[0];
                $month = ltrim($dobParts[1], '0'); // Remove leading zero from month
                $day = ltrim($dobParts[2], '0');   // Remove leading zero from day

                // Reconstruct the DOB without leading zeros
                $dob = "$year-$month-$day";
            }
        }
        //   dd($dob);
        $id = $getUserData->id;

        // Calculate totals for first name and full name
        // $getSessionData = session('phone_numerology_data');

        $firstNameTotal = $this->calculateNameTotal($firstName);
        $firstNameSingleDigit = $this->reduceToSingleDigit($firstNameTotal);

        $fullName = $firstName . $lastName;
        $fullNameTotal = $this->calculateNameTotal($fullName);
        $fullNameSingleDigit = $this->reduceToSingleDigit($fullNameTotal);

        // Interpretations with special message check
        // $firstNameInterpretation = $this->interpretNumber($firstNameSingleDigit, $firstNameTotal);
        // $fullNameInterpretation = $this->interpretNumber($fullNameSingleDigit, $fullNameTotal);

        $firstNameInterpretation = $this->interpretNumber($firstNameSingleDigit, $firstNameTotal, $dob);
        $fullNameInterpretation = $this->interpretNumber($fullNameSingleDigit, $fullNameTotal, $dob);

        $firstNameDigitInterpretation = $this->interpretSingleDigit($firstNameSingleDigit, $firstNameTotal, $dob);
        $fullNameDigitInterpretation = $this->interpretSingleDigit($fullNameSingleDigit, $fullNameTotal, $dob);

        // Fetch character details for first name and last name
        $firstNameDetails = $this->getCharacterDetailsForName($firstName);
        // dd($firstNameDetails);
        $lastNameDetails = $this->getCharacterDetailsForName($lastName);
        // Call getMultiDateCount to get DOB related numerology details
        $multiDateCountDetails = $this->getMultiDateCount($dob);
        $dateDetail = $this->getDateDetails($dob);

        $result = [
            'id' => $id,
            'firstName' => $firstName,
            'lastName' => $lastName,
            'username' => $firstName . ' ' . $lastName,
            'first_name_total' => $firstNameTotal,
            'first_name_single_digit' => $firstNameSingleDigit,
            'full_name_total' => $fullNameTotal,
            'full_name_single_digit' =>  $fullNameSingleDigit,
            'first_name_interpretation' => $firstNameInterpretation,
            'full_name_interpretation' => $fullNameInterpretation,
            'first_name_details' => $firstNameDetails,
            'last_name_details' => $lastNameDetails,
            'firstNameDigitInterpretation' => $firstNameDigitInterpretation,
            'fullNameDigitInterpretation' => $fullNameDigitInterpretation,
            'dob' => $dob,
            'multiDateCountDetails' => $multiDateCountDetails,
            'dateDetail' => $dateDetail
        ];

        // dd($result);
        $downloadReport = $this->downloadPDF($result);
    }




    // private function calculateNameTotal($name)
    // {
    //     $total = 0;
    //     foreach (str_split($name) as $char) {
    //         $total += $this->characterConversion[$char] ?? 0;
    //     }
    //      // dd($total);
    //     return $total;
    // }

    private function calculateNameTotal($name)
    {
        $total = 0;

        // Convert the name to uppercase to match the keys in the characterConversion array
        $name = strtoupper($name);

        // Iterate over each character in the name
        foreach (str_split($name) as $char) {
            // Check if the character exists in the conversion array and add its value to the total
            if (isset($this->characterConversion[$char])) {
                $total += $this->characterConversion[$char];
            } else {
                // Optionally handle characters not in the map (e.g., spaces, punctuation)
                // For now, just continue without adding to total
            }
        }
        //dd($total);
        // Return the total value
        return $total;
    }

    private function reduceToSingleDigit($number)
    {
        while ($number >= 10) {
            $number = array_sum(str_split($number));
        }
        return $number;
    }

    // private function interpretNumber($singleDigit, $totalNumber)
    // {
    //     //   dd($singleDigit);
    //     // Check if there's a special message for the total number
    //     if (isset($this->specialMessages[$totalNumber])) {
    //         return $this->specialMessages[$totalNumber];
    //     }

    //     // If no special message, fall back to the single digit interpretation
    //     if (in_array($singleDigit, $this->luckyNumbers)) {
    //         return 'Lucky';
    //     } elseif (in_array($singleDigit, $this->neutralNumbers)) {
    //         return 'Neutral';
    //     } elseif (in_array($singleDigit, $this->avoidNumbers)) {
    //         return 'Avoid';
    //     }


    //     // Default message when no special message or interpretation is found
    //     return 'No specific data available for this number.';
    // }

    private function interpretNumber($singleDigit, $totalNumber, $dob)
    {
        // Get the lucky, hardcore, and neutral numbers for the DOB
        //   dd($dob);
        $dobData = $this->getDOBCompound($dob);

        $luckyNumbers = $dobData['lucky'];
        $neutralNumbers = $dobData['neutral'];
        $hardcoreNumbers = $dobData['hardcore'];

        // Check if there's a special message for the total number
        if (isset($this->specialMessages[$totalNumber])) {
            return $this->specialMessages[$totalNumber];
        }

        // Interpret based on lucky, hardcore, or neutral numbers
        if (in_array($singleDigit, $luckyNumbers)) {
            return 'Lucky';
        } elseif (in_array($singleDigit, $neutralNumbers)) {
            return 'Neutral';
        } elseif (in_array($singleDigit, $hardcoreNumbers)) {
            return 'Avoid'; // Hardcore is equivalent to 'avoid'
        }

        // Default message when no specific data is available for this number
        return 'No specific data available for this number.';
    }

    // private function interpretSingleDigit($singleDigit, $totalNumber)
    // {
    //     // Check if there's a special message for the total number
    //     if (isset($this->specialMessages[$totalNumber])) {
    //         return $this->specialMessages[$totalNumber];
    //     }

    //     // Interpret based on lucky, neutral, or avoid numbers
    //     if (in_array($singleDigit, $this->luckyNumbers)) {
    //         return 'Good';
    //     } elseif (in_array($singleDigit, $this->neutralNumbers)) {

    //         return 'Ok';
    //     } elseif (in_array($singleDigit, $this->avoidNumbers)) {
    //         return 'Not Ok';
    //     }

    //     // Default message when no specific data is available for the number
    //     return 'No specific data available for this number.';
    // }

    private function interpretSingleDigit($singleDigit, $totalNumber, $dob)
    {
        // Get the lucky, hardcore, and neutral numbers for the DOB
        $dobData = $this->getDOBCompound($dob);
        $luckyNumbers = $dobData['lucky'];
        $neutralNumbers = $dobData['neutral'];
        $hardcoreNumbers = $dobData['hardcore'];

        // Check if there's a special message for the total number
        // if (isset($this->specialMessages[$totalNumber])) {
        //     return $this->specialMessages[$totalNumber];
        // }

        // Interpret based on lucky, hardcore, or neutral numbers
        if (in_array($singleDigit, $luckyNumbers)) {
            return 'Good';
        } elseif (in_array($singleDigit, $neutralNumbers)) {
            return 'Ok';
        } elseif (in_array($singleDigit, $hardcoreNumbers)) {
            return 'Not Ok'; // Hardcore is equivalent to 'Not Ok'
        }

        // Default message when no specific data is available for this number
        return 'No specific data available for this number.';
    }

    private function getCharacterDetailsForName($name)
    {
        $details = [];
        foreach (str_split($name) as $char) {
            $characterDetail = CharacterDeatil::where('letter', strtoupper($char))->first();

            if ($characterDetail) {
                $details[] = [
                    'letter' => $characterDetail->letter,
                    'strengths' => $characterDetail->strengths,
                    'weaknesses' => $characterDetail->Weaknesses,
                    'best_jobs' => $characterDetail->best_jobs,
                    'nature' => $characterDetail->nature,
                ];
            }
        }
        return $details;
    }


    private function getNameNumberTotalDetails($fullNameTotal)
    {
        // Query the NameNumberTotal model based on the full name total
        $nameNumberTotalData = NameNumberTotal::where('number', $fullNameTotal)->first();

        // If the data is found, return it; otherwise, set a default message
        if ($nameNumberTotalData) {
            return [
                'rulling' => $nameNumberTotalData->rulling,
                'contributing_planet' => $nameNumberTotalData->contributting_planet,
                'for_business' => $nameNumberTotalData->for_bussiness,
                'details' => $nameNumberTotalData->details,
            ];
        } else {
            return [
                'message' => 'No specific data available for this number.',
            ];
        }
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


    private function getPdfTemplateData()
    {
        // Assuming you want the latest template; you can modify the query as needed
        return PdfTemplate::latest()->first();
    }

    // private function downloadPDF($result)
    // {
    //     $id = $result['id'];
    //     $username = $result['username'];
    //     $fullNameTotal = $result['full_name_total'];
    //     $fullNameSingleDigit = $result['full_name_single_digit'];
    //     $fullNameInterpretation = $result['full_name_interpretation'];
    //     $firstNameTotal = $result['first_name_total'];
    //     $firstNameSingleDigit = $result['first_name_single_digit'];
    //     $firstNameInterpretation = $result['first_name_interpretation'];
    //     $firstNameDetails = $result['first_name_details'];
    //     $lastNameDetails = $result['last_name_details'];
    //     $firstNameDigitInterpretation =  $result['firstNameDigitInterpretation'];
    //     $fullNameDigitInterpretation =  $result['fullNameDigitInterpretation'];
    //     $nameNumberTotalResult = $this->getNameNumberTotalDetails($fullNameTotal);

    //     // Preparing the data for the Blade template
    //     $result = [
    //         'Username' => $username,
    //         'First Name Total' => $firstNameTotal,
    //         'First Name Single Digit' => $firstNameSingleDigit,
    //         'First Name Interpretation' => $firstNameInterpretation,
    //         'Full Name Total' => $fullNameTotal,
    //         'Full Name Single Digit' => $fullNameSingleDigit,
    //         'Full Name Interpretation' => $fullNameInterpretation,
    //         'first_name_details' => $firstNameDetails,
    //         'last_name_details' => $lastNameDetails,
    //         'fullNameDigitInterpretation' => $fullNameDigitInterpretation,
    //         'firstNameDigitInterpretation' => $firstNameDigitInterpretation,
    //         'name_number_total' => $nameNumberTotalResult,
    //     ];

    //     // Set up the mPDF instance
    //     $mpdf = new \Mpdf\Mpdf([
    //         'default_font_size' => 12,
    //         'mode' => 'utf-8',
    //         'format' => 'A4',
    //         'margin_left' => 0,
    //         'margin_right' => 0,
    //         'margin_top' => 0,
    //         'margin_bottom' => 0,
    //     ]);

    //     // Enable automatic font and language detection
    //     $mpdf->autoScriptToLang = true;
    //     $mpdf->autoLangToFont = true;

    //     // Set the background image for the PDF
    //    // Set the background image for all pages
    //     $backgroundImagePath = public_path('frontend/assests/images/pdf/background-bg.png');
    //     $mpdf->SetWatermarkImage($backgroundImagePath, 1, 'P', 'C');
    //     $mpdf->showWatermarkImage = true; // Ensure watermark is visible
    //     // Generate the HTML content from the Blade view

    //     $html = view('pdf.name_numerology.name_numerology_pdf', ['result' => $result])->render();

    //     // Define the footer HTML content
    //     $footerHtml = view('pdf.static_page.footer')->render();

    //     // Set the footer for each page using SetHTMLFooter()
    //     $mpdf->SetHTMLFooter($footerHtml);

    //     // Write the content to the PDF
    //     $mpdf->WriteHTML($html);

    //     // Generate a dynamic filename including the phone number
    //     $fileName = $username . '.pdf';

    //     // Save the PDF to a specific path
    //     $filePath = storage_path('app/public/uploads/nameNumerology/' . 'abhi' . '-' . $id . '.pdf');
    //     $mpdf->Output($filePath, \Mpdf\Output\Destination::FILE);

    //     // Output the PDF as a download
    //     return response($mpdf->Output($fileName, 'I'), 200)
    //         ->header('Content-Type', 'application/pdf');
    // }


    private function downloadPDF($result)
    {
        $id = $result['id'];
        $firstName = $result['firstName'];
        $lastName = $result['lastName'];
        $username = $result['username'];
        $fullNameTotal = $result['full_name_total'];
        $fullNameSingleDigit = $result['full_name_single_digit'];
        $fullNameInterpretation = $result['full_name_interpretation'];
        $firstNameTotal = $result['first_name_total'];
        $firstNameSingleDigit = $result['first_name_single_digit'];
        $firstNameInterpretation = $result['first_name_interpretation'];
        $firstNameDetails = $result['first_name_details'];
        $lastNameDetails = $result['last_name_details'];
        $firstNameDigitInterpretation = $result['firstNameDigitInterpretation'];
        $fullNameDigitInterpretation = $result['fullNameDigitInterpretation'];
        $nameNumberTotalResult = $this->getNameNumberTotalDetails($fullNameTotal);
        $dob =  $result['dob'];
        $crystalDetails = $this->getCrystalDetails($dob);

        $nameMatches = $this->checkNameParts($firstName, $lastName);
        $alphabetIssues = $this->getMostFrequentAlphabetIssues($firstName);

        $nameDetails = [];
        
        if ($nameMatches) {
            // Check for matches in the first name
            if (isset($nameMatches['first_name_matches'])) {
                // Ensure first_name_matches is a collection
                if ($nameMatches['first_name_matches'] instanceof \Illuminate\Database\Eloquent\Collection) {
                    // Extract specific attributes you want from the collection
                    $nameDetails['first_name_matches'] = $nameMatches['first_name_matches']->map(function ($match) {
                        return [
                            'id' => $match->id,
                            'name' => $match->name,
                            'type' => $match->type,
                            'issues_faced_in_life' => $match->issues_faced_in_life,
                            'details' => $match->details
                        ];
                    })->toArray(); // Convert to array for easier access in the PDF
                } else {
                    // If it's a single instance, wrap it in an array
                    $nameDetails['first_name_matches'] = [
                        [
                            'id' => $nameMatches['first_name_matches']->id,
                            'name' => $nameMatches['first_name_matches']->name,
                            'type' => $nameMatches['first_name_matches']->type,
                            'issues_faced_in_life' => $nameMatches['first_name_matches']->issues_faced_in_life,
                            'details' => $nameMatches['first_name_matches']->details
                        ]
                    ];
                }
            }
        
            // Check for matches in the last name
            if (isset($nameMatches['last_name_matches'])) {
                // Ensure last_name_matches is a collection
                if ($nameMatches['last_name_matches'] instanceof \Illuminate\Database\Eloquent\Collection) {
                    // Extract specific attributes you want from the collection
                    $nameDetails['last_name_matches'] = $nameMatches['last_name_matches']->map(function ($match) {
                        return [
                            'id' => $match->id,
                            'name' => $match->name,
                            'type' => $match->type,
                            'issues_faced_in_life' => $match->issues_faced_in_life,
                            'details' => $match->details
                        ];
                    })->toArray(); // Convert to array for easier access in the PDF
                } else {
                    // If it's a single instance, wrap it in an array
                    $nameDetails['last_name_matches'] = [
                        [
                            'id' => $nameMatches['last_name_matches']->id,
                            'name' => $nameMatches['last_name_matches']->name,
                            'type' => $nameMatches['last_name_matches']->type,
                            'issues_faced_in_life' => $nameMatches['last_name_matches']->issues_faced_in_life,
                            'details' => $nameMatches['last_name_matches']->details
                        ]
                    ];
                }
            }
        }
        
        // At this point, $nameDetails will contain the relevant matches for both first and last names.
        


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
        $getBasicDetail = $this->getDOBCompound($dobNonLeadingZero);

        $multiCountDetail =  $result['multiDateCountDetails'];
        $dateDetail = $result['dateDetail'];

        $result['Crystal Details'] = $crystalDetails;
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

        $data = [
            'Username' => $username,
            'FirstName' => $firstName,
            'LastName' => $lastName,
            'Name Details' => $nameDetails,
            'alphabetIssues' => $alphabetIssues,
            'First Name Total' => $firstNameTotal,
            'First Name Single Digit' => $firstNameSingleDigit,
            'First Name Interpretation' => $firstNameInterpretation,
            'Full Name Total' => $fullNameTotal,
            'Full Name Single Digit' => $fullNameSingleDigit,
            'Full Name Interpretation' => $fullNameInterpretation,
            'first_name_details' => $firstNameDetails,
            'last_name_details' => $lastNameDetails,
            'fullNameDigitInterpretation' => $fullNameDigitInterpretation,
            'firstNameDigitInterpretation' => $firstNameDigitInterpretation,
            'name_number_total' => $nameNumberTotalResult,
            'DOB' => $dob,
            'Multi-Date Count' => $multiCountDetail,
            'Date Detail' => $dateDetail,
            'Crystal Details' => $crystalDetails,
            'headerData' => $headerData,
            'footerData' => $footerData,
            'getBasicDetail' => $getBasicDetail

        ];
//  dd($data);
        // Initialize mPDF instance with margins
        $mpdf = new \Mpdf\Mpdf([
            'tempDir' => '/tmp',
            'format' => 'A4',
            'margin_left' => 0,
            'margin_right' => 0,
            'margin_top' => 20,
            'margin_bottom' => 90, // Ensure space for footer
        ]);

        // Enable automatic font and language detection
        $mpdf->autoScriptToLang = true;
        $mpdf->autoLangToFont = true;

        $mpdf->SetDisplayMode('fullpage');




        // Set the background image (watermark) for all pages
        // $backgroundImagePath = public_path('frontend/assests/images/pdf/background-bg.png');
        // $mpdf->SetWatermarkImage($backgroundImagePath, 0.8, 'P', 'C'); // Full opacity, centered
        // $mpdf->showWatermarkImage = true; // Ensure watermark is visible

        // Generate HTML content from the Blade view
        $html = view('pdf.name_numerology.name_numerology_pdf', ['result' => $data])->render();

        // Define CSS rules for content and footer
        $css = "
            .content-section { height: calc(100vh - 60mm); } /* Adjust content height */
            .footer { position: fixed; bottom: 0; width: 100%; height: 60mm; } /* Footer height = 60mm */
        ";
        $mpdf->WriteHTML($css, \Mpdf\HTMLParserMode::HEADER_CSS);

        // Define and set the HTML footer
        $footerHtml = view('pdf.static_page.footer', ['result' => $data])->render();
        $mpdf->SetHTMLFooter($footerHtml, 'O');

        // Write the HTML content to the PDF
        $mpdf->WriteHTML($html);
        // Generate dynamic filename
        $fileName = $username . '.pdf';

        // $filePath = storage_path('app/public/uploads/nameNumerology/' . $firstName . '-' . $id . '.pdf');
        // $mpdf->Output($filePath, \Mpdf\Output\Destination::FILE);


        // Output the PDF as a download
        return response($mpdf->Output($fileName, 'I'), 200)
            ->header('Content-Type', 'application/pdf');
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
            'lucky' => array_values($commonLuckyNumbers), 
            'hardcore' => array_values($hardcoreNumbers),  
            'neutral' => array_values($neutralNumbers)    
        ];
    }

    private function checkNameParts($firstName, $lastName)
    {
        // Function to generate meaningful parts from a name
        function generateNameParts($name)
        {
            $nameParts = [];
            $length = strlen($name);
    
            // Generate substrings of length 2 and 3
            for ($i = 0; $i < $length; $i++) {
                // Create 2-character substrings
                if ($i + 2 <= $length) {
                    $part = substr($name, $i, 2); // Get 2 consecutive characters
                    if (!in_array($part, $nameParts)) {
                        $nameParts[] = $part;
                    }
                }
    
                // Create 3-character substrings
                if ($i + 3 <= $length) {
                    $part = substr($name, $i, 3); // Get 3 consecutive characters
                    if (!in_array($part, $nameParts)) {
                        $nameParts[] = $part;
                    }
                }
            }
    
            // Add the full name as a part to check
            if (!in_array($name, $nameParts)) {
                $nameParts[] = $name;
            }
    
            return $nameParts;
        }
    
        // Generate parts for the first name and last name individually
        $firstNameParts = generateNameParts($firstName);
        $lastNameParts = generateNameParts($lastName);
    
        // Query the database for matches in first name parts
        $firstNameMatches = WordAndCombination::whereIn('name', $firstNameParts)->get();
    
        // Query the database for matches in last name parts
        $lastNameMatches = WordAndCombination::whereIn('name', $lastNameParts)->get();
    
        // Initialize an array to hold the results
        $result = [];
    
        // Find the largest first name match if available
        if ($firstNameMatches->isNotEmpty()) {
            $largestFirstNameMatch = $firstNameMatches->sortByDesc(function($match) {
                return strlen($match->name); // Sort by the length of the name in descending order
            })->first(); // Get the first (largest) match
            $result['first_name_matches'] = $largestFirstNameMatch; // Store the largest match
        }
    
        // Find the largest last name match if available
        if ($lastNameMatches->isNotEmpty()) {
            $largestLastNameMatch = $lastNameMatches->sortByDesc(function($match) {
                return strlen($match->name); // Sort by the length of the name in descending order
            })->first(); // Get the first (largest) match
            $result['last_name_matches'] = $largestLastNameMatch; // Store the largest match
        }
    
        // Check if any matches were found and return accordingly
        if (!empty($result)) {
            return $result; // Return an array with separate matches
        }
    
        // Return null if no matches were found
        return null;
    }
    
    public function getMostFrequentAlphabetIssues($firstName)
    {
        // Step 1: Count the occurrences of each character in the first name
        $charCounts = array_count_values(str_split(strtoupper($firstName))); // Convert to uppercase for consistency
    
        // Step 2: Filter characters that appear 3 or more times
        $frequentChars = array_filter($charCounts, function ($count) {
            return $count >= 3; // Only include characters with 3 or more occurrences
        });
    
        // Step 3: If no characters occur 3 or more times, return an empty result
        if (empty($frequentChars)) {
            return []; // No characters met the 3+ occurrence condition
        }
    
        // Step 4: Find the character with the maximum occurrence
        $mostFrequentChar = array_keys($frequentChars, max($frequentChars))[0];
    
        // Step 5: Fetch details from the MultiAlphabetOccurance model for the most frequent character
        $alphabetDetails = MultiAlphabetOccurance::where('alphabet', $mostFrequentChar)->first();
    
        // Step 6: Return the result with details if found
        if ($alphabetDetails) {
            return [
                'alphabet' => $alphabetDetails->alphabet,
                'details' => $alphabetDetails->details,
                'issues_in_life' => $alphabetDetails->if_multiple_occurrence_issues_in_life,
                'remedies' => $alphabetDetails->remedies,
            ];
        }
    
        return null; // Return null if no details found
    }
    
    
}
