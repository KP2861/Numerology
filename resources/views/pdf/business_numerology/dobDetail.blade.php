<div style="height: 780px; width:70%; margin:0 auto; ">
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
            @foreach ($results as $result)
                <tr>
                    <td style="padding: 0px 0 30px 0; text-align:center">
                        <h3 style="font-size:20px; ">D.O.B Prediction ( <span>
                                {{ $result['dob'] ?? 'N/A' }}</span> )
                        </h3>
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
                                        DOB Day</td>
                                    <td
                                        style="border:1px solid #000; border-collapse: collapse; text-align:center; padding:5px ; font-size:14px;">
                                        {{ $result['Date Detail']['date'] ?? 'N/A' }}</td>
                                </tr>
                                <tr>
                                    <td
                                        style="border:1px solid #000; border-collapse: collapse; padding:5px 10px; font-size:14px; ">
                                        DOB
                                        compound</td>
                                    <td
                                        style="border:1px solid #000; border-collapse: collapse; text-align:center; padding:5px 10px; font-size:14px;">
                                        {{ $result['Date Detail']['dateCompound'] ?? 'N/A' }}
                                    </td>
                                </tr>



                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td style="padding: 20px 0 0px 0; font-size:16px; font-weight:bold;">
                        How your DOB impact on your life?
                    </td>
                </tr>
                <tr>
                    <td style="padding: 15px 0 0 0 ; font-size: 14px; font-weight: bold">
                        Behaviour:
                    </td>
                </tr>
                <tr>
                    <td style="padding: 5px 0 0 0; font-size: 14px;">
                        {{ $result['Date Detail']['dayDetail'] ?? 'N/A' }}
                    </td>
                </tr>
                <tr>
                    <td>
                        <table style="width: 100%">
                            <tbody>
                                <tr>
                                    <td style="padding: 15px 0 5px 0 ; font-size: 14px; font-weight: bold">
                                        Specific Detail:
                                    </td>
                                </tr>
                                {{-- {{ $result['Date Detail']['daySpecificDetail'] ?? 'N/A' }} --}}
                                @if (!empty($result['Date Detail']['daySpecificDetail']))
                                    @foreach (explode('.', $result['Date Detail']['daySpecificDetail']) as $detail)
                                        @if (trim($detail) !== '')
                                            <tr>
                                                <td style="padding: 3px 0;  font-size: 14px;">
                                                    <ul>
                                                        <li>{{ trim($detail) }}.</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                        @endif
                                    @endforeach
                                @else
                                    <tr>
                                        <td style="padding: 3px 0;  font-size: 14px;">
                                            <p>N/A</p>
                                        </td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>

                    </td>
                </tr>






                <tr>
                    <td style="padding: 30px 0 0px 0; font-size:16px; font-weight:bold;">
                        How your total of DOB impact on your life?
                    </td>
                </tr>

                <tr>
                    <td style="padding: 15px 0 0 0 ; font-size: 14px; font-weight: bold">
                        Behaviour:
                    </td>
                </tr>

                <tr>
                    <td style="padding: 5px 0 30px 0; font-size: 14px;">
                        {{ $result['Date Detail']['singleDigitDetail'] ?? 'N/A' }}
                    </td>
                </tr>

                <tr>
                    <td>
                        <table style="width: 100%">
                            <tbody>

                                <tr>
                                    <td style="padding: 15px 0 5px 0 ; font-size: 14px; font-weight: bold">
                                        Specific Detail:
                                    </td>
                                </tr>









                                @if (!empty($result['Date Detail']['singleDigitSpecificDetail']))
                                    @foreach (explode('.', $result['Date Detail']['singleDigitSpecificDetail']) as $detail)
                                        @if (trim($detail) !== '')
                                            <tr>
                                                <td style="padding: 3px 0;  font-size: 14px;">
                                                    <ul>
                                                        <li>{{ trim($detail) }}.</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                        @endif
                                    @endforeach
                                @else
                                    <tr>
                                        <td style=" font-size: 14px;">
                                            N/A
                                        </td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </td>
                </tr>
            @endforeach







            <tr>
                <td style="padding: 25px 0 0 0; font-size:20px;">
                    <h3>Multi-Digits in DOB impact as:</h3>
                </td>
            </tr>
            <tr>
                <td style="padding: 10px 0 0 0; font-size: 14px; font-weight:bold">
                    Trait:
                </td>
            </tr>
            <tr>
                <td style="padding: 5px 0 0 0; font-size: 14px;">
                    {{ $result['Multi-Date Count']['largestDigitDetails']['trate'] ?? 'N/A' }}
                </td>
            </tr>
            <tr>
                <td style="padding: 10px 0 0 0; font-size: 14px; font-weight:bold">
                    Direction to Balance:
                </td>
            </tr>
            <tr>
                <td style="padding: 5px 0 0 0; font-size: 14px;">
                    {{ $result['Multi-Date Count']['largestDigitDetails']['direction_to_balance'] ?? 'N/A' }}
                </td>
            </tr>
            <tr>
                <td style="padding: 10px 0 0 0; font-size: 14px; font-weight:bold">
                    Behaviour:
                </td>
            </tr>
            <tr>
                <td style="padding: 5px 0 0 0; font-size: 14px;">
                    {{ $result['Multi-Date Count']['largestDigitDetails']['behaviour'] ?? 'N/A' }}
                </td>
            </tr>
        </tbody>

    </table>



</div>
{{-- </div> --}}
