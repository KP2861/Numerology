<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class MobileNumerologyController extends Controller
{
    public function showMobileForm()
    {
        return view('numerology.mobile_numerology_form');
    }

    public function processMobileForm(Request $request)
    {
        $request->validate([
            'mobile_number' => 'required|digits:10'
        ]);

        $mobileNumber = $request->input('mobile_number');

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
        // Placeholder for predefined data retrieval
        $data = [
            '95' => [
                'type' => 'Neutral', 
                'message' => 'Destroy Relationship Through Bad Speech, Person Opt For Science Or Commerce Stream'
            ],
            '57' => [
                'type' => 'Benefic', 
                'message' => 'Speaker, Writer, Public Relation, Good Expressive Person, Lot Of Person Comes To Them For Advice'
            ],
            '74' => [
                'type' => 'Benefic', 
                'message' => 'Honest, Brilliant, Gives Importance Of Integrity, Rahu-Ketu Combo'
            ],
            '41' => [
                'type' => 'Melefic', 
                'message' => 'A Person May Be Drawn To Loan Obligations, Legal Notices, Health Problems, Diligence, And Toughness Numbers.'
            ],
            '18' => [
                'type' => 'Melefic', 
                'message' => '(Strongly Negative) Spouse Health Concerns, Comprehending Father And Son Issues, Government-Related Issues, And Frequent Work Changes'
            ],
            '82' => [
                'type' => 'Melefic', 
                'message' => 'A Person With A Respectable Income, Excessive Medical And Hospital Expenses, Two Family Marriages, And A Desire To Keep Oneself Safe From Harmful Company Vish Yog'
            ],
            '22' => [
                'type' => 'Melefic', 
                'message' => 'Mood Swing, Depression, Too Much Emotional, BP Problem, If Name Starting With B,K, R Then 100% Emotional Issue'
            ],
            
            '0' => [
                'type' => 'Multiple count',
                'message' => 'Arash Se Farsh Tak'
            ],
            '1' => [
                'type' => 'Multiple count',
                'message' => 'Ego, Attitude Attractive'
            ],
            '2' => [
                'type' => 'Multiple count',
                'message' => 'Mood Swing-by Issue, Intuition'
            ],
            '3' => [
                'type' => 'Multiple count',
                'message' => 'Over Trust Nature, Hungry For Knowledge, Story Teller'
            ],
            '4' => [
                'type' => 'Multiple count',
                'message' => 'Digestive Issue, Delay, Frequent Change In Life'
            ],
            '5' => [
                'type' => 'Multiple count',
                'message' => 'Very Good For Business'
            ],
            '6' => [
                'type' => 'Multiple count',
                'message' => 'Clever, Luxury, Travel, Always Complain'
            ],
            '7' => [
                'type' => 'Multiple count',
                'message' => 'Relationship Issues, Health Sector, Spirituality, Over Thinking'
            ],
            '8' => [
                'type' => 'Multiple count',
                'message' => 'All Responsibilities Of Family'
            ],
            '9' => [
                'type' => 'Multiple count',
                'message' => 'Good For Rough & Tough Person, Blood Pressure, Strong'
            ],
        ];
        
        

        $result = [];
        foreach ($combinations as $combination) {
            $result[$combination] = $data[$combination] ?? ['type' => 'Unknown', 'message' => 'No data'];
        }

        return $result;
    }

    private function evaluateResults($singleDigit, $total, $combinationData)
    {
        $messages = [
            1 => 'You Are At Good Communicating And You Are Very Intelligent And Wise Person.',
            // Add messages for other single digits
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
