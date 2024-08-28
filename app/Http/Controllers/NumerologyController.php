<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NumerologyController extends Controller
{
    public function showForm()
    {
        return view('numerology.form');
    }

    public function calculate(Request $request)
    {
        $validated = $request->validate([
            'dob' => 'required|date_format:d-m-Y',
            'gender' => 'required|in:male,female',
        ]);

        $dob = \DateTime::createFromFormat('d-m-Y', $validated['dob']);
        $day = $dob->format('d');
        $month = $dob->format('m');
        $year = $dob->format('Y');

        // Calculate King
        $king = array_sum(str_split($day));
        $king = $this->reduceToSingleDigit($king);

        // Calculate Queen
        $total = array_sum(str_split($day . $month . $year));
        $queen = $this->reduceToSingleDigit($total);

        // Calculate Kua
        $totalYear = array_sum(str_split($year));
        $kua = $this->calculateKua($totalYear, $request->input('gender'));

        // Step 1: Concatenate values
        $concatenated = "{$king}{$queen}{$day}{$month}{$year}";

        // Step 2: Loshu Grid Digit Count
        $loshuGrid = $this->getLoshuGridDigitCount($concatenated);

        return view('numerology.result', [
            'king' => $king,
            'queen' => $queen,
            'kua' => $kua,
            'concatenated' => $concatenated,
            'loshuGrid' => $loshuGrid
        ]);
    }

    private function reduceToSingleDigit($number)
    {
        while ($number > 9) {
            $number = array_sum(str_split($number));
        }
        return $number;
    }

    private function calculateKua($totalYear, $gender)
    {
        if ($gender === 'male') {
            $kua = $totalYear - 11;
        } else {
            $kua = $totalYear + 4;
        }
        return $this->reduceToSingleDigit($kua);
    }

    private function getLoshuGridDigitCount($concatenated)
    {
        $counts = array_fill(1, 9, 0);

        foreach (str_split($concatenated) as $digit) {
            if (isset($counts[$digit])) {
                $counts[$digit]++;
            }
        }

        return $counts;
    }
}
