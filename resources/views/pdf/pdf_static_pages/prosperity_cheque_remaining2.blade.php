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
                    <p style="color:#000; font-size:14px ">
                        Attach Zibu symbols for abundance to amplify the energy, and fold or staple the letter to your
                        cheque.
                    </p>
                </td>
            </tr>
            <tr>
                <td style=" padding: 15px 0 0 0;">
                    <p style="color:#000; font-size:14px; font-weight:bold ">
                        Energizing the Ritual:
                    </p>
                </td>
            </tr>
            <tr>
                <td style=" padding: 15px 0 0 0; text-align:justify">
                    <p style="color:#000; font-size:14px ">
                        If you’re inclined, use crystals that attract abundance such as Citrine, Green Aventurine,
                        Tiger’s Eye, Jade,
                        or Sunstone. You can call upon the Goddess Lakshmi for blessings. Offer your gratitude to her
                        for showering
                        golden prosperity into your life.
                    </p>
                </td>
            </tr>
            <tr>
                <td style=" padding: 15px 0 0 0; text-align:justify">
                    <p style="color:#EC4400; font-size:14px ">
                        Place the cheque in a safe, sacred space like an altar or a wealth area in your home. Release
                        control over
                        how or when abundance flows to you—trust the Universe to manage the details.
                    </p>
                </td>
            </tr>
            <tr>
                <td style=" padding: 15px 0 0 0;">
                    <p style="color:#000; font-size:14px; font-weight:bold ">
                        Closing the Ritual:
                    </p>
                </td>
            </tr>
            <tr>
                <td style=" padding: 15px 0 0 0;">
                    <p style="color:#000; font-size:14px ">
                        If you choose, you can release the energy on No Moon day (Amavasya) by burning the cheque with a
                        white candle
                        and scattering the ashes into the universe, or by any other method that resonates with you.
                    </p>
                </td>
            </tr>
            <tr>
                <td style=" padding: 15px 0 0 0;">
                    <p style="color:#000; font-size:14px ">
                        Be sure to offer deep gratitude for the abundance already present in your life, and remain open
                        to what is
                        yet to come.
                    </p>
                </td>
            </tr>
            <tr>
                <td style=" padding: 15px 0 0 0;">
                    <p style="color:#000; font-size:14px ">
                        Note: The cheque can be placed in your cash box, wealth area, or a crystal grid surrounded by
                        abundance-attracting crystals.
                    </p>
                </td>
            </tr>




        </tbody>
    </table>
</div>
{{-- <div style="height: 200px;">
    @include('pdf.static_page.footer')
</div> --}}
