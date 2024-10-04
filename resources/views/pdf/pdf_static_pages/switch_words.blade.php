@php
    // Get the path to the images
    $imageBannerOne = public_path('frontend/assests/images/pdf/banner1-min-min (1).png');
    $imageBannerTwo = public_path('frontend/assests/images/pdf/banner-resize.png');
    $imageCheque = public_path('frontend/assests/images/pdf/cheque.png');

    // Read the file contents and encode them
    $raviMundrraBannerOne = base64_encode(file_get_contents($imageBannerOne));
    $raviMundrraBannerTwo = base64_encode(file_get_contents($imageBannerTwo));
    $imageChequeContent = base64_encode(file_get_contents($imageCheque));

    // Format the images as base64 data URIs
    $raviMundrraBannerOneSrc = 'data:image/png;base64,' . $raviMundrraBannerOne;
    $raviMundrraBannerTwoSrc = 'data:image/png;base64,' . $raviMundrraBannerTwo;
    $imageChequeSrc = 'data:image/png;base64,' . $imageChequeContent;
@endphp


{{-- <div
    style="background-image: url('{{ $backgroundPdfSrc }}'); background-size: cover; background-position: center; margin:auto; width:100%; height:100%;"> --}}
<div style="height: 780px; width:70%; margin:0 auto;  ">
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
                <td style=" text-align: center; padding: 0px 0 0 0;">
                    <h2 style="color:#EC4400;font-weight:bold; font-size:28px">
                        Switch words has it's own power
                    </h2>
                </td>
            </tr>
            <tr>
                <td style=" padding: 20px 0 0 0;">
                    <p style="color:#000; font-size:16px; ">
                        Simple usage of Switch words:
                    </p>
                </td>
            </tr>
            <tr>
                <td style="padding: 10px 0 0 0;  width:100%; color: #000">
                    <div style="width:100%;">
                        <ul style="color:#000; list-style-type: disc; padding-left: 20px;">
                            <li style="color: #000; margin-bottom:30px; padding-bottom:30px;  font-size:14px">
                                Chant, whisper, say it loudly many times daily.
                            </li>
                        </ul>
                    </div>
                </td>
            </tr>
            <tr>
                <td style="padding: 5px 0 0 0;  width:100%; color: #000">
                    <div style="width:100%;">
                        <ul style="color:#000; list-style-type: disc; padding-left: 20px;">
                            <li style="color: #000; margin-bottom:30px; padding-bottom:30px;  font-size:14px">
                                Never focus on the count. The more the better.
                            </li>
                        </ul>
                    </div>
                </td>
            </tr>
            <tr>
                <td style="padding: 5px 0 0 0;  width:100%; color: #000">
                    <div style="width:100%;">
                        <ul style="color:#000; list-style-type: disc; padding-left: 20px;">
                            <li style="color: #000; margin-bottom:30px; padding-bottom:30px;  font-size:14px">
                                Focus on intention.
                            </li>
                        </ul>
                    </div>
                </td>
            </tr>
            <tr>
                <td style="padding: 5px 0 0 0;  width:100%; color: #000">
                    <div style="width:100%;">
                        <ul style="color:#000; list-style-type: disc; padding-left: 20px;">
                            <li style="color: #000; margin-bottom:30px; padding-bottom:30px;  font-size:14px">
                                Write them on your body. But don't write on your body when the results are needed
                            </li>
                        </ul>
                    </div>
                </td>
            </tr>
            <tr>
                <td style="padding: 0px 0 0 10px;  width:100%; color: #000; font-size:14px">
                    in
                    another person.
                </td>
            </tr>
            <tr>
                <td style="padding: 5px 0 0 0;  width:100%; color: #000">
                    <div style="width:100%;">
                        <ul style="color:#000; list-style-type: disc; padding-left: 20px;">
                            <li style="color: #000; margin-bottom:30px; padding-bottom:30px;  font-size:14px">
                                Write on a paper and stick it on your
                                clothes, cash wallet (money related, issues), on
                            </li>
                        </ul>
                    </div>
                </td>
            </tr>
            <tr>
                <td style="padding: 0px 0 0 10px;  width:100%; color: #000; font-size:14px">
                    refrigerator, walls etc.
                </td>
            </tr>
            <tr>
                <td style="padding: 5px 0 0 0;  width:100%; color: #000">
                    <div style="width:100%;">
                        <ul style="color:#000; list-style-type: disc; padding-left: 20px;">
                            <li style="color: #000; margin-bottom:30px; padding-bottom:30px;  font-size:14px">
                                Switch Words never act as negative, so you can experiment with them. There is no
                            </li>
                        </ul>
                    </div>
                </td>
            </tr>
            <tr>
                <td style="padding: 0px 0 0 10px;  width:100%; color: #000; font-size:14px">
                    harm at
                    all.
                </td>
            </tr>
            <tr>
                <td style="padding: 5px 0 0 0;  width:100%; color: #000">
                    <div style="width:100%;">
                        <ul style="color:#000; list-style-type: disc; padding-left: 20px;">
                            <li style="color: #000; margin-bottom:30px; padding-bottom:30px;  font-size:14px">
                                Always give Thanks to Universe and be Positive.
                            </li>
                        </ul>
                    </div>
                </td>
            </tr>

            <tr>
                <td style=" padding: 20px 0 0 0;">
                    <p style="color:#000; font-size:16px; ">
                        Below are some Switch words having proven results.
                    </p>
                </td>
            </tr>
            <tr>
                <td style="padding: 15px 0 5px 0;  width:100%; color: #000">
                    <div style="width:100%;">
                        <ul style="color:#000; list-style-type: disc; padding-left: 20px;">
                            <li style="color: #000; font-size:16px; font-weight:bold">
                                For money flow in Account easily
                            </li>
                        </ul>
                    </div>
                </td>
            </tr>
            <tr>
                <td style="padding: 0px 0 0 10px;  width:100%; color: #000; font-size:14px">
                    <span style="font-weight: bold">
                        Switch Word :</span> FLUROKK ( you can connect with us for pronunciation of these words)
                </td>
            </tr>
            <tr>
                <td style="padding: 0px 0 0 10px;  width:100%; color: #000; font-size:14px">
                    <span style="font-weight: bold">
                        When to chant : </span> In Venus hora
                </td>
            </tr>
            <tr>
                <td style="padding: 0px 0 0 10px;  width:100%; color: #000; font-size:14px">
                    <span style="font-weight: bold">
                        How many times in every occurrence:
                    </span>
                    51 times daily.
                </td>
            </tr>
            <tr>
                <td style="padding: 15px 0 5px 0;  width:100%; color: #000">
                    <div style="width:100%;">
                        <ul style="color:#000; list-style-type: disc; padding-left: 20px;">
                            <li style="color: #000; font-size:16px; font-weight:bold">
                                Stuck Money:
                            </li>
                        </ul>
                    </div>
                </td>
            </tr>
            <tr>
                <td style="padding: 0px 0 0 10px;  width:100%; color: #000; font-size:14px">
                    <span style="font-weight: bold">
                        Switch Word :</span>VASAYAD LEGBET ZE( you can connect with us for pronunciation of these words)
                </td>
            </tr>
            <tr>
                <td style="padding: 0px 0 0 10px;  width:100%; color: #000; font-size:14px">
                    <span style="font-weight: bold">
                        When to chant : </span> Any time
                </td>
            </tr>
            <tr>
                <td style="padding: 0px 0 0 10px;  width:100%; color: #000; font-size:14px">
                    <span style="font-weight: bold">
                        How many times in every occurrence:
                    </span>
                    51 times 21 days start from Friday.
                </td>
            </tr>





           

        </tbody>
    </table>
</div>
{{-- <div style="height: 200px;">
    @include('pdf.static_page.footer')
</div> --}}
