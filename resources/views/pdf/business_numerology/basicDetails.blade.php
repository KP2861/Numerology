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
            <tr>
                <td style="padding: 0px 0 30px 0; text-align:center">
                    <h1 style="color: #000;">Numerology Details</h1>
                </td>
            </tr>
            <tr>
                <td>
                    <table class="basicDatatTable" style="border: 1px solid #000; border-collapse: collapse; width:100%">
                        <thead>
                            <tr>
                                <th style="border: 1px solid #000; padding:4px; text-align:left">Name</th>
                                <th style="border: 1px solid #000; padding:4px; text-align:left">DOB</th>
                                <th style="border: 1px solid #000; padding:4px; text-align:left">Lucky Number</th>
                                <th style="border: 1px solid #000; padding:4px; text-align:left">Neutral</th>
                                <th style="border: 1px solid #000; padding:4px; text-align:left">Avoid</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($results as $result)
                                <tr>
                                    <td style="border: 1px solid #000; padding:4px">{{ $result['name'] }}</td>
                                    <td style="border: 1px solid #000; padding:4px">{{ $result['dob'] }}</td>
                                    <td style="border: 1px solid #000; padding:4px">
                                        {{ implode(', ', $result['getBasicDetail']['lucky']) }}</td>
                                    <td style="border: 1px solid #000; padding:4px">
                                        {{ implode(', ', $result['getBasicDetail']['neutral']) }}</td>
                                    <td style="border: 1px solid #000; padding:4px">
                                        {{ implode(', ', $result['getBasicDetail']['hardcore']) }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </td>
            </tr>
        </thead>
    </table>
</div>







{{-- <div class="container" style="padding: 7rem">
    <h1>Numerology Details</h1>
    <table class="basicDatatTable" style="border: 1px solid #000; border-collapse: collapse;">
        <thead>
            <tr>
                <th  style="border: 1px solid #000; padding:4px; text-align:left">Name</th>
                <th  style="border: 1px solid #000; padding:4px; text-align:left">DOB</th>
                <th  style="border: 1px solid #000; padding:4px; text-align:left">Lucky Number</th>
                <th  style="border: 1px solid #000; padding:4px; text-align:left">Neutral</th>
                <th  style="border: 1px solid #000; padding:4px; text-align:left">Avoid</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($results as $result)
                <tr>
                    <td style="border: 1px solid #000; padding:4px">{{ $result['name'] }}</td>
                    <td style="border: 1px solid #000; padding:4px">{{ $result['dob'] }}</td>
                    <td style="border: 1px solid #000; padding:4px">{{ implode(', ', $result['getBasicDetail']['lucky']) }}</td>
                    <td style="border: 1px solid #000; padding:4px">{{ implode(', ', $result['getBasicDetail']['neutral']) }}</td>
                    <td style="border: 1px solid #000; padding:4px">{{ implode(', ', $result['getBasicDetail']['hardcore']) }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div> --}}
