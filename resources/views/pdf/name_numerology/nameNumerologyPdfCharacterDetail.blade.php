@php
    // Get the path to the images
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


{{-- <div
    style=" border:1px dashed #666; margin:auto; width:97%; height:100%; background-image: url('{{ $raviMundrraWatermarkSrc }}'); background-size: contain; background-repeat:no-repeat; background-position:center"> --}}
    <div style="height: 670px; width:100%; ">
        <table style="margin: 0 40px; width:100%">
            <thead>
                <tr>
                    <th style="width:100%; padding-top:20px;">
                        <h2 style="font-size:20px; text-align: center; color:#8E1888; font-weight:700; ">
                            !! ॐ गं गणपतये नमः !!
                        </h2>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="padding: 40px 0 0 0; font-size:16px">
                        <table style="width: 100%; border: 1px solid #000; border-collapse: collapse;">
                            <thead>
                                <tr>
                                    <th style="border: 1px solid #000; border-collapse: collapse; padding:5px; font-size:20px"
                                        colspan="3">
                                        dwe23rwer
                                    </th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <th width="170px" style=" border: 1px solid #000; border-collapse: collapse;"
                                        rowspan="4">
                                        fjkweh
                                    </th>
                                    <td
                                        style=" border: 1px solid #000; border-collapse: collapse; width:100px;padding:5px ">
                                        strengths
                                    </td>
                                    <td style=" border: 1px solid #000; padding:5px ;border-collapse: collapse;">
                                        Artistic, creative, deep emotions, compassionate, good judgment, sensitive
                                    </td>
                                </tr>
                                <tr>
                                    <td style=" border: 1px solid #000; border-collapse: collapse; padding:5px ;">
                                        Weaknesses
                                    </td>
                                    <td style=" border: 1px solid #000; border-collapse: collapse; padding:5px ;">
                                        Anxiety issues, moody, impulsive
                                    </td>
                                </tr>
                                <tr>
                                    <td style="border: 1px solid #000; border-collapse: collapse; padding:5px ;">
                                        best_jobs
                                    </td>
                                    <td style=" border: 1px solid #000; border-collapse: collapse; padding:5px ;">
                                        Fashion industry, design, styling, painting, photography
                                    </td>
                                </tr>
                                <tr>
                                    <td style=" border: 1px solid #000; border-collapse: collapse; padding:5px ;">
                                        nature
                                    </td>
                                    <td style="border: 1px solid #000; border-collapse: collapse; padding:5px ;">
                                        Artistic, Sensitive
                                    </td>
                                </tr>


                                <tr>
                                    <th width="170px" style=" border: 1px solid #000; border-collapse: collapse;"
                                        rowspan="4">
                                        fjkweh
                                    </th>
                                    <td
                                        style=" border: 1px solid #000; border-collapse: collapse; width:100px;padding:5px ">
                                        strengths
                                    </td>
                                    <td style=" border: 1px solid #000; padding:5px ;border-collapse: collapse;">
                                        Artistic, creative, deep emotions, compassionate, good judgment, sensitive
                                    </td>
                                </tr>
                                <tr>
                                    <td style=" border: 1px solid #000; border-collapse: collapse; padding:5px ;">
                                        Weaknesses
                                    </td>
                                    <td style=" border: 1px solid #000; border-collapse: collapse; padding:5px ;">
                                        Anxiety issues, moody, impulsive
                                    </td>
                                </tr>
                                <tr>
                                    <td style="border: 1px solid #000; border-collapse: collapse; padding:5px ;">
                                        best_jobs
                                    </td>
                                    <td style=" border: 1px solid #000; border-collapse: collapse; padding:5px ;">
                                        Fashion industry, design, styling, painting, photography
                                    </td>
                                </tr>
                                <tr>
                                    <td style=" border: 1px solid #000; border-collapse: collapse; padding:5px ;">
                                        nature
                                    </td>
                                    <td style="border: 1px solid #000; border-collapse: collapse; padding:5px ;">
                                        Artistic, Sensitive
                                    </td>
                                </tr>
                                <tr>
                                    <th width="170px" style=" border: 1px solid #000; border-collapse: collapse;"
                                        rowspan="4">
                                        fjkweh
                                    </th>
                                    <td
                                        style=" border: 1px solid #000; border-collapse: collapse; width:100px;padding:5px ">
                                        strengths
                                    </td>
                                    <td style=" border: 1px solid #000; padding:5px ;border-collapse: collapse;">
                                        Artistic, creative, deep emotions, compassionate, good judgment, sensitive
                                    </td>
                                </tr>
                                <tr>
                                    <td style=" border: 1px solid #000; border-collapse: collapse; padding:5px ;">
                                        Weaknesses
                                    </td>
                                    <td style=" border: 1px solid #000; border-collapse: collapse; padding:5px ;">
                                        Anxiety issues, moody, impulsive
                                    </td>
                                </tr>
                                <tr>
                                    <td style="border: 1px solid #000; border-collapse: collapse; padding:5px ;">
                                        best_jobs
                                    </td>
                                    <td style=" border: 1px solid #000; border-collapse: collapse; padding:5px ;">
                                        Fashion industry, design, styling, painting, photography
                                    </td>
                                </tr>
                                <tr>
                                    <td style=" border: 1px solid #000; border-collapse: collapse; padding:5px ;">
                                        nature
                                    </td>
                                    <td style="border: 1px solid #000; border-collapse: collapse; padding:5px ;">
                                        Artistic, Sensitive
                                    </td>
                                </tr>
                                

                            </tbody>

                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    {{-- <div style="height: 300px;">
        @include('pdf.static_page.footer')
    </div> --}}
{{-- </div> --}}
