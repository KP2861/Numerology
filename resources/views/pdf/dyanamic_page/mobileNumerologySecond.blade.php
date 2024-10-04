{{-- <div
    style="background-image: url('{{ $backgroundPdfSrc }}'); background-size: cover; background-position: center; margin:auto; width:100%; height:100%;"> --}}
<div style="height: 780px; width:70%; margin:0 auto;">
    <table style="width: 100%">
        <thead>
            <tr>
                <th style="width:100%; padding-bottom:20px;">
                    <h2 style="font-size:28px; text-align: center; color:#8B6C56; font-weight:700;">
                        !! ॐ गं गणपतये नमः !!
                    </h2>
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <div style="text-align: center;">
                        <table style="border: 1px solid #000; border-collapse: collapse; margin:0px 0; width:100%">
                            <tr>
                                <th class="table-heading"
                                    style="border: 1px solid #000; border-collapse: collapse; font-weight:bold; width:200px; font-size:16px;">
                                    Combination
                                </th>
                                <th class="table-heading"
                                    style="border: 1px solid #000; border-collapse: collapse; font-weight:bold; font-size:16px;">
                                    Type
                                </th>
                            </tr>
                            @foreach ($result['Combinations'] as $combination => $data)
                                <tr>
                                    <td
                                        style="border: 1px solid #000; border-collapse: collapse; font-size:14px; text-align:center; padding:5px 10px;">
                                        <span style="color: {{ $data->type == 'Malefic' ? 'red' : 'black' }};">{{ $combination }}</span>
                                    </td>
                                    <td
                                        style="border: 1px solid #000; border-collapse: collapse; font-size:14px; text-align:center; padding:5px 10px">
                                        <span style="color: {{ $data->type == 'Malefic' ? 'red' : 'black' }};">
                                            {{ $data->type }}
                                        </span>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </td>
            </tr>
            @if(isset($result['Largest Recurring Digit']) && isset($result['Occurrence Count']) && isset($result['Message for Max Digit']))


            <tr>
                <td style="padding-top:30px">
                    <p style="font-weight:bold; margin-top:5px; font-size:18px">Multi count in mobile number</p>
                </td>
            </tr>
            @endif


            <tr>
                <td>
                    <table style="border: 1px solid #000; border-collapse: collapse; width:100%; margin-top:15px;">
                        <thead>
                            @if(isset($result['Largest Recurring Digit']) && isset($result['Occurrence Count']) && isset($result['Message for Max Digit']))

                            <tr>
                                <th
                                    style="width:100px; padding:5px; border: 1px solid #000; text-align:start; font-size:16px">
                                    Digit
                                </th>
                                <th
                                    style="width:100px; padding:5px; border: 1px solid #000; text-align:start; font-size:16px">
                                    Occurrence
                                </th>
                                <th style="padding: 5px; border: 1px solid #000; text-align:start; font-size:16px">
                                    Message
                                </th>
                            </tr>
                            @endif

                        </thead>
                        <tbody>
                            @if(isset($result['Largest Recurring Digit']) && isset($result['Occurrence Count']) && isset($result['Message for Max Digit']))
                                <tr>
                                    <td
                                        style="border: 1px solid #000; border-collapse: collapse; font-weight:500; text-align:left; font-size:14px; padding:5px">
                                        {{ $result['Largest Recurring Digit'] }}
                                    </td>
                                    <td
                                        style="border: 1px solid #000; border-collapse: collapse; font-weight:500; text-align:left; font-size:14px; padding:5px">
                                        {{ $result['Occurrence Count'] }}
                                    </td>
                                    <td
                                        style="border: 1px solid #363636; border-collapse: collapse; font-size:14px; padding:5px; font-weight:500; text-align:left">
                                        {{ $result['Message for Max Digit'] }}
                                    </td>
                                </tr>
                           
                            @endif
                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>
</div>
{{-- <div style="height: 200px;">
        @include('pdf.static_page.footer')
    </div> --}}
</div>
