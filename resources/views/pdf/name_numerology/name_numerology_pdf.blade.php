@extends('pdf.name_numerology.nameNumerologyLayout')

@section('pdfNameContent')
    @php
        $imagePath = public_path('frontend/assests/images/pdf/ganpati-ji-min.png');
        $raviMundraImagePath = public_path('frontend/assests/images/pdf/ravi-mundrra-img-min.png');
        $imageWatermark = public_path('frontend/assests/images/pdf/ravi-mundrra-watermark2.png');

        // Read the file contents and encode them
        $imageData = base64_encode(file_get_contents($imagePath));
        $raviMundrraImageData = base64_encode(file_get_contents($raviMundraImagePath));
        $raviMundrraWatermark = base64_encode(file_get_contents($imageWatermark));

        // Format the images as base64 data URIs
        $imageSrc = 'data:image/png;base64,' . $imageData;
        $raviMundrraImageSrc = 'data:image/png;base64,' . $raviMundrraImageData;
        $raviMundrraWatermarkSrc = 'data:image/png;base64,' . $raviMundrraWatermark;

    @endphp
    @php
        $details = $result['name_number_total']['details'] ?? 'N/A';
        $detailItems = $details !== 'N/A' ? explode('.', $details) : [];
    @endphp
    {{-- <div
        style="background-image: url('{{ $backgroundPdfSrc }}'); background-size: cover; background-position: center; margin:auto; width:100%; height:100%;"> --}}
    <div id="#name-predictions" style="height: 780px; width:70%; margin:0 auto;  ">
        <a name="predictions"></a>
        <table style="width: 100%">
            <thead>
                <tr>
                    <th style="width:100%; padding-bottom:20px;">
                        <h2 style="font-size:28px; text-align: center; color:#8B6C56; font-weight:700; ">
                            !! ॐ गं गणपतये नमः !!
                        </h2>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="padding: 0px 0 0 0">
                        <div class="sub-heading " style="font-size:18px;">
                            Hello <span style=" font-weight:bold; color:#EC4400"> {{ $result['Username'] }} Ji</span>,
                        </div>
                    </td>
                </tr>
                <tr>
                    <td style="padding: 10px 0">
                        <div class="sub-heading " style="font-size:16px;">
                            {{-- How Your Name Impacts Your Life: Is It Lucky for You or Does It Need a Change --}}
                            How Your Name Shapes Your Destiny: Is It a Source of Luck or Is It Time for a Change/Correct ?
                        </div>
                    </td>
                </tr>
                <!-- First Name Analysis Section -->
          
                <tr>
                    <td style="padding:0px 0">
                        <table
                            style="border: 1px solid #000; border-collapse: collapse; margin-bottom:5px; width:100%; height:100%;"
                            class="mobile-table">
                            <thead>
                                <tr>
                                    @if (strlen($result['First Name Interpretation']) <= 10)
                                        <th style="text-align: center; border: 1px solid #000; border-collapse: collapse; font-size:16px; padding:5px"
                                            colspan="3">
                                            Total of First Name : <span
                                                style="color:#EC4400">{{ $result['FirstName'] }}</span>
                                        </th>
                                    @else
                                        <th style="text-align: center; border: 1px solid #000; border-collapse: collapse; font-size:16px; padding:5px"
                                            colspan="2">
                                            Total of First Name : <span
                                            style="color:#EC4400">{{ $result['FirstName'] }}</span>
                                        </th>
                                    @endif

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="border:1px solid #000; text-align:start; font-size:14px; padding:5px">
                                        First Name Total
                                    </td>
                                    <td style="border:1px solid #000; text-align:center; font-size:14px; padding:5px">
                                        {{ $result['First Name Total'] }}
                                    </td>
                                    @if (strlen($result['First Name Interpretation']) <= 10)
                                        <!-- If the interpretation is more than 15 characters, do not use rowspan -->
                                        <td style="border:1px solid #000; text-align:center; font-size:14px;"
                                            rowspan="2">
                                            {{ $result['First Name Interpretation'] }}
                                        </td>
                                    @endif
                                </tr>

                                <tr>
                                    <td style="border:1px solid #000; text-align:start; padding:5px; font-size:14px;">
                                        First Name Compound
                                    </td>
                                    <td style="border:1px solid #000; text-align:center; padding:5px; font-size:14px;">
                                        {{ $result['First Name Single Digit'] }}
                                    </td>
                                </tr>

                                @if (strlen($result['First Name Interpretation']) > 10)
                                    <!-- If the interpretation is more than 15 characters, do not use rowspan -->
                                    <tr style="border:1px solid #000; text-align:center; font-size:14px; ">
                                        <td style="border:1px solid #000; text-align:center; font-size:14px;padding:5px"
                                            colspan="2">
                                            {{ $result['First Name Interpretation'] }}
                                        </td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </td>

                <tr>
                <!-- Full Name Analysis Section -->
                <tr>
                    <td style="padding:0px 0">
                        <table
                            style="border: 1px solid #000; border-collapse: collapse; margin-bottom:5px; width:100%; height:100%;"
                            class="mobile-table">
                            <thead>
                                <tr>
                                    @if (strlen($result['Full Name Interpretation']) <= 10)
                                        <th style="text-align: center; border: 1px solid #000; border-collapse: collapse; font-size:16px; padding:5px"
                                            colspan="3">
                                            Total of Full Name : <span
                                                style="color:#EC4400">{{ $result['Username'] }}</span>
                                        </th>
                                    @else
                                        <th style="text-align: center; border: 1px solid #000; border-collapse: collapse; font-size:16px; padding:5px"
                                            colspan="2">
                                            Total of Full Name :<span
                                            style="color:#EC4400">{{ $result['Username'] }}</span>
                                        </th>
                                    @endif

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="border:1px solid #000; text-align:start; font-size:14px; padding:5px">
                                        Full Name Total
                                    </td>
                                    <td style="border:1px solid #000; text-align:center; font-size:14px; padding:5px">
                                        {{ $result['Full Name Total'] }}
                                    </td>
                                    @if (strlen($result['Full Name Interpretation']) <= 10)
                                        <!-- If the interpretation is more than 15 characters, do not use rowspan -->
                                        <td style="border:1px solid #000; text-align:center; font-size:14px;"
                                            rowspan="2">
                                            {{ $result['Full Name Interpretation'] }}
                                        </td>
                                    @endif
                                </tr>

                                <tr>
                                    <td style="border:1px solid #000; text-align:start; padding:5px; font-size:14px;">
                                        Full Name Compound
                                    </td>
                                    <td style="border:1px solid #000; text-align:center; padding:5px; font-size:14px;">
                                        {{ $result['Full Name Single Digit'] }}
                                    </td>
                                </tr>

                                @if (strlen($result['Full Name Interpretation']) > 10)
                                    <!-- If the interpretation is more than 15 characters, do not use rowspan -->
                                    <tr style="border:1px solid #000; text-align:center; font-size:14px; ">
                                        <td style="border:1px solid #000; text-align:center; font-size:14px;padding:5px"
                                            colspan="2">
                                            {{ $result['Full Name Interpretation'] }}
                                        </td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </td>

                <tr>
                    <td style="padding:10px 0">
                        <table
                            style="border: 1px solid #000; border-collapse: collapse; margin-bottom:10px; width:100%; height:100%;"
                            class="mobile-table">

                            <tbody>
                                <tr>
                                    <td
                                        style="border:1px solid #000; border-collapse: collapse; text-align:start; font-size:14px; padding:5px">
                                        First
                                        Name
                                        number :<span> {{ $result['FirstName'] }}</span> </td>
                                    <td
                                        style="border:1px solid #000; border-collapse: collapse; text-align:start; font-size:14px; padding:5px">
                                        Mulank ,
                                        Bhagyank
                                    </td>
                                    <td
                                        style="border:1px solid #000; border-collapse: collapse; text-align:start; font-size:14px; padding:5px">
                                        {{ $result['firstNameDigitInterpretation'] }}</td>
                                </tr>

                                <tr>
                                    <td
                                        style="border:1px solid #000; border-collapse: collapse; text-align:start; font-size:14px; padding:5px">
                                        Full
                                        Name number :<span> {{ $result['Username'] }}</span>
                                    </td>
                                    <td
                                        style="border:1px solid #000; border-collapse: collapse; text-align:start; font-size:14px; padding:5px">
                                        Mulank ,
                                        Bhagyank
                                    </td>
                                    <td
                                        style="border:1px solid #000; border-collapse: collapse; text-align:start; font-size:14px; padding:5px">
                                        {{ $result['fullNameDigitInterpretation'] }}</td>
                                </tr>
                            </tbody>

                        </table>
                    </td>
                </tr>

                <tr>
                    <td style="font-size: 14px">Your First Name Number {{ $result['firstNameDigitInterpretation'] }} with
                        <span style="font-weight: bold">
                            Mulank &
                            Bhagyank.</span> Full name to be worked.
                    </td>
                </tr>

                <tr>
                    <td style="padding: 15px 0 5px 0">
                        <div style="font-size: 16px">
                            What Your Name Reveals Through <span style=" font-weight:bold"> NAME NUMEROLOGY?</span>
                        </div>
                    </td>
                </tr>



                <!-- Optional Footer -->
                {{-- <tr>
                    <td style="font-size: 18px; text-align:center; padding-top: 20px;">
                        Thank you for choosing our service. May you continue on a path of success and prosperity!
                    </td>
                </tr> --}}

                @if (isset($result['name_number_total']))
                    <tr>
                        <td style="padding: 3px 0; font-size:14px;">
                            <strong>Rulling planet:</strong>
                            {{ $result['name_number_total']['rulling'] ?? 'N/A' }}<br>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 3px 0; font-size:14px;">
                            <strong>Contributing Planet:</strong>
                            {{ $result['name_number_total']['contributing_planet'] ?? 'N/A' }}<br>
                        </td>
                    </tr>

                    <tr>
                        <td style="padding: 3px 0; font-size:14px">
                            <strong>Your Business Insights:</strong>
                            {{ $result['name_number_total']['for_business'] ?? 'N/A' }}<br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <table style="width: 100%">
                                <tbody>
                                    <tr>
                                        <td
                                            style="padding: 3px 0; font-size:14px; color: #EC4400; font-weight:bold; font-size:18px">
                                            <strong>Your Full Name Total Details ( {{ $result['Full Name Total'] }}
                                                ):</strong>
                                        </td>
                                    </tr>
                                    @if (!empty($detailItems))
                                        @foreach ($detailItems as $item)
                                            @if (trim($item) !== '')
                                                <tr>
                                                    <td style="padding: 0 0 5px 0">
                                                        <ul>
                                                            <li>{{ trim($item) }}</li>
                                                        </ul>

                                                    </td>
                                                </tr>
                                            @endif
                                        @endforeach
                                    @else
                                        N/A
                                    @endif

                                </tbody>
                            </table>
                        </td>
                    </tr>
                @else
                    <tr>
                        <td>
                            No data available for this number.
                        </td>
                    </tr>
                @endif

                {{-- character and multiple --}}
                @if (isset($result['Character Multiples']) && !empty($result['Character Multiples']))
                    <tr>
                        <td style="padding: 20px 0 0 0 ">
                            <div
                                style="width:100%;color: #000; margin-bottom:30px; padding-bottom:30px; font-weight:bold; font-size:18px">
                                Discover What Your Name’s Alphabet Reveals About Your Life Path and Challenges!
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 5px 0 0 0;  width:100%; color: #000; font-size:14px">
                            <p>Your name holds powerful clues about your destiny. Each letter comes with its own vibration,
                                influencing your health, relationships, and career. Find out what your name says about you
                                and how to harness its energy for a successful life!</p>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 10px 0 0 0;  width:100%; color: #000; font-size:14px">
                            <strong>Your Alphabet:</strong> <span>
                                {{ $result['Character Multiples']['alphabet'] }}
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 10px 0 0 0;  width:100%; color: #000; font-size:14px">
                            <strong>Personal Traits Shaped by Your Name:</strong>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 0px 0 0 0;  width:100%; color: #000; font-size:14px">
                            <p> {{ $result['Character Multiples']['personal_traits'] }}</p>

                        </td>
                    </tr>

                    <tr>
                        <td style="padding: 10px 0 0 0;  width:100%; color: #000; font-size:14px">
                            <strong>If You Have Multiple Occurrences in Your Name:</strong>
                        </td>
                    </tr>
                    <tr>

                        <td style="padding: 0px 0 0 0;  width:100%; color: #000; font-size:14px">
                            <p>
                                {{ $result['Character Multiples']['multiple_occurrences'] }}</p>

                        </td>

                    </tr>
                    <tr>
                        <td style="padding: 10px 0 0 0;  width:100%; color: #000; font-size:14px; font-weight:bold">
                            <strong>Power Remedies to Unlock Your Full Potential:</strong>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 0px 0 0 0;  width:100%; color: #000; font-size:14px">
                            <p>
                                {{ $result['Character Multiples']['power_remedies'] }}</p>

                        </td>
                    </tr>
                @endif

                {{-- Word and combinations --}}
                @if (isset($result['Name Details']) && !empty($result['Name Details']))

                    <tr>
                        <td>
                            <table style="width: 100%">
                                <tbody>
                                    {{-- Word and combinations --}}
                                    @if (isset($result['Name Details']) && !empty($result['Name Details']))
                                        <tr>
                                            <td
                                                style="padding: 20px 0 0 0; width:100%;color: #000; font-weight:bold; font-size:18px">
                                                Unlock the Hidden Energy in Your Name: Does Your Name Hold the Key to
                                                Wealth,
                                                Success,
                                                or
                                                Struggles?

                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 5px 0 0 0;  width:100%; color: #000; font-size:14px; ">
                                                Discover how the sound vibrations in your name shape your destiny! Whether
                                                you're
                                                curious about
                                                your
                                                financial future, personal growth, or potential challenges, let your name
                                                reveal
                                                its
                                                secrets.
                                            </td>
                                        </tr>
                                        @foreach ($result['Name Details']['full_name_matches'] as $match)
                                            <tr>
                                                <td
                                                    style="padding: 10px 0 0 0;  width:100%; color: #000; font-size:14px; font-weight:bold">
                                                    <h4>Your Name Sound:</h4> <span
                                                        style="font-weight: normal">{{ $match['name'] ?? 'N/A' }}</span>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td
                                                    style="padding: 10px 0 0 0;  width:100%; color: #000; font-size:14px; font-weight:bold">
                                                    <h4>Positive or Negative Energy? (Benefic/Malefic/Natural)</h4>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>{{ $match['type'] ?? 'N/A' }}</p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td
                                                    style="padding: 10px 0 0 0;  width:100%; color: #000; font-size:14px; font-weight:bold">
                                                    <h4>Life Challenges or Success You Might Experience:</h4>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>{{ $match['issues_faced_in_life'] ?? 'N/A' }}</p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td
                                                    style="padding: 10px 0 0 0;  width:100%; color: #000; font-size:14px; font-weight:bold">
                                                    <h4>What Does This Mean for You?:</h4>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>{{ $match['details'] ?? 'N/A' }}</p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td
                                                    style="padding: 10px 0 0 0;  width:100%; color: #000; font-size:14px; font-weight:bold">
                                                    <h4>Famous Names (Do You Share Their Energy?)</h4>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>{{ $match['famous_names'] ?? 'N/A' }}</p>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </td>
                    </tr>
                @endif



                {{-- alphabetIssues --}}
                @if (isset($result['alphabetIssues']) && !empty($result['alphabetIssues']))
                    <tr>
                        <td style="padding:20px 0 0 0">
                            <table style="width: 100%">
                                <tbody>
                                    <tr>
                                        <td
                                            style="padding: 20px 0 0 0; width:100%;color: #000; font-weight:bold; font-size:18px">
                                            Alphabet Issues for {{ $result['alphabetIssues']['alphabet'] }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td
                                            style="padding: 10px 0 0 0;  width:100%; color: #000; font-size:14px; font-weight:bold">
                                            Details:
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 0px 0 0 0;  width:100%; color: #000; font-size:14px;">
                                            {{ $result['alphabetIssues']['details'] ?? 'N/A' }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td
                                            style="padding: 10px 0 0 0;  width:100%; color: #000; font-size:14px; font-weight:bold">
                                            Issues in Life:
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 0px 0 0 0;  width:100%; color: #000; font-size:14px;">
                                            {{ $result['alphabetIssues']['issues_in_life'] ?? 'N/A' }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td
                                            style="padding: 10px 0 0 0;  width:100%; color: #000; font-size:14px; font-weight:bold">
                                            Remedies:
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 0px 0 0 0;  width:100%; color: #000; font-size:14px;">
                                            {{ $result['alphabetIssues']['remedies'] ?? 'N/A' }}
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                @endif
                {{--                 
             <tr>
                    <td style="padding:10px 0">
                        <table style="border: 1px solid #000; border-collapse: collapse; width:100%; height:100%;"
                            class="mobile-table">
                            <thead>
                                <tr>
                                    <th style="text-align: center; border: 1px solid #000; border-collapse: collapse; font-size:16px"
                                        colspan="2">
                                        Additional Information for {{ $result['LastName'] }}
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (isset($result['Name Details']['last_name_matches']) && count($result['Name Details']['first_name_matches']) > 0)
                                    @foreach ($result['Name Details']['last_name_matches'] as $match)
                                        <tr>
                                            <td style="border:1px solid #000; text-align:center; font-size:14px;">
                                                Name: {{ $match['name'] ?? 'N/A' }}
                                            </td>
                                            <td style="border:1px solid #000; text-align:center; font-size:14px;">
                                                Type: {{ $match['type'] ?? 'N/A' }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="border:1px solid #000; text-align:center; font-size:14px;">
                                                Issues Faced: {{ $match['issues_faced_in_life'] ?? 'N/A' }}
                                            </td>
                                            <td style="border:1px solid #000; text-align:center; font-size:14px;">
                                                Details: {{ $match['details'] ?? 'N/A' }}
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="2"
                                            style="border:1px solid #000; text-align:center; font-size:14px;">
                                            No matching data available.
                                        </td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </td>
                </tr> --}}



            </tbody>


        </table>




        {{-- <table
            style="border: 1px solid #000; border-collapse: collapse; margin-bottom:10px; width:100%; height:100%; margin-top:30px">
            <tbody>
                <tr>
                    <td>
                        D.O.B Detail
                    </td>
                </tr>
                <tr>
                    <td style="border:1px solid #000; text-align:left; font-size:18px; padding:5px;">
                        Date of Birth:
                    </td>
                    <td style="border:1px solid #000; text-align:left; font-size:18px; padding:5px;">
                        {{ $result['DOB'] ?? 'N/A' }}
                    </td>
                </tr>
                <tr>
                    <td style="border:1px solid #000; text-align:left; font-size:18px; padding:5px;">
                        Date Detail: {{ $result['Date Detail']['date'] ?? 'N/A' }}
                    </td>
                    <td style="border:1px solid #000; text-align:left; font-size:18px; padding:5px;">
                        {{ $result['Date Detail']['dayDetail'] ?? 'N/A' }}

                    </td>
                </tr>
                <tr>
                    <td style="border:1px solid #000; text-align:left; font-size:18px; padding:5px;">
                        Date Specific Detail: {{ $result['Date Detail']['date'] ?? 'N/A' }}
                    </td>
                    <td style="border:1px solid #000; text-align:left; font-size:18px; padding:5px;">
                        @if (!empty($result['Date Detail']['daySpecificDetail']))
                            <ul style="padding-left: 20px; margin: 0;">
                                @foreach (explode('.', $result['Date Detail']['daySpecificDetail']) as $detail)
                                    @if (trim($detail) !== '')
                                        <li>{{ trim($detail) }}.</li>
                                    @endif
                                @endforeach
                            </ul>
                        @else
                            N/A
                        @endif
                    </td>
                </tr>

                <tr>
                    <td style="border:1px solid #000; text-align:left; font-size:18px; padding:5px;">
                        Date Compound Detail: {{ $result['Date Detail']['dateCompound'] ?? 'N/A' }}
                    </td>
                    <td style="border:1px solid #000; text-align:left; font-size:18px; padding:5px;">
                        Detail: {{ $result['Date Detail']['singleDigitDetail'] ?? 'N/A' }}
                    </td>
                </tr>
                <tr>
                    <td style="border:1px solid #000; text-align:left; font-size:18px; padding:5px;">
                        Date Compound SpecificDetail: {{ $result['Date Detail']['dateCompound'] ?? 'N/A' }}
                    </td>
                    <td style="border:1px solid #000; text-align:left; font-size:18px; padding:5px;">
                        {{ $result['Date Detail']['singleDigitDetail'] ?? 'N/A' }}
                    </td>
                </tr>
            </tbody>

        </table>

        <table
            style="border: 1px solid #000; border-collapse: collapse; margin-bottom:10px; width:100%; height:100%; margin-top:30px">
            <tbody>
                <tr>
                    <td style="border:1px solid #000; text-align:left; font-size:18px; padding:5px;">
                        Largest Digit:
                    </td>
                    <td style="border:1px solid #000; text-align:left; font-size:18px; padding:5px;">
                        {{ $result['Multi-Date Count']['largestDigit'] ?? 'N/A' }}
                    </td>
                </tr>
                <tr>
                    <td style="border:1px solid #000; text-align:left; font-size:18px; padding:5px;">
                        Max Count:
                    </td>
                    <td style="border:1px solid #000; text-align:left; font-size:18px; padding:5px;">
                        {{ $result['Multi-Date Count']['maxCount'] ?? 'N/A' }}
                    </td>
                </tr>
                <tr>
                    <td style="border:1px solid #000; text-align:left; font-size:18px; padding:5px;">
                        Trait:
                    </td>
                    <td style="border:1px solid #000; text-align:left; font-size:18px; padding:5px;">
                        {{ $result['Multi-Date Count']['largestDigitDetails']['trate'] ?? 'N/A' }}
                    </td>
                </tr>
                <tr>
                    <td style="border:1px solid #000; text-align:left; font-size:18px; padding:5px;">
                        Direction to Balance:
                    </td>
                    <td style="border:1px solid #000; text-align:left; font-size:18px; padding:5px;">
                        {{ $result['Multi-Date Count']['largestDigitDetails']['direction_to_balance'] ?? 'N/A' }}
                    </td>
                </tr>
                <tr>
                    <td style="border:1px solid #000; text-align:left; font-size:18px; padding:5px;">
                        Behaviour:
                    </td>
                    <td style="border:1px solid #000; text-align:left; font-size:18px; padding:5px;">
                        {{ $result['Multi-Date Count']['largestDigitDetails']['behaviour'] ?? 'N/A' }}
                    </td>
                </tr>
            </tbody>
        </table>

        <table
            style="border: 1px solid #000; border-collapse: collapse; margin-bottom:10px; width:100%; height:100%; margin-top:30px">
            <tbody>
                <tr>
                    <td style="border:1px solid #000; text-align:left; font-size:18px; padding:5px;">
                        Crystal
                    </td>
                    <td style="border:1px solid #000; text-align:left; font-size:18px; padding:5px;">
                        {{ $result['Crystal Details']['crystal'] ?? 'N/A' }}
                    </td>
                </tr>
                <tr>
                    <td style="border:1px solid #000; text-align:left; font-size:18px; padding:5px;">
                        Crystal Detail
                    </td>
                    <td style="border:1px solid #000; text-align:left; font-size:18px; padding:5px;">
                        {{ $result['Crystal Details']['details'] ?? 'N/A' }}
                    </td>
                </tr>
            </tbody>
        </table> --}}
    </div>
@endsection
