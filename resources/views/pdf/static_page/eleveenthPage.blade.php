@php
    // Get the path to the images
    $imageBannerOne = public_path('frontend/assests/images/pdf/banner1-min-min (1).png');
    $imageBannerTwo = public_path('frontend/assests/images/pdf/banner-resize.png');

    // Read the file contents and encode them
    $raviMundrraBannerOne = base64_encode(file_get_contents($imageBannerOne));
    $raviMundrraBannerTwo = base64_encode(file_get_contents($imageBannerTwo));

    // Format the images as base64 data URIs
    $raviMundrraBannerOneSrc = 'data:image/png;base64,' . $raviMundrraBannerOne;
    $raviMundrraBannerTwoSrc = 'data:image/png;base64,' . $raviMundrraBannerTwo;
@endphp


{{-- <div
    style="background-image: url('{{ $backgroundPdfSrc }}'); background-size: cover; background-position: center; margin:auto; width:100%; height:100%;"> --}}
<div style="height: 780px; width:70%; margin:0 auto;  ">
    <a name="termsAndConditions"></a>
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
                    <h2 style="color:#E97132; font-weight:bold; font-size:28px">
                        Terms and conditions: -
                    </h2>
                </td>
            </tr>
            <tr>
                <td style=" text-align: start; padding: 20px 0 0 0;">
                    <ul style="color:#000;">
                        <li style="color: #000; font-size:16px;">
                            Astrology and numerology contribute 95% to human life and 5%
                        </li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td style="padding: 0px 0 0 12px;  width:100%; color: #000; font-size:16px">
                    are man's destiny and
                    lifestyle,
                    faith in the power of good thoughts and God, realization of the way of life.
                </td>
            </tr>
            <tr>
                <td style=" text-align: start; padding: 20px 0 0 0;">
                    <ul style="color:#000;">
                        <li style="color: #000; font-size:16px;">
                            Many times, the remedies can work even in a week and
                        </li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td style="padding: 0px 0 0 12px;  width:100%; color: #000; font-size:16px">
                    sometimes it takes 3 months to 1
                    year
                    depending on the condition of planet and constellation.
                </td>
            </tr>
            <tr>
                <td style=" text-align: start; padding: 20px 0 0 0;">
                    <ul style="color:#000;">
                        <li style="color: #000; font-size:16px;">
                            The doors of all my happiness and prosperity are opening, I am
                        </li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td style="padding: 0px 0 0 12px;  width:100%; color: #000; font-size:16px">
                    happy, O God, I have
                    received
                    millions of blessings from you.
                </td>
            </tr>
            <tr>
                <td style=" text-align: start; padding: 20px 0 0 0;">
                    <ul style="color:#000;">
                        <li style="color: #000; font-size:16px;">
                            All measures will have to be disciplined.
                        </li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td style=" text-align: start; padding: 20px 0 0 0;">
                    <ul style="color:#000;">
                        <li style="color: #000; font-size:16px;">
                            All these measures were to be taken, if we do not get the benefit
                        </li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td style="padding: 0px 0 0 12px;  width:100%; color: #000; font-size:16px">
                    from them with
                    immediate
                    effect, then we will get this effect and benefit in the condition of that unfavorable
                    planet.
                </td>
            </tr>
            <tr>
                <td style=" text-align: start; padding: 20px 0 0 0;">
                    <ul style="color:#000;">
                        <li style="color: #000; font-size:16px;">
                            Daily positive behavior can have a significant impact on a
                        </li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td style="padding: 0px 0 0 12px;  width:100%; color: #000; font-size:16px">
                    person's happiness in life.
                </td>
            </tr>

        </tbody>
    </table>
</div>
{{-- <div style="height: 200px;">
        @include('pdf.static_page.footer')
    </div> --}}
{{-- </div> --}}
