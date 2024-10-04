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
                <td style="  padding: 0px 0 0 0; text-align:justify;">
                    <ul style="color:#000;">
                        <li style="color: #000; font-size:16px;">
                            Positive behavior patterns such as offering prayer to God,
                        </li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td style="padding: 0px 0 0 12px;  width:100%; color: #000; font-size:16px;text-align:justify;">
                    meditation, practicing
                    gratitude
                    regularly, connecting with loved ones, and engaging in activities you enjoy can release
                    feel-good chemicals in the brain, improve self-esteem, and foster strong relationships.
                </td>
            </tr>
            <tr>
                <td style=" text-align: start; padding: 20px 0 0 0;">
                    <ul style="color:#000;">
                        <li style="color: #000; font-size:16px;">
                            These habits can enhance stress reduction, resilience, and
                        </li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td style="padding: 0px 0 0 12px;  width:100%; color: #000; font-size:16px">
                    overall life satisfaction.
                </td>
            </tr>
            <tr>
                <td style=" text-align: start; padding: 20px 0 0 0;">
                    <ul style="color:#000;">
                        <li style="color: #000; font-size:16px;">
                            By consciously choosing to incorporate positive behaviors into
                        </li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td style="padding: 0px 0 0 12px;  width:100%; color: #000; font-size:16px">
                    your daily routine, you
                    can
                    significantly enhance your happiness and sense of fulfillment.
                </td>
            </tr>
            <tr>
                <td style=" text-align: start; padding: 40px 0 0 0;">
                    <table style="width: 100%">
                        <tbody>
                            <tr>
                                <td style="width: 50%;">
                                    <img src="{{ $raviMundrraBannerOneSrc }}" alt="ganpati"
                                        style="max-width:100%; height:150px;">
                                </td>
                                <td style="width: 50%;">
                                    <img src="{{ $raviMundrraBannerTwoSrc }}" alt="ganpati"
                                        style="max-width:100%; height:150px; border:1px solid #000;">
                                </td>
                            </tr>
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
{{-- </div> --}}
