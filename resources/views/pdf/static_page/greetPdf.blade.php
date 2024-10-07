@php
    // Get the path to the images
    $imagePath = public_path('frontend/assests/images/pdf/ganesha-new.png');
    $raviMundraImagePath = public_path('frontend/assests/images/pdf/ravi-mundrra-img-min.png');
    $imageWatermark = public_path('frontend/assests/images/pdf/ravi-mundrra-watermark2.png');
    $imageBannerOne = public_path('frontend/assests/images/pdf/banner1.png');
    $backgroundPdf = public_path('frontend/assests/images/pdf/background-bg1.png');
    // $imageQRPath = public_path('frontend/assests/images/pdf/footer-scanner-img.png');

    // Read the file contents and encode them
    $imageData = base64_encode(file_get_contents($imagePath));
    $raviMundrraImageData = base64_encode(file_get_contents($raviMundraImagePath));
    $raviMundrraWatermark = base64_encode(file_get_contents($imageWatermark));
    $raviMundrraBannerOne = base64_encode(file_get_contents($imageBannerOne));
    $backgroundPdfImg = base64_encode(file_get_contents($backgroundPdf));
    // $imageQRData = base64_encode(file_get_contents($imageQRPath));

    // Format the images as base64 data URIs
    $imageSrc = 'data:image/png;base64,' . $imageData;
    $raviMundrraImageSrc = 'data:image/png;base64,' . $raviMundrraImageData;
    $raviMundrraWatermarkSrc = 'data:image/png;base64,' . $raviMundrraWatermark;
    $raviMundrraBannerOneSrc = 'data:image/png;base64,' . $raviMundrraBannerOne;
    $backgroundImagePath = 'data:image/png;base64,' . $backgroundPdfImg;
    // $imageQR = 'data:image/png;base64,' . $imageQRData;

@endphp
@php
    // Prioritize which field to display first
    $displayUsername = $result['Username'] ?? ($result['Name'] ?? $result['name']);
@endphp

{{-- <div
    style="background-image: url('{{ $backgroundImagePath }}'); background-size: cover; background-position: center; margin:auto; margin-top:20px; width:100%; height:100%;"> --}}

<div style="height: 900px;width:70%; margin:0 auto;">
    <table style="width: 100%">
        <thead>
            <tr>
                <th style="width:100%;  padding-bottom:20px;">
                    <h2 style="font-size:28px; text-align: center; color:#8B6C56; font-weight:700; ">
                        !! ॐ गं गणपतये नमः !!
                    </h2>
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="padding: 0px 0; text-align:center; width:100%">
                    <img src="{{ $imageSrc }}" alt="ganpati" style="margin:10px 0px; width:200px">
                </td>
            </tr>
            <tr>
                <td style=" text-align:center; width:100%">
                    <div style=" width:100%; text-align:center;">
                        <h1 style="font-size:32px; color:#000; font-weight:normal; text-align:center;">
                            Welcome To <br>
                            <span style="color:#EC4400; font-weight:bold">Swrahan</span>
                            </span>
                            <br>
                            <span style="color:#000; font-size:14px; font-weight:normal;">
                                (Discover Your Path with Astro, Vastu and Numerology )
                            </span>
                        </h1>
                    </div>
                </td>
            </tr>

            {{-- <tr>
                <td style="padding-top:10px; text-align:center;">
                    <div style="text-align: center;">
                        <h5 style="color:#000; font-size:16px; font-weight:600;  ">
                            Hi {{ $displayUsername . ' Ji' }}, <span style="font-weight: bold">Swati Mundrra</span> is
                            here for your life
                            prediction.
                        </h5>
                    </div>
                </td>
            </tr> --}}
            <tr>
                <td style="padding-top:10px; text-align:center;">
                    <h5 style="color:#000; font-size:16px; font-weight:600; padding: 60px;">
                        I am <span style="font-weight:bold">Swati Mundra,</span> here to provide personalized insights
                        into
                    </h5>
                </td>
            </tr>
            <tr>
                <td style="padding-top:0px; text-align:center;">
                    <div style="text-align: center;">
                        <h5 style="color:#000; font-size:16px; font-weight:600; padding: 60px;">
                            your life through Astrology,
                            Numerology, and Vastu.
                        </h5>
                    </div>
                </td>
            </tr>
            <tr>
                <td style="padding-top:0px; text-align:center;">
                    <div style="text-align: center;">
                        <h5 style="color:#000; font-size:16px; font-weight:600; padding: 60px;">
                          By analysing your details deeply, I will offer tailored 
                        </h5>
                    </div>
                </td>
            </tr>

            <tr>
                <td style="padding-top:0px; text-align:center;">
                    <div style="text-align: center;">
                        <h5 style="color:#000; font-size:16px; font-weight:600; padding: 60px;">
                       predictions
                            and
                            remedies to enhance your 
                        </h5>
                    </div>
                </td>
            </tr>
            <tr>
                <td style="padding-top:0px; text-align:center;">
                    <div style="text-align: center;">
                        <h5 style="color:#000; font-size:16px; font-weight:600; padding: 60px;">
                 growth, harmony, and success.
                        </h5>
                    </div>
                </td>
            </tr>


















            <tr>
                <td style="padding-top:10px; text-align:center;">
                    <div style="text-align: center;">
                        <h5 style="color:#000; font-size:16px; font-weight:600;  ">
                            Daily Practice for Unleashing Good Fortune. Uncover The
                        </h5>
                    </div>
                </td>
            </tr>
            <tr>
                <td style="padding-top:0px; text-align:center;">
                    <div style="text-align: center;">
                        <h5 style="color:#000; font-size:16px; font-weight:600; padding: 60px;">
                            Stars and Digits to Transform Your Life. Personalized
                        </h5>
                    </div>
                </td>
            </tr>
            <tr>
                <td style="padding-top:0px; text-align:center;">
                    <div style="text-align: center;">
                        <h5 style="color:#000; font-size:16px; font-weight:600; padding: 60px;">
                            Numerological and Astrological Insights Contribute to
                        </h5>
                    </div>
                </td>
            </tr>
            <tr>
                <td style="padding-top:0px; text-align:center;">
                    <div style="text-align: center;">
                        <h5 style="color:#000; font-size:16px; font-weight:600; padding: 60px;">
                            Enhanced, Love & Luck
                        </h5>
                    </div>
                </td>
            </tr>

            {{-- <tr>
                <td>
                    <div>
                        <img src="{{ $imageQR }}" alt="qr"
                            style="max-width:100%; height:100px; margin-top:10px;">
                    </div>
                </td>
            </tr> --}}
        </tbody>
    </table>
</div>
</div>
{{-- <div style="height: 300px; ">
        @include('pdf.static_page.footer')
    </div> --}}




















{{-- <style>
    @font-face {
        font-family: 'NotoSansDevanagari';
        src: url('http://127.0.0.1:8000/fonts/NotoSansDevanagari-VariableFont_wdth,wght.ttf') format('truetype');
        font-weight: normal;
        font-style: normal;
    }

    body {
        font-family: 'NotoSansDevanagari', sans-serif;

    }
</style> --}}

{{-- </div>
<div
    style="  border:4px dashed #ED905A; 
 margin:auto; width:97%; height:97%; background-image: url('{{ $raviMundrraWatermarkSrc }}'); background-size: contain; background-repeat:no-repeat; background-position:center">
    <table style="width:100%; height:100%; position:relative; padding:30px 80px">
        <thead>
            <tr>
                <th style="width:100%; padding-top:20px">
                    <h2
                        style=" font-size:40px; text-align: center; color:#8E1888; font-weight:700; padding-bottom:20px;">
                        !! ॐ गं गणपतये नमः !! </h2>
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="padding: 40px 0; text-align:center; width:100%">
                    <img src="{{ $imageSrc }}" alt="ganpati" style="margin:20px 0px;  width:800px">
                </td>
            </tr>

            <tr>
                <td style="padding: 40px 0; text-align:center; width:100%">
                    <div style="margin-top:20px; width:100%; text-align:center; margin:0 auto;">
                        <h1
                            style="font-size:65px; color:#FF8D7A; font-weight:bold; text-align:center; line-height:35px; width:100%; ">
                            Welcome <br> To <br>
                            Ravi Mundrra Numerology
                            </span>
                        </h1>
                    </div>
                </td>
            </tr>
            <tr>
                <td style="padding: 50px 0 40px 0; text-align:center;">
                    <div style="text-align: center;">
                        <h5 style="color:#463824; font-size:40px; font-weight:bold; padding: 60px; ">
                            Daily Practise for Unleashing Good Fortune
                        </h5>
                    </div>
                </td>
            </tr>
            <tr>
                <td style="padding: 0px 0; text-align:center;">
                    <div style="text-align: center;">

                        <h5 style="color:#463824; font-size:40px; font-weight:bold; padding: 60px;">
                            Uncover The Stars and Digits To Transform Your Life. Personalized Numerological
                        </h5>

                    </div>
                </td>
            </tr>
            <tr>
                <td style="padding: 40px 0 50px 0; text-align:center;">
                    <div style="text-align: center;">
                        <h5 style="color:#463824; font-size:40px; font-weight:bold; padding: 60px;">
                            And Astrological Insights Contribute to Enhanced Prosperity, Love & Luck
                        </h5>
                    </div>
                </td>
            </tr>
            <tr style="width:100%;">
                <td style="padding: 50px 0; width:100%;">
                    <div>
                        <table style="width: 100%;">
                            <tbody>
                                <tr>
                                    <td style=" vertical-align: bottom;">
                                        <h6 style="font-size:38px; color:#010705; font-weight:700; ">
                                            Follow, subscribe like our channel.
                                        </h6>
                                        <div>
                                            <a href="#"
                                                style="width:100%; font-size:32px; color:#DCA36E; font-weight:700; display:block; text-decoration:none">https://www.youtube.com/@RaviMundrraNumerology</a>
                                        </div>
                                        <div>
                                            <a href="#"
                                                style="width:100%; font-size:32px; color:#DCA36E; font-weight:700; display:block; text-decoration:none">https://www.youtube.com/@RaviMundrraNumerology</a>
                                        </div>
                                        <div>
                                            <a href="#"
                                                style="width:100%; font-size:32px; color:#DCA36E; font-weight:700; display:block; text-decoration:none">https://www.youtube.com/@RaviMundrraNumerology</a>
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            <img src="{{ $raviMundrraImageSrc }}" alt="ganpati"
                                                style="margin-left:300px; width:400px; height:auto;">
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </td>
            </tr>

            <tr style="position: fixed; bottom:0; width:100%;">
                <td>
                    @include('pdf.static_page.footer')
                </td>
            </tr>
        </tbody>
    </table>

</div>
</div> --}}
