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

    <div style="height: 780px; width:70%; margin:0 auto;">
        <table style="width: 100%">
            <thead>
                <tr>
                    <th style="width:100%; padding-top:0px;">
                        <h2 style="font-size:28px; text-align: center; color:#8B6C56; font-weight:700;">
                            !! ॐ गं गणपतये नमः !!
                        </h2>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($result['last_name_details'] as $detail)
                    <tr>
                        <td style="padding: 40px 0 0 0">
                            <table style="width: 100%;">
                                <thead>
                                    <tr>
                                        <th colspan="2" style="padding: 5px; color:#8B6C56; font-size:80px;">
                                            {{ $detail['letter'] }}
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="padding-top:20px">
                                            <table style="width: 100%; border-collapse: collapse;">
                                                <tbody>
                                                    <tr>
                                                        <td style="width:50%; padding:10px; border-right:1px solid #C8C8C8; border-bottom:1px solid #C8C8C8;">
                                                            <table style="width: 100%">
                                                                <tbody>
                                                                    <tr>
                                                                        <td>
                                                                            <h5 style="font-size:18px">Strengths</h5>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="">
                                                                            <div style="font-size: 16px">
                                                                                {{ $detail['strengths'] }}
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                        <td style="width:50%; padding:10px; border-bottom:1px solid #C8C8C8;">
                                                            <table style="width: 100%">
                                                                <tbody>
                                                                    <tr>
                                                                        <td>
                                                                            <h5 style="font-size:18px">Weaknesses</h5>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="">
                                                                            <div style="font-size: 16px">
                                                                                {{ $detail['weaknesses'] }}
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width:50%; padding:10px; border-right:1px solid #C8C8C8; border-top:1px solid #C8C8C8;">
                                                            <table style="width: 100%">
                                                                <tbody>
                                                                    <tr>
                                                                        <td>
                                                                            <h5 style="font-size:18px">Best Jobs</h5>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="">
                                                                            <div style="font-size: 16px">
                                                                                {{ $detail['best_jobs'] }}
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                        <td style="width:50%; padding:10px; border-top:1px solid #C8C8C8;">
                                                            <table style="width: 100%">
                                                                <tbody>
                                                                    <tr>
                                                                        <td>
                                                                            <h5 style="font-size:18px">Nature</h5>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="">
                                                                            <div style="font-size: 16px">
                                                                                {{ $detail['nature'] }}
                                                                            </div>
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
                                </tbody>
                            </table>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
