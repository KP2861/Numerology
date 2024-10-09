<?php

namespace App\Http\Controllers;

use App\Models\CharacterAndMultiple;
use Illuminate\Http\Request;
use Mpdf\Mpdf;
use App\Models\NameNumerology;
use App\Models\CharacterDeatil;
use App\Models\CrystalDetails;
use App\Models\DateDetail;
use App\Models\MultiAlphabetOccurance;
use App\Models\MultiCountDOB;
use App\Models\MultipleCountDOBLessDtl;
use App\Models\NameNumberTotal;
use App\Models\PdfTemplate;
use App\Models\WordAndCombination;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;

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
        try {
            // Retrieve session data
            $getSessionData = session('name_numerology_data');

            // Check if session data is available
            if (!$getSessionData) {
                return redirect()->back()->withErrors('Session data is missing. Please provide your details again.');
            }

            // Validate the existence of required fields in session data
            if (!isset($getSessionData['first_name']) || !isset($getSessionData['last_name']) || !isset($getSessionData['dob'])) {
                return redirect()->back()->withErrors('Incomplete session data. Please provide both first name, last name, and date of birth.');
            }

            $firstName = $getSessionData['first_name'];
            $lastName = $getSessionData['last_name'];

            // Calculate totals for first name and full name
            $firstNameTotal = $this->calculateNameTotal($firstName);
            $firstNameSingleDigit = $this->reduceToSingleDigit($firstNameTotal);

            $fullName = $firstName . $lastName;
            $fullNameTotal = $this->calculateNameTotal($fullName);
            $fullNameSingleDigit = $this->reduceToSingleDigit($fullNameTotal);

            // Process the Date of Birth (DOB)
            $dob = $getSessionData['dob']; // Assuming the DOB is part of the session data
            $dobNonLeadingZero = null;

            if ($dob) {
                // Assuming dob is in the format 'YYYY-MM-DD'
                $dobParts = explode('-', $dob);

                if (count($dobParts) === 3) {
                    $year = $dobParts[0];
                    $month = ltrim($dobParts[1], '0'); // Remove leading zero from month
                    $day = ltrim($dobParts[2], '0');   // Remove leading zero from day

                    // Reconstruct the DOB without leading zeros
                    $dobNonLeadingZero = "$year-$month-$day";
                } else {
                    return redirect()->back()->withErrors('Invalid date format. Please provide DOB in YYYY-MM-DD format.');
                }
            } else {
                return redirect()->back()->withErrors('Date of birth is missing.');
            }

            // Interpretations for first name and full name based on the totals and DOB
            $firstNameInterpretation = $this->interpretNumber($firstNameSingleDigit, $firstNameTotal, $dobNonLeadingZero);
            $fullNameInterpretation = $this->interpretNumber($fullNameSingleDigit, $fullNameTotal, $dobNonLeadingZero);

            // Get character details for first name and last name
            $firstNameDetails = $this->getCharacterDetailsForName($firstName);
            $lastNameDetails = $this->getCharacterDetailsForName($lastName);

            // Prepare the result data
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

            // Return the view with the result data
            return view('numerology.name_numerology_result', ['result' => $result]);
        } catch (\Exception $e) {
            // Log the error for debugging and return a user-friendly error message
            Log::error('Error in viewNameReport: ' . $e->getMessage());
            return redirect()->back()->withErrors('An error occurred while generating the report. Please try again.');
        }
    }

    // New method to get Date of Birth (DOB) from PhoneNumerology model
    // private function getDOB($name)
    // {
    //     $phoneNumerology = NameNumerology::where('first_name', $name)->first();
    //     return $phoneNumerology ? $phoneNumerology->dob : null;
    // }


    // DOB Multi digit and its detail
    private function getMultiDateCount($dob)
    {
        try {
            // Remove dashes and split DOB into individual digits
            $dobDigits = str_split(str_replace('-', '', $dob));

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
            // Log the error for debugging
            Log::error('Error in getMultiDateCount: ' . $e->getMessage(), [
                'dob' => $dob,
                'dobDigits' => $dobDigits ?? null,
                'dobDigitCounts' => $dobDigitCounts ?? null,
                'largestDigit' => $largestDigit ?? null,
                'maxCount' => $maxCount ?? null,
            ]);

            // Return a user-friendly error message
            return 'An error occurred while processing the date of birth.';
        }
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
        try {
            // Split the date into components
            $dobComponents = explode('-', $dob);
            if (count($dobComponents) !== 3) {
                throw new \Exception('Invalid date format.');
            }

            $day = (int)$dobComponents[2];
            $month = (int)$dobComponents[1];
            $year = (int)$dobComponents[0];

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
        try {
            $total = 0;

            // Check if the name is a valid string
            if (!is_string($name) || empty($name)) {
                throw new \Exception('Invalid name input.');
            }

            // Convert the name to uppercase to match the keys in the characterConversion array
            $name = strtoupper($name);

            // Iterate over each character in the name
            foreach (str_split($name) as $char) {
                // Check if the character exists in the conversion array and add its value to the total
                if (isset($this->characterConversion[$char])) {
                    $total += $this->characterConversion[$char];
                } else {
                    // Optionally log or handle characters not in the map (e.g., spaces, punctuation)
                    // Log a message for characters that aren't found in the conversion array
                    Log::info("Character '$char' is not in the characterConversion array and was skipped.");
                }
            }

            // Return the total value
            return $total;
        } catch (\Exception $e) {
            // Log the error message
            Log::error('Error in calculateNameTotal: ' . $e->getMessage());

            // Optionally, return a fallback value or handle the error gracefully
            return 0;  // Return 0 if there's an error in calculation
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
        try {
            // Validate inputs
            if (!is_numeric($singleDigit) || !is_numeric($totalNumber) || !is_string($dob)) {
                throw new \Exception('Invalid input types: singleDigit, totalNumber must be numeric, and dob must be a string.');
            }

            // Get the lucky, hardcore, and neutral numbers for the DOB
            $dobData = $this->getDOBCompound($dob);

            // Ensure dobData is an array and contains expected keys
            if (!is_array($dobData) || !isset($dobData['lucky'], $dobData['neutral'], $dobData['hardcore'])) {
                throw new \Exception('Invalid DOB data structure returned from getDOBCompound.');
            }

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
        } catch (\Exception $e) {
            // Log the error message
            Log::error('Error in interpretNumber: ' . $e->getMessage());

            // Return a fallback message or value in case of an error
            return 'Error interpreting the number. Please check the input values.';
        }
    }

           
    private function interpretSingleDigit($singleDigit, $totalNumber, $dob)
    {
        try {
            // Validate inputs
            if (!is_numeric($singleDigit) || !is_numeric($totalNumber) || !is_string($dob)) {
                throw new \Exception('Invalid input types: singleDigit and totalNumber must be numeric, and dob must be a string.');
            }

            // Get the lucky, hardcore, and neutral numbers for the DOB
            $dobData = $this->getDOBCompound($dob);

            // Ensure dobData is an array and contains expected keys
            if (!is_array($dobData) || !isset($dobData['lucky'], $dobData['neutral'], $dobData['hardcore'])) {
                throw new \Exception('Invalid DOB data structure returned from getDOBCompound.');
            }

            $luckyNumbers = $dobData['lucky'];
            $neutralNumbers = $dobData['neutral'];
            $hardcoreNumbers = $dobData['hardcore'];

            // Check if there's a special message for the total number
            // Uncomment if needed
            // if (isset($this->specialMessages[$totalNumber])) {
            //     return $this->specialMessages[$totalNumber];
            // }

            // Interpret based on lucky, hardcore, or neutral numbers
            if (in_array($singleDigit, $luckyNumbers)) {
                return 'Lucky';
            } elseif (in_array($singleDigit, $neutralNumbers)) {
                return 'Neutral';
            } elseif (in_array($singleDigit, $hardcoreNumbers)) {
                return 'Avoid'; // Hardcore is equivalent to 'Not Ok'
            }

            // Default message when no specific data is available for this number
            return 'No specific data available for this number.';
        } catch (\Exception $e) {
            // Log the error message
            Log::error('Error in interpretSingleDigit: ' . $e->getMessage());

            // Return a fallback message or value in case of an error
            return 'Error interpreting the single digit. Please check the input values.';
        }
    }

    private function getCharacterDetailsForName($name)
    {
        $details = [];

        // Validate the input name
        if (!is_string($name) || empty(trim($name))) {
            Log::error('Invalid input: name must be a non-empty string.');
            return 'Error: Name must be a valid non-empty string.';
        }

        try {
            foreach (str_split($name) as $char) {
                // Convert character to uppercase to treat 'A' and 'a' the same
                $upperChar = strtoupper($char);

                // Retrieve character details
                $characterDetail = CharacterDeatil::where('letter', $upperChar)->first();

                if ($characterDetail) {
                    $details[] = [
                        'letter' => $characterDetail->letter,
                        'strengths' => $characterDetail->strengths,
                        'weaknesses' => $characterDetail->Weaknesses,
                        'best_jobs' => $characterDetail->best_jobs,
                        'nature' => $characterDetail->nature,
                    ];
                } else {
                    Log::warning("Character detail not found for letter: $upperChar");
                }
            }
        } catch (\Exception $e) {
            // Log any unexpected errors
            Log::error('Error in getCharacterDetailsForName: ' . $e->getMessage());
            return 'Error retrieving character details. Please try again later.';
        }

        return $details;
    }



    private function getNameNumberTotalDetails($fullNameTotal)
    {
        // Validate the input number
        if (!is_numeric($fullNameTotal) || $fullNameTotal <= 0) {
            Log::error('Invalid input: fullNameTotal must be a positive number.');
            return [
                'message' => 'Error: Invalid input. Full name total must be a positive number.',
            ];
        }

        try {
            // Query the NameNumberTotal model based on the full name total
            $nameNumberTotalData = NameNumberTotal::where('number', $fullNameTotal)->first();

            // If the data is found, return it; otherwise, set a default message
            if ($nameNumberTotalData) {
                return [
                    'rulling' => $nameNumberTotalData->rulling_planet,
                    'contributing_planet' => $nameNumberTotalData->contributting_planet,
                    'for_business' => $nameNumberTotalData->your_bussiness_insights,
                    'details' => $nameNumberTotalData->details,
                ];
            } else {
                Log::warning("No data found for full name total: $fullNameTotal");
                return [
                    'message' => 'No specific data available for this number.',
                ];
            }
        } catch (\Exception $e) {
            // Log any unexpected errors
            Log::error('Error in getNameNumberTotalDetails: ' . $e->getMessage());
            return [
                'message' => 'Error retrieving data. Please try again later.',
            ];
        }
    }


    private function getCrystalDetails($dob)
    {
        try {
            // Extract the day from the DOB
            $day = date('j', strtotime($dob)); // 'j' returns day without leading zeros

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
        } catch (\Exception $e) {
            // Log any unexpected errors
            Log::error('Error in getCrystalDetails: ' . $e->getMessage());
            return [
                'crystal' => null,
                'details' => 'Error retrieving crystal details. Please try again later.'
            ];
        }
    }



    private function getPdfTemplateData()
    {
        // Assuming you want the latest template; you can modify the query as needed
        return PdfTemplate::latest()->first();
    }

    private function reduceDOBSingleDigit($number)
    {
        try {
            // Validate input
            if (!is_numeric($number) || $number < 0) {
                throw new \InvalidArgumentException('Input must be a non-negative number.');
            }

            // Reduce the number to a single digit
            while ($number >= 10) {
                $number = array_sum(str_split($number));
            }

            return $number;
        } catch (\InvalidArgumentException $e) {
            // Log the specific error
            Log::error('Invalid input in reduceDOBSingleDigit: ' . $e->getMessage());

            // Optionally, return null or a default value
            return null; // or return 0; based on your needs
        } catch (\Exception $e) {
            // Catch any other unexpected errors
            Log::error('Error in reduceDOBSingleDigit: ' . $e->getMessage());

            // Optionally, return null or a default value
            return null; // or return 0; based on your needs
        }
    }

    private function getDOBCompound($dob)
    {
        try {
            // Validate input format (Y-m-d)
            // $dateTime = \DateTime::createFromFormat('Y-m-d', $dob);
            // if (!$dateTime || $dateTime->format('Y-m-d') !== $dob) {
            //     throw new \InvalidArgumentException('Invalid date format. Please use Y-m-d format.');
            // }

            // Extract date parts
            $dateParts = explode('-', $dob);

            // Step 1: Calculate compound number for full DOB (Queen)
            $day  = array_sum(str_split($dateParts[2]));   // Sum digits of day
            $month = array_sum(str_split($dateParts[1]));   // Sum digits of month
            $year = array_sum(str_split($dateParts[0]));    // Sum digits of year

            $queen = $year + $month + $day; // Compound number for full DOB (Queen)
            $king = $day; // Compound number for day (King)

            // Ensure queen and king are single-digit numbers
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
        } catch (\InvalidArgumentException $e) {
            // Log the specific error for invalid date format
            Log::error('Invalid input in getDOBCompound: ' . $e->getMessage());
            return [
                'error' => 'Invalid date format. Please provide a date in Y-m-d format.',
            ];
        } catch (\Exception $e) {
            // Log any other unexpected errors
            Log::error('Error in getDOBCompound: ' . $e->getMessage());
            return [
                'error' => 'An unexpected error occurred while processing the date of birth.',
            ];
        }
    }

    private function characterAndMultiples($username)
    {
        // Step 1: Count the occurrences of each character in the username
        $charCounts = array_count_values(str_split(strtoupper($username))); // Convert to uppercase for consistency

        // Step 2: Find the character with the maximum occurrence
        $mostFrequentChar = array_keys($charCounts, max($charCounts))[0];
        $maxOccurrence = $charCounts[$mostFrequentChar];

        // Step 3: Check if the occurrence is greater than 2
        if ($maxOccurrence > 2) {
            // Step 4: Retrieve data from the CharacterAndMultiple model
            try {
                $characterData = CharacterAndMultiple::where('alphabet', $mostFrequentChar)->first();
                // dd($characterData);
                if ($characterData) {
                    return [
                        'alphabet' => $characterData->alphabet,
                        'personal_traits' => $characterData->personal_traits,
                        'multiple_occurrences' => $characterData->multiple_occurrences,
                        'power_remedies' => $characterData->power_remedies,
                    ];
                }
            } catch (\Exception $e) {
                // Log any error and return a friendly message
                Log::error('Error in characterAndMultiples: ' . $e->getMessage());
                return ['error' => 'An error occurred while retrieving character data.'];
            }
        }

        // Step 5: Return a message if the occurrence is 1 or 2
        return [];
    }

    private function checkNameParts($firstName, $lastName, $fullName)
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

        // Initialize an array to hold the results
        $result = [];

        try {
            // Generate parts for the first name and last name individually
            $firstNameParts = generateNameParts($firstName);
            $lastNameParts = generateNameParts($lastName);
            $fullNameParts = generateNameParts($fullName);

            // Query the database for matches in first name parts
            $firstNameMatches = WordAndCombination::whereIn('name_sound', $firstNameParts)->get();

            // Query the database for matches in last name parts
            $lastNameMatches = WordAndCombination::whereIn('name_sound', $lastNameParts)->get();

            // Query the database for matches in full name parts
            $fullNameMatches = WordAndCombination::whereIn('name_sound', $fullNameParts)->get();

            // Find the largest first name match if available
            if ($firstNameMatches->isNotEmpty()) {
                $largestFirstNameMatch = $firstNameMatches->sortByDesc(function ($match) {
                    return strlen($match->name); // Sort by the length of the name in descending order
                })->first(); // Get the first (largest) match
                $result['first_name_matches'] = $largestFirstNameMatch; // Store the largest match
            }

            // Find the largest last name match if available
            if ($lastNameMatches->isNotEmpty()) {
                $largestLastNameMatch = $lastNameMatches->sortByDesc(function ($match) {
                    return strlen($match->name); // Sort by the length of the name in descending order
                })->first(); // Get the first (largest) match
                $result['last_name_matches'] = $largestLastNameMatch; // Store the largest match
            }

            // Find the largest full name match if available
            if ($fullNameMatches->isNotEmpty()) {
                $largestFullNameMatch = $fullNameMatches->sortByDesc(function ($match) {
                    return strlen($match->name); // Sort by the length of the name in descending order
                })->first(); // Get the first (largest) match
                $result['full_name_matches'] = $largestFullNameMatch; // Store the largest match
            }

            // Check if any matches were found and return accordingly
            if (!empty($result)) {
                return $result; // Return an array with separate matches
            }

            // Return null if no matches were found
            return null;
        } catch (\InvalidArgumentException $e) {
            // Log specific error for invalid arguments
            Log::error('Invalid argument in checkNameParts: ' . $e->getMessage());
            return [
                'error' => 'Invalid input provided. Please check the names.',
            ];
        } catch (\Exception $e) {
            // Log any other unexpected errors
            Log::error('Error in checkNameParts: ' . $e->getMessage());
            return [
                'error' => 'An unexpected error occurred while processing the name parts.',
            ];
        }
    }

    public function getMostFrequentAlphabetIssues($firstName)
    {
        // Step 1: Check if the first name is valid
        if (empty($firstName) || !is_string($firstName)) {
            return [
                'error' => 'Invalid input provided. Please provide a valid first name.',
            ];
        }

        try {
            // Step 2: Count the occurrences of each character in the first name
            $charCounts = array_count_values(str_split(strtoupper($firstName))); // Convert to uppercase for consistency

            // Step 3: Filter characters that appear 3 or more times
            $frequentChars = array_filter($charCounts, function ($count) {
                return $count >= 3; // Only include characters with 3 or more occurrences
            });

            // Step 4: If no characters occur 3 or more times, return an empty result
            if (empty($frequentChars)) {
                return []; // No characters met the 3+ occurrence condition
            }

            // Step 5: Find the character with the maximum occurrence
            $mostFrequentChar = array_keys($frequentChars, max($frequentChars))[0];

            // Step 6: Fetch details from the MultiAlphabetOccurance model for the most frequent character
            $alphabetDetails = MultiAlphabetOccurance::where('alphabet', $mostFrequentChar)->first();

            // Step 7: Return the result with details if found
            if ($alphabetDetails) {
                return [
                    'alphabet' => $alphabetDetails->alphabet,
                    'details' => $alphabetDetails->details,
                    'issues_in_life' => $alphabetDetails->if_multiple_occurrence_issues_in_life,
                    'remedies' => $alphabetDetails->remedies,
                ];
            }

            return null; // Return null if no details found

        } catch (\Exception $e) {
            // Log any unexpected errors
            Log::error('Error in getMostFrequentAlphabetIssues: ' . $e->getMessage());
            return [
                'error' => 'An unexpected error occurred while processing the alphabet issues.',
            ];
        }
    }



    private function collectBestJobsFromName($name)
    {
        // Step 1: Check if the name is valid
        if (empty($name) || !is_string($name)) {
            return [
                'error' => 'Invalid input provided. Please provide a valid name.',
            ];
        }

        try {
            // Step 2: Get character details for the given name
            $characterDetails = $this->getCharacterDetailsForName($name);

            // Step 3: Initialize an array for best jobs
            $bestJobs = [];

            // Step 4: Check if character details were retrieved successfully
            if (empty($characterDetails)) {
                return [
                    'error' => 'No character details found for the provided name.',
                ];
            }

            // Step 5: Process each character detail to collect best jobs
            foreach ($characterDetails as $detail) {
                // Check if 'best_jobs' key exists in the detail
                if (isset($detail['best_jobs']) && !empty($detail['best_jobs'])) {
                    // Split the best jobs string by commas and trim whitespace
                    $jobs = array_map('trim', explode(',', $detail['best_jobs']));

                    // Convert all job titles to lowercase for case-insensitive comparison
                    $jobs = array_map('strtolower', $jobs);

                    // Merge the jobs into the bestJobs array
                    $bestJobs = array_merge($bestJobs, $jobs);
                }
            }

            // Step 6: Remove duplicates and reindex the array
            $bestJobs = array_unique($bestJobs);

            // Step 7: Capitalize the first letter of each job title
            $bestJobs = array_map('ucfirst', $bestJobs);

            // Return the best jobs as a comma-separated string
            return implode(', ', $bestJobs);
        } catch (\Exception $e) {
            // Log any unexpected errors
            Log::error('Error in collectBestJobsFromName: ' . $e->getMessage());
            return [
                'error' => 'An unexpected error occurred while collecting the best jobs.',
            ];
        }
    }

    private function downloadPDF($result)
    {
        try {
            // Extract data from the result array
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
            $fullNameDetails = $result['full_name_details'];
            $firstNameDigitInterpretation = $result['firstNameDigitInterpretation'];
            $fullNameDigitInterpretation = $result['fullNameDigitInterpretation'];
            $nameNumberTotalResult = $this->getNameNumberTotalDetails($fullNameTotal);
            $dob = $result['dob'];
            $crystalDetails = $this->getCrystalDetails($dob);
            $charAndMultiples = $this->characterAndMultiples($username);
            $nameMatches = $this->checkNameParts($firstName, $lastName, $username);
            $alphabetIssues = $this->getMostFrequentAlphabetIssues($username);
            $nameDetails = [];

            // Prepare name details
            if ($nameMatches) {
                // First Name Matches
                if (isset($nameMatches['first_name_matches'])) {
                    if ($nameMatches['first_name_matches'] instanceof \Illuminate\Database\Eloquent\Collection) {
                        $nameDetails['first_name_matches'] = $nameMatches['first_name_matches']->map(function ($match) {
                            return [
                                'id' => $match->id,
                                'name' => $match->name_sound,
                                'type' => $match->energy_type,
                                'issues_faced_in_life' => $match->life_challenges_or_success,
                                'details' => $match->meaning,
                                'famous_names' => $match->famous_names
                            ];
                        })->toArray();
                    }
                }

                // Last Name Matches
                if (isset($nameMatches['last_name_matches'])) {
                    if ($nameMatches['last_name_matches'] instanceof \Illuminate\Database\Eloquent\Collection) {
                        $nameDetails['last_name_matches'] = $nameMatches['last_name_matches']->map(function ($match) {
                            return [
                                'id' => $match->id,
                                'name' => $match->name_sound,
                                'type' => $match->energy_type,
                                'issues_faced_in_life' => $match->life_challenges_or_success,
                                'details' => $match->meaning,
                                'famous_names' => $match->famous_names
                            ];
                        })->toArray();
                    }
                }

                // Full Name Matches
                if (isset($nameMatches['full_name_matches'])) {
                    if ($nameMatches['full_name_matches'] instanceof \Illuminate\Database\Eloquent\Collection) {
                        $nameDetails['full_name_matches'] = $nameMatches['full_name_matches']->map(function ($match) {
                            return [
                                'id' => $match->id,
                                'name' => $match->name_sound,
                                'type' => $match->energy_type,
                                'issues_faced_in_life' => $match->life_challenges_or_success,
                                'details' => $match->meaning,
                                'famous_names' => $match->famous_names
                            ];
                        })->toArray();
                    }
                }
            }

            // Process DOB for compound details
            if ($dob) {
                $dobParts = explode('-', $dob);
                if (count($dobParts) === 3) {
                    $day = ltrim($dobParts[0], '0');
                    $month = ltrim($dobParts[1], '0');
                    $year = ltrim($dobParts[2], '0');
                    $dobNonLeadingZero = "$year-$month-$day";
                }
            }
            $getBasicDetail = $this->getDOBCompound($dobNonLeadingZero);

            // Collect data for PDF
            $multiCountDetail = $result['multiDateCountDetails'];
            $dateDetail = $result['dateDetail'];
            $bestJobs = $this->collectBestJobsFromName($username);
            $pdfTemplate = $this->getPdfTemplateData();
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
                'Character Multiples' => $charAndMultiples,
                'alphabetIssues' => $alphabetIssues,
                'First Name Total' => $firstNameTotal,
                'First Name Single Digit' => $firstNameSingleDigit,
                'First Name Interpretation' => $firstNameInterpretation,
                'Full Name Total' => $fullNameTotal,
                'Full Name Single Digit' => $fullNameSingleDigit,
                'Full Name Interpretation' => $fullNameInterpretation,
                'full_name_details' => $fullNameDetails,
                'fullNameDigitInterpretation' => $fullNameDigitInterpretation,
                'firstNameDigitInterpretation' => $firstNameDigitInterpretation,
                'name_number_total' => $nameNumberTotalResult,
                'DOB' => $dob,
                'Multi-Date Count' => $multiCountDetail,
                'Date Detail' => $dateDetail,
                'Crystal Details' => $crystalDetails,
                'headerData' => $headerData,
                'footerData' => $footerData,
                'getBasicDetail' => $getBasicDetail,
                'bestJobs' => $bestJobs
            ];
            //   dd($data);
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
            $footerHtmlfirstandLast = view('pdf.static_page.first_page_footer', ['result' => $data])->render();

            // Render the common footer using Blade
            $footerHtmlCommon = view('pdf.static_page.footer', ['result' => $data])->render();
            // Render Blade views into HTML content
            $firstPageContent = view('pdf.static_page.greetPdf', ['result' => $data])->render(); // Greet PDF content
            $middlePagesContent = view('pdf.name_numerology.name_numerology_pdf', ['result' => $data])->render(); // Name Numerology content
            $lastPageContent = view('pdf.static_page.termAndConditionRemaining', ['result' => $data])->render(); // Free Gifts content
         
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
            $indexingContent = view('pdf.name_numerology.nameNumerologyIndex', ['result' => $data])->render();
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

     
            // Output the PDF (inline display in browser)
            $fileName = $result['username'] . '.pdf';
            return response($mpdf->Output($fileName, 'I'), 200)
                ->header('Content-Type', 'application/pdf');
        } catch (\Exception $e) {
            // Log the error and return an error response
            Log::error('PDF generation error: ' . $e->getMessage());
            return response()->json(['error' => 'Could not generate PDF. Please try again later.'], 500);
        }
    }
    // private function calculatePages($htmlContent)
    // {
    //     // Create a new mPDF instance
    //     $mpdf = new \Mpdf\Mpdf([
    //         'tempDir' => '/tmp',
    //         'format' => 'A4',
    //         'margin_left' => 0,
    //         'margin_right' => 0,
    //         'margin_top' => 20,
    //         'margin_bottom' => 70, // Ensure space for footer
    //     ]);
    
    //     // Write the HTML content to mPDF
    //     $mpdf->WriteHTML($htmlContent);
    
    //     // Get the total number of pages after writing the content
    //     $pageCount = $mpdf->page;
    
    //     // Clean up and close the mPDF instance
    //     $mpdf->Output('', 'S'); // This prevents output to the browser and allows cleanup
    
    //     return $pageCount;
    // }
    

    public function calculateNumerology(Request $request)
    {
        try {
            // Fetch user data with payment status as 'success'
            $getUserData = NameNumerology::where('payment_status', 'success')
                ->latest('created_at')
                ->first(['first_name', 'last_name', 'dob', 'id']);

            if (!$getUserData) {
                throw new \Exception('No user data found with successful payment.');
            }

            $firstName = $getUserData->first_name;
            $lastName = $getUserData->last_name;
            $dob = $getUserData->dob;


            if ($dob) {
                // Create a Carbon instance and format the date
                $dobFormatted = Carbon::createFromFormat('Y-m-d', $dob)->format('d-m-Y');

                // Split the formatted date into components
                list($day, $month, $year) = explode('-', $dobFormatted);

                // Remove leading zeros
                $nonLeadingZero = implode('-', [
                    ltrim($day, '0'),    // Remove leading zeros from day
                    ltrim($month, '0'),  // Remove leading zeros from month
                    $year                 // Year does not require leading zero removal
                ]);
            } else {
                throw new \Exception('Invalid or missing date of birth.');
            }

            $id = $getUserData->id;

            // Calculate totals for first name and full name
            $firstNameTotal = $this->calculateNameTotal($firstName);
            $firstNameSingleDigit = $this->reduceToSingleDigit($firstNameTotal);

            $fullName = $firstName . $lastName;
            $fullNameTotal = $this->calculateNameTotal($fullName);
            $fullNameSingleDigit = $this->reduceToSingleDigit($fullNameTotal);

            // Interpretations with special message check
            $firstNameInterpretation = $this->interpretNumber($firstNameSingleDigit, $firstNameTotal, $dob);
            $fullNameInterpretation = $this->interpretNumber($fullNameSingleDigit, $fullNameTotal, $dob);

            $firstNameDigitInterpretation = $this->interpretSingleDigit($firstNameSingleDigit, $firstNameTotal, $dob);
            $fullNameDigitInterpretation = $this->interpretSingleDigit($fullNameSingleDigit, $fullNameTotal, $dob);

            // Fetch character details for full name
            $fullNameDetails = $this->getCharacterDetailsForName($fullName);

            // Call getMultiDateCount to get DOB related numerology details
            $multiDateCountDetails = $this->getMultiDateCount($nonLeadingZero);
            $dateDetail = $this->getDateDetails($dob);

            // Prepare result data
            $result = [
                'id' => $id,
                'firstName' => $firstName,
                'lastName' => $lastName,
                'username' => $firstName . ' ' . $lastName,
                'first_name_total' => $firstNameTotal,
                'first_name_single_digit' => $firstNameSingleDigit,
                'full_name_total' => $fullNameTotal,
                'full_name_single_digit' => $fullNameSingleDigit,
                'first_name_interpretation' => $firstNameInterpretation,
                'full_name_interpretation' => $fullNameInterpretation,
                'full_name_details' => $fullNameDetails,
                'firstNameDigitInterpretation' => $firstNameDigitInterpretation,
                'fullNameDigitInterpretation' => $fullNameDigitInterpretation,
                'dob' => $dobFormatted,
                'multiDateCountDetails' => $multiDateCountDetails,
                'dateDetail' => $dateDetail
            ];

            // Generate and download the report PDF
            $downloadReport = $this->downloadPDF($result);
        } catch (\Exception $e) {
            // Log the error message
            Log::error('Error in calculateNumerology: ' . $e->getMessage(), [
                'request_data' => $request->all(),
                'user_data' => $getUserData ?? null,
            ]);

            // Optionally, return an error response or view with a user-friendly message
            return response()->json([
                'error' => 'An error occurred while calculating the numerology report. Please try again later.',
            ], 500);
        }
    }
}
