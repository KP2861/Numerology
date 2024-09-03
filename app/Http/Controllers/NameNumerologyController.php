<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NameNumerologyController extends Controller
{
    // Character to number mapping
    protected $characterConversion = [
        'A' => 1, 'I' => 1, 'J' => 1, 'Q' => 1, 'Y' => 1,
        'B' => 2, 'K' => 2, 'R' => 2,
        'C' => 3, 'G' => 3, 'L' => 3, 'S' => 3,
        'D' => 4, 'M' => 4, 'T' => 4,
        'E' => 5, 'H' => 5, 'N' => 5, 'X' => 5,
        'U' => 6, 'V' => 6, 'W' => 6,
        'O' => 7, 'Z' => 7,
        'F' => 8, 'P' => 8,
    ];

    // Lucky, Neutral, Avoid numbers
    protected $luckyNumbers = [1, 2, 3, 5];
    protected $neutralNumbers = [4, 7, 8, 9];
    protected $avoidNumbers = [6];

    // Special messages for specific totals
    protected $specialMessages = [
        32 => "Number 32 presents wisdom, and powers of the mother goddess (Mohini, Siddhi). The number has magical powers to sway the masses & get help from high positions. This number is good for people in advertising, marketing and PR. The person can also work under pressure. They come out with unique ideas & techniques even without prior experience. This potent & powerful number can make anyone a prominent person. This number is said to be the epitome of wisdom and intuition. They will attain high position in life & will be youthful in appearance even in old age."
    ];

    public function showForm()
    {
        return view('numerology.name_numerology_form');
    }

    public function calculateNumerology(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
        ]);

        $firstName = strtoupper($request->input('first_name'));
        $lastName = strtoupper($request->input('last_name'));

        // Calculate totals
        $firstNameTotal = $this->calculateNameTotal($firstName);
        $firstNameSingleDigit = $this->reduceToSingleDigit($firstNameTotal);

        $fullName = $firstName . $lastName;
        $fullNameTotal = $this->calculateNameTotal($fullName);
        $fullNameSingleDigit = $this->reduceToSingleDigit($fullNameTotal);

        // Interpretations
        $firstNameInterpretation = $this->interpretNumber($firstNameSingleDigit);
        $fullNameInterpretation = $this->interpretNumber($fullNameSingleDigit);

        return view('numerology.name_numerology_result', [
            'first_name_total' => $firstNameTotal,
            'first_name_single_digit' => $firstNameSingleDigit,
            'full_name_total' => $fullNameTotal,
            'full_name_single_digit' => $fullNameSingleDigit,
            'first_name_interpretation' => $firstNameInterpretation,
            'full_name_interpretation' => $fullNameInterpretation,
        ]);
    }

    private function calculateNameTotal($name)
    {
        $total = 0;
        foreach (str_split($name) as $char) {
            $total += $this->characterConversion[$char] ?? 0;
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

    private function interpretNumber($number)
    {
        if (isset($this->specialMessages[$number])) {
            return $this->specialMessages[$number];
        }

        if (in_array($number, $this->luckyNumbers)) {
            return 'Lucky';
        } elseif (in_array($number, $this->neutralNumbers)) {
            return 'Neutral';
        } elseif (in_array($number, $this->avoidNumbers)) {
            return 'Avoid';
        }

        return 'Unknown';
    }
}
