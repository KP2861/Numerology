<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use Illuminate\Support\Facades\DB;
use App\Models\PhoneNumerology;

class MobileNumerologyController extends Controller
{
    public function showMobileForm()
    {
        return view('numerology.mobile_numerology_form');
    }

    public function processMobileForm(Request $request)
    {
      
        $mobileNumber = PhoneNumerology::latest()->pluck('phone_number')->first();
        
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

        // Step 6: Placeholder for predefined table data
        $combinationData = $this->getCombinationData($combinations);

        // Step 7 & 8: Evaluate and format results
        $result = $this->evaluateResults($singleDigit, $total, $combinationData);

        if ($request->has('download')) {
            $pdf = PDF::loadView('numerology.mobile_numerology_pdf', compact('result'));
            return $pdf->download('numerology_report.pdf');
        }
       

        return view('numerology.mobile_numerology_result', ['result' => $result]);
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
    


    private function evaluateResults($singleDigit, $total, $combinationData)
    {
        $messages = [
            1 => 'You are a natural leader with a strong will and independence. You thrive on challenges and are highly motivated.',
            2 => 'You are a peacemaker with a diplomatic nature. You value harmony and work well in collaborative environments.',
            3 => 'You are creative and expressive with a vibrant personality. You enjoy social interactions and are often the life of the party.',
            4 => 'You are practical and disciplined. You value stability and work hard to achieve your goals through methodical planning.',
            5 => 'You are adventurous and dynamic, with a love for freedom. You thrive on change and enjoy exploring new opportunities.',
            6 => 'You are nurturing and responsible. You have a strong sense of duty and are dedicated to family and community.',
            7 => 'You are introspective and analytical. You seek knowledge and have a deep understanding of spiritual and intellectual matters.',
            8 => 'You are ambitious and determined. You have a strong drive for success and are focused on achieving material and professional goals.',
            9 => 'You are compassionate and humanitarian. You are driven by a desire to help others and make a positive impact in the world.',
        ];

        $result = [
            'Mobile Number' => $singleDigit,
            'Total' => $total,
            'Single Digit' => $singleDigit,
            'Personalized Message' => $messages[$singleDigit] ?? 'No message available.',
            'Combinations' => $combinationData,
        ];

        return $result;
    }

    public function downloadPDF(Request $request)
    {
        $mobileNumber = $request->input('mobile_number');

        // Assuming $result is generated based on the mobile number
        $result = [
            'Mobile Number' => $mobileNumber,
            'Total' => 15, // Example data
            'Single Digit' => 6, // Example data
            'Personalized Message' => 'This is a personalized message.', // Example data
            'Combinations' => [
                'Combination 1' => ['type' => 'Benefic', 'message' => 'Good for you.'],
                'Combination 2' => ['type' => 'Melefic', 'message' => 'Avoid these dates.'],
            ],
        ];

        $pdf = PDF::loadView('numerology.mobile_numerology_pdf', ['result' => $result]);

        return $pdf->download('numerology_result.pdf'); // Downloads the PDF
    }
}
