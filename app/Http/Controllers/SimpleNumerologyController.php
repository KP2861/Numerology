<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SimpleNumerologyController extends Controller
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

        // Parse and extract date components
        $dob = \DateTime::createFromFormat('d-m-Y', $validated['dob']);
        $day = $dob->format('d');
        $month = $dob->format('m');
        $year = $dob->format('Y');

        // Calculate King number
        $king = array_sum(str_split($day));
        $king = $this->reduceToSingleDigit($king);

        // Calculate Queen number
        $total = array_sum(str_split($day . $month . $year));
        $queen = $this->reduceToSingleDigit($total);

        // Calculate Kua number based on gender
        $totalYear = array_sum(str_split($year));
        $kua = $this->calculateKua($totalYear, $validated['gender']);

        // Concatenate values for Loshu Grid
        $concatenated = "{$king}{$queen}{$day}{$month}{$year}";

        // Calculate Loshu Grid digit counts
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
        // Reduce number to a single digit
        while ($number > 9) {
            $number = array_sum(str_split($number));
        }
        return $number;
    }

    private function calculateKua($totalYear, $gender)
    {
        // Calculate Kua number based on gender
        $kua = ($gender === 'male') ? ($totalYear - 11) : ($totalYear + 4);
        return $this->reduceToSingleDigit($kua);
    }

    private function getLoshuGridDigitCount($concatenated)
    {
        // Initialize digit count array
        $counts = array_fill(1, 9, 0);

        // Count occurrences of each digit
        foreach (str_split($concatenated) as $digit) {
            if (isset($counts[$digit])) {
                $counts[$digit]++;
            }
        }

        return $counts;
    }
}
