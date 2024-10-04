{{-- Background with custom style --}}
{{-- <div style="background-image: url('{{ $backgroundPdfSrc }}'); background-size: cover; background-position: center; margin:auto; width:100%; height:100%;"> --}}
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
            <tr>
                <td style="padding: 0px 0 10px 0;">
                    <h3 style="font-size:20px; ">Description</h3>
                </td>
            </tr>
            @foreach ($result['Combinations'] as $combination => $data)
                <tr>
                    <td style="padding:5px 0">
                        <ul>
                            <li
                                style="font-size:14px; margin-bottom:10px; color: {{ $data->type == 'Malefic' ? 'red' : 'black' }};">
                                {{ $data->message }}
                            </li>
                        </ul>
                    </td>
                </tr>
            @endforeach
        </tbody>

    </table>

</div>
