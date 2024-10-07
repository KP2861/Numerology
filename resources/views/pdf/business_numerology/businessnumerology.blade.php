@extends('pdf.business_numerology.staticPage')@section('bussinessNumerologyContent')
<div style="height: 780px; width:70%; margin:0 auto;  ">
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
                <td style="padding: 0px 0 0 0; text-align:center; width:100%; color: #000">
                    <div style=" width:100%; ">
                        <h1 style="color: #000;">Business Numerology Result</h1>
                    </div>
                </td>
            </tr>
            @foreach ($results as $result)
                <tr>
                    <td style="padding: 0px 0 0 0;  width:100%; color: #000">
                        <table style="width:100%">
                            <tbody>
                                <tr>
                                    <td style="font-size:18px; font-weight:bold; text-align:center; padding:20px 0">
                                        Mobile
                                        Number Predictions
                                        {{ $result['name'] }} <span>(</span> {{ $result['dob'] }} <span>)</span>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <table
                                            style="border: 1px solid #000; border-collapse: collapse; margin-bottom:10px; width:100%; height:100%;"
                                            class="mobile-table">
                                            <tbody>
                                                <tr>
                                                    <td
                                                        style="border:1px solid #000; border-collapse: collapse; padding:5px 10px; font-size:14px;">
                                                        Full Name Total:</td>
                                                    <td
                                                        style="border:1px solid #000; border-collapse: collapse; text-align:center; padding:5px ; font-size:14px;">
                                                        {{ $result['full_name_total'] }}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="border:1px solid #000; border-collapse: collapse; padding:5px 10px; font-size:14px; ">
                                                        Single Digit:
                                                    </td>
                                                    <td
                                                        style="border:1px solid #000; border-collapse: collapse; text-align:center; padding:5px 10px; font-size:14px;">
                                                        {{ $result['full_name_single_digit'] }}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="border:1px solid #000; border-collapse: collapse; padding:5px 10px; font-size:14px; ">
                                                        Personal Year:
                                                    </td>
                                                    <td
                                                        style="border:1px solid #000; border-collapse: collapse; text-align:center; padding:5px 10px; font-size:14px;">
                                                        {{ $result['personal_year'] }}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="border:1px solid #000; border-collapse: collapse; padding:5px 10px; font-size:14px; ">
                                                        Personal Month:
                                                    </td>
                                                    <td
                                                        style="border:1px solid #000; border-collapse: collapse; text-align:center; padding:5px 10px; font-size:14px;">
                                                        {{ $result['personal_month'] }}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="border:1px solid #000; border-collapse: collapse; padding:5px 10px; font-size:14px; ">
                                                        Personal Day:
                                                    </td>
                                                    <td
                                                        style="border:1px solid #000; border-collapse: collapse; text-align:center; padding:5px 10px; font-size:14px;">
                                                        {{ $result['personal_day'] }}
                                                    </td>
                                                </tr>
                                            </tbody>

                                        </table>


                                    </td>
                                </tr>


















                                {{-- <tr>
                                    <td style="padding: 20px 0 0 0; width:100%; color: #000">
                                        <p class="card-text"><strong class="text-primary"></strong> <span
                                                class="text-secondary"></span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding: 20px 0 0 0; width:100%; color: #000">
                                        <p class="card-text"><strong class="text-primary">Personal Day:</strong> <span
                                                class="text-secondary">{{ $result['personal_day'] }}</span></p>
                                    </td>
                                </tr> --}}
                                {{-- <tr>
                                    <td style="padding: 40px 0 0 0; width:100%; color: #000">
                                        <h3 class="text-primary mt-3">Lucky, Neutral, and Avoid Numbers:</h3>
                                    </td>
                                </tr> --}}
{{-- 
                                <tr>
                                    <td style="padding: 20px 0 0 0; width:100%; color: #000">
                                        <h3 class="mt-5 mb-4 text-success">Dasha Periods:</h3>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding: 20px 0 0 0; width:100%; color: #000">
                                        <ul class="list-group">
                                            @foreach ($result['dasha'] as $d)
                                                <li
                                                    class="list-group-item d-flex justify-content-between align-items-center                             @if ($d['owner'] == 'Malefic') bg-danger text-white                             @else                                 bg-success text-white @endif                             mb-2 rounded">
                                                    <div> <strong>From {{ $d['start_year'] }} to
                                                            {{ $d['end_year'] }}:</strong>
                                                    </div> <span
                                                        class="badge @if ($d['owner'] == 'Malefic') badge-dark @else badge-light @endif">
                                                        {{ $d['owner'] }} </span>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </td>
                                </tr> --}}
                                <tr>
                                    <td style="padding-top:30px">
                                        <p style="font-weight:bold; margin-top:5px; font-size:18px">Multi count in
                                            mobile number</p>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <table
                                            style="border: 1px solid #000; border-collapse: collapse; width:100%; margin-top:15px;">
                                            <thead>
                                                <tr>
                                                    <th
                                                        style="width:100px; padding:5px; border: 1px solid #000; text-align:start; font-size:16px">
                                                        Digit
                                                    </th>
                                                    <th
                                                        style="width:100px; padding:5px; border: 1px solid #000; text-align:start; font-size:16px">
                                                        Occurance
                                                    </th>
                                                    <th
                                                        style="padding: 5px; border: 1px solid #000; text-align:start; font-size:16px">
                                                        Message
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td
                                                        style="border: 1px solid #000; border-collapse: collapse; font-weight:500; text-align:center; font-size:14px; padding:5px ">
                                                        {{ $result['mobile_numerology']['max_digit'] }}
                                                    </td>
                                                    <td
                                                        style="border: 1px solid #000; border-collapse: collapse; font-weight:500;  text-align:center; margin-top:5px; font-size:14px;  padding:5px">
                                                        {{ $result['mobile_numerology']['max_count'] }}
                                                    </td>
                                                    <td
                                                        style="border: 1px solid #363636; border-collapse: collapse; font-size:14px; padding:5px; font-weight:500; padding:5px ;text-align:justify ">
                                                        {{ $result['mobile_numerology']['message_for_max_digit'] }}
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>





                            </tbody>
                        </table>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>


{{-- <div class="container">
    <h1 class="text-center mb-5 text-primary">Business Numerology Result</h1>
    @foreach ($results as $result)
        <div class="card shadow-lg border-light mb-5">
            <div class="card-body bg-light p-4 rounded">
                <h2 class="card-title text-info mb-3">{{ $result['name'] }}</h2>
                <p class="card-text"><strong class="text-primary">DOB:</strong> <span
                        class="text-secondary">{{ $result['dob'] }}</span></p>
                <p class="card-text"><strong class="text-primary">Full Name Total:</strong> <span
                        class="text-secondary">{{ $result['full_name_total'] }}</span></p>
                <p class="card-text"><strong class="text-primary">Single Digit:</strong> <span
                        class="text-secondary">{{ $result['full_name_single_digit'] }}</span></p>
                <p class="card-text"><strong class="text-primary">Personal Year:</strong> <span
                        class="text-secondary">{{ $result['personal_year'] }}</span></p>
                <p class="card-text"><strong class="text-primary">Personal Month:</strong> <span
                        class="text-secondary">{{ $result['personal_month'] }}</span></p>
                <p class="card-text"><strong class="text-primary">Personal Day:</strong> <span
                        class="text-secondary">{{ $result['personal_day'] }}</span></p>
                <h3 class="text-primary mt-3">Lucky, Neutral, and Avoid Numbers:</h3>  <h3
                    class="mt-5 mb-4 text-success">Dasha Periods:</h3>
                    <ul class="list-group">
                        @foreach ($result['dasha'] as $d)
                            <li class="list-group-item d-flex justify-content-between align-items-start 
                                @if ($d['Owner Planet'] == 'Malefic') bg-danger text-white 
                                @else bg-success text-white @endif mb-2 rounded">
                                <div>
                                    <strong>From {{ $d['Year from'] }} to {{ $d['Year to'] }}:</strong>
                                    <div>PY Year: {{ $d['PY year'] }}</div>
                                    <div><em>{{ $d['Detail'] }}</em></div> <!-- Displaying the detail -->
                                </div>
                                <span class="badge @if ($d['Owner Planet'] == 'Malefic') badge-dark @else badge-light @endif">
                                    {{ $d['Owner Planet'] }} 
                                </span>
                            </li>
                        @endforeach
                    </ul>
                    
                    
                     <!-- Add Mobile Numerology Section -->
                @if (isset($result['mobile_numerology']))
                    <h3 class="mt-5 mb-4 text-info">Mobile Numerology:</h3>
                    <p><strong>Total:</strong> {{ $result['mobile_numerology']['total'] }}</p>
                    <p><strong>Single Digit:</strong> {{ $result['mobile_numerology']['single_digit'] }}</p>
                    <p><strong>Detail:</strong> {{ $result['mobile_numerology']['detail'] }}</p>
                    <h4 class="text-primary mt-4">Combinations:</h4> <!-- Table for Combinations and Type -->
                    <div class="brown-border-table">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Max Recurring Digit</th>
                                    <th>Count</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($result['mobile_numerology']['combination_data'] as $data)
                                    @php

                                        $decodedData = json_decode($data, true);
                                    @endphp
                                    @if ($decodedData)
                                        <tr>
                                            <td>{{ $decodedData['combination_number'] }}</td>
                                            <td>{{ $decodedData['type'] }}</td>
                                        </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <h4 class="text-primary mt-4">Combination Data:</h4>
                    <ul class="list-unstyled">
                        @foreach ($result['mobile_numerology']['combination_data'] as $data)
                            @php

                                $decodedData = json_decode($data, true);
                            @endphp @if ($decodedData)
                                <li>{{ $decodedData['message'] }}</li>
                            @endif
                        @endforeach
                    </ul>
                @endif
                <div class="brown-border-table mt-4">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Max Recurring Digit</th>
                                <th>Count</th>
                                <th>Message</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $result['mobile_numerology']['max_digit'] }}</td>
                                <td>{{ $result['mobile_numerology']['max_count'] }}</td>
                                <td>{{ $result['mobile_numerology']['message_for_max_digit'] }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @endforeach
</div> --}}
@endsection
