<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class BusinessNumerologyController extends Controller
{
    public function showForm()
    {
        return view('numerology.business_numerology_form');
    }

    public function calculate(Request $request)
    {
        $request->validate([
            'partner_names.*' => 'required|string',
            'dob.*' => 'required|date_format:Y-m-d'
        ]);

        $partners = $request->input('partner_names');
        $dobs = $request->input('dob');
        $currentDate = Carbon::now();

        $results = [];
        foreach ($partners as $index => $partnerName) {
            $fullNameTotal = $this->calculateNumerology($partnerName);
            $fullNameSingleDigit = $this->reduceToSingleDigit($fullNameTotal);

            $dob = Carbon::parse($dobs[$index]);
            $personalYear = $this->calculatePersonalYear($dob, $currentDate);
            $personalMonth = $this->calculatePersonalMonth($personalYear, $currentDate);
            $personalDay = $this->calculatePersonalDay($personalMonth, $currentDate);

            $dasha = $this->getDasha($dob);

            $results[] = [
                'name' => $partnerName,
                'dob' => $dobs[$index],
                'full_name_total' => $fullNameTotal,
                'full_name_single_digit' => $fullNameSingleDigit,
                'personal_year' => $personalYear,
                'personal_month' => $personalMonth,
                'personal_day' => $personalDay,
                'dasha' => $dasha
            ];
        }

        return view('numerology.business_numerology_result', ['results' => $results]);
    }

    private function calculateNumerology($name)
    {
        $conversionTable = [
            'A' => 1, 'I' => 1, 'J' => 1, 'Q' => 1, 'Y' => 1,
            'B' => 2, 'K' => 2, 'R' => 2,
            'C' => 3, 'G' => 3, 'L' => 3, 'S' => 3,
            'D' => 4, 'M' => 4, 'T' => 4,
            'E' => 5, 'H' => 5, 'N' => 5, 'X' => 5,
            'U' => 6, 'V' => 6, 'W' => 6,
            'O' => 7, 'Z' => 7,
            'F' => 8, 'P' => 8
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

    private function getDasha($dob)
    {
        $year = $dob->year;
        $dashaTable = [
            1986 => ['owner' => 'GURU', 'next' => 3],
            1989 => ['owner' => 'RAHU', 'next' => 4],
            1993 => ['owner' => 'BUDH', 'next' => 5],
            1998 => ['owner' => 'SHUKRA', 'next' => 6],
            2004 => ['owner' => 'KETU', 'next' => 7],
            2011 => ['owner' => 'SHANI', 'next' => 8],
            2019 => ['owner' => 'MANGAL', 'next' => 9],
            2028 => ['owner' => 'SUYRA', 'next' => 1],
            2029 => ['owner' => 'CHANDRA', 'next' => 2],
            2031 => ['owner' => 'GURU', 'next' => 3],
            2034 => ['owner' => 'RAHU', 'next' => 4],
            2038 => ['owner' => 'BUDH', 'next' => 5],
            2043 => ['owner' => 'SHUKRA', 'next' => 6],
            2049 => ['owner' => 'KETU', 'next' => 7],
            2056 => ['owner' => 'SHANI', 'next' => 8],
            2064 => ['owner' => 'MANGAL', 'next' => 9],
            2073 => ['owner' => 'SUYRA', 'next' => 1],
            2074 => ['owner' => 'CHANDRA', 'next' => 2],
            2076 => ['owner' => 'GURU', 'next' => 3],
            2079 => ['owner' => 'RAHU', 'next' => 4],
        ];

        $dasha = [];
        foreach ($dashaTable as $startYear => $data) {
            if ($year >= $startYear) {
                $endYear = $startYear + $data['next'];
                $dasha[] = [
                    'start_year' => $startYear,
                    'end_year' => $endYear,
                    'owner' => $data['owner']
                ];
            }
        }

        return $dasha;
    }
}
