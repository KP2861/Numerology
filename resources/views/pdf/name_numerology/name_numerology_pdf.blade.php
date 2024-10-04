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
        <table style="width: 100%">
            <thead>
                <tr>
                    <th style="width:100%; padding-top:0px;">
                        <h2 style="font-size:28px; text-align: center; color:#8B6C56; font-weight:700; ">
                            !! ॐ गं गणपतये नमः !!
                        </h2>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="padding: 20px 0 0 0">
                        <div class="sub-heading " style="font-size:18px;">
                            Hello <span style=" font-weight:bold"> {{ $result['Username'] }} Ji</span>,
                        </div>
                    </td>
                </tr>
                <tr>
                    <td style="padding: 10px 0">
                        <div class="sub-heading " style="font-size:16px;">
                            How Your Name Impacts Your Life: Is It Lucky for You or Does It Need a Change
                        </div>
                    </td>
                </tr>
                <!-- First Name Analysis Section -->
                <tr>
                    <td style="padding:10px 0">
                        <table
                            style="border: 1px solid #000; border-collapse: collapse; margin-bottom:5px; width:100%; height:100%;"
                            class="mobile-table">
                            <thead>
                                <tr>
                                    <th style="text-align: center; border: 1px solid #000; border-collapse: collapse; font-size:16px"
                                        colspan="3">
                                        Total of First Name: {{ $result['FirstName'] }}
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="border:1px solid #000; text-align:start; font-size:14px">
                                       First Name Total
                                    </td>
                                    <td style="border:1px solid #000; text-align:center; font-size:14px">
                                        {{ $result['First Name Total'] }}
                                    </td>
                                    <td style="border:1px solid #000; text-align:center; font-size:14px;" rowspan="2">
                                        {{ $result['First Name Interpretation'] }}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="border:1px solid #000; text-align:start; font-size:14px">
                                        First Name Compound
                                    </td>
                                    <td style="border:1px solid #000; text-align:center; font-size:14px;">
                                        {{ $result['First Name Single Digit'] }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>

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
                                            Total of Full Name : <span>{{ $result['Username'] }}</span>
                                        </th>
                                    @else
                                        <th style="text-align: center; border: 1px solid #000; border-collapse: collapse; font-size:16px; padding:5px"
                                            colspan="2">
                                            Total of Full Name : <span>{{ $result['Username'] }}</span>
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
                                        <td style="border:1px solid #000; text-align:center; font-size:14px;padding:5px;"
                                            rowspan="2">
                                            {{ $result['Full Name Interpretation'] }}
                                        </td>
                                    @endif
                                </tr>

                                <tr>
                                    <td style="border:1px solid #000; text-align:start; padding:5px; font-size:14px">
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
                    <td style="font-size: 14px">Your First Name Number Neutral with <span style="font-weight: bold">
                            Mulank &
                            Bhagyank.</span> Full name to be worked</td>
                </tr>

                <tr>
                    <td style="padding: 15px 0 5px 0">
                        <div style="font-size: 16px">
                            What your name says as per <span style=" font-weight:bold"> NAME NUMEROLOGY?</span>,
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
                            <strong>Rulling:</strong>
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
                            <strong>For Business:</strong>
                            {{ $result['name_number_total']['for_business'] ?? 'N/A' }}<br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <table style="width: 100%">
                                <tbody>
                                    <tr>
                                        <td style="padding: 3px 0; font-size:14px">
                                            <strong>Your Full Name Total Details:</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 3px 0; font-size:14px">

                                            @if (!empty($detailItems))
                                                <ul>
                                                    @foreach ($detailItems as $item)
                                                        @if (trim($item) !== '')
                                                            <!-- Ensure no empty list items are rendered -->
                                                            <li>{{ trim($item) }}</li>
                                                        @endif
                                                    @endforeach
                                                </ul>
                                            @else
                                                N/A
                                            @endif
                                        </td>
                                    </tr>
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





                <tr>
                    <td style="padding:10px 0">
                        <table style="border: 1px solid #000; border-collapse: collapse; width:100%; height:100%;"
                            class="mobile-table">
                            <thead>
                                <tr>
                                    <th style="text-align: center; border: 1px solid #000; border-collapse: collapse; font-size:16px"
                                        colspan="2">
                                        Additional Information for {{ $result['FirstName'] }}
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (isset($result['Name Details']['first_name_matches']) && count($result['Name Details']['first_name_matches']) > 0)
                                    @foreach ($result['Name Details']['first_name_matches'] as $match)
                                        <tr>
                                            <td style="border:1px solid #000; text-align:center; font-size:14px;">
                                                Name:
                                            </td>
                                            <td style="border:1px solid #000; text-align:center; font-size:14px;">
                                                {{ $match['name'] ?? 'N/A' }}
                                            </td>

                                        </tr>
                                        <tr>
                                            <td style="border:1px solid #000; text-align:center; font-size:14px;">
                                                Type:
                                            </td>
                                            <td style="border:1px solid #000; text-align:center; font-size:14px;">
                                                {{ $match['type'] ?? 'N/A' }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="border:1px solid #000; text-align:center; font-size:14px;">
                                                Issues Faced:
                                            </td>
                                            <td style="border:1px solid #000; text-align:center; font-size:14px;">
                                                {{ $match['issues_faced_in_life'] ?? 'N/A' }}
                                            </td>

                                        </tr>
                                        <tr>
                                            <td style="border:1px solid #000; text-align:center; font-size:14px;">
                                                Details:
                                            </td>
                                            <td style="border:1px solid #000; text-align:center; font-size:14px;">
                                                {{ $match['details'] ?? 'N/A' }}
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


                                @if (isset($result['alphabetIssues']) && !empty($result['alphabetIssues']))
                                    <tr>
                                        <td colspan="2"
                                            style="border:1px solid #000; text-align:center; font-size:16px; background-color: #f0f0f0;">
                                            Alphabet Issues for {{ $result['alphabetIssues']['alphabet'] }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="border:1px solid #000; text-align:left; font-size:14px;">
                                            <strong>Details:</strong> {{ $result['alphabetIssues']['details'] ?? 'N/A' }}
                                        </td>

                                    </tr>
                                    <tr>
                                        <td style="border:1px solid #000; text-align:left; font-size:14px;">
                                            <strong>Issues in Life:</strong>
                                            {{ $result['alphabetIssues']['issues_in_life'] ?? 'N/A' }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" style="border:1px solid #000; text-align:left; font-size:14px;">
                                            <strong>Remedies:</strong> {{ $result['alphabetIssues']['remedies'] ?? 'N/A' }}
                                        </td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </td>
                </tr>

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
                </tr>



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
