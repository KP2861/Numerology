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
                <th style="width:100%; padding-bottom:20px;">
                    <h2 style="font-size:28px; text-align: center; color:#8B6C56; font-weight:700; ">
                        !! ॐ गं गणपतये नमः !!
                    </h2>
                </th>
            </tr>
        </thead>
        <tbody>
      
            <tr>
                <td style=" padding: 0px 0 0 0;">
                    <p style="color:#000; font-size:14px; ">
                        Impact: This may lead to <span style="font-weight: bold"> disturbances in personal and
                            professional life, such as financial losses, family disputes, or a lack of mental peace. You
                            might feel stuck or encounter obstacles in your career or relationships.</span>
                    </p>
                </td>
            </tr>
            <tr>
                <td style=" padding: 10px 0 0 0;">
                    <p style="color:#000; font-size:14px; ">
                        Correct Direction: Temples should ideally be placed in the northeast (Ishan Kon) direction,
                        known as the direction of the gods. This brings positive energy, spiritual growth, and peace to
                        the household.
                    </p>
                </td>
            </tr>


            <tr>
                <td style=" padding: 20px 0 0 0;">
                    <p style="color:#000; font-size:16px; font-weight:bold ">
                        Shoe Rack Placement:
                    </p>
                </td>
            </tr>
            <tr>
                <td style=" padding: 10px 0 0 0;">
                    <p style="color:#000; font-size:14px; ">
                        Incorrect Direction: Placing a shoe rack in the <span style="font-weight: bold">North-East or
                            South West</span> direction can bring negative energy. The Northeast is considered a sacred
                        space in Vastu, so clutter or unclean items like shoes disturb the flow of energy.
                    </p>
                </td>
            </tr>
            <tr>
                <td style=" padding: 20px 0 0 0;">
                    <p style="color:#000; font-size:14px; ">
                        Impact: It may lead to health problems, especially related to the eyes or head. It can also
                        cause mental stress and disturb the spiritual energy in the house, resulting in a lack of
                        clarity or focus in decision-making.
                    </p>
                </td>
            </tr>
            <tr>
                <td style=" padding: 30px 0 0 0;">
                    <p style="color:#000; font-size:18px; font-weight:bold ">
                        To receive your personalized consultation, please book your appointment now.
                    </p>
                </td>
            </tr>
        </tbody>
    </table>
</div>

