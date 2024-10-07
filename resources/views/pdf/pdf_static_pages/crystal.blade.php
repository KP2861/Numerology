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
                <td style=" text-align: center; padding: 0px 0 0 0;">
                    <h2 style="color:#E97132; font-weight:bold; font-size:28px">
                        Crystals Enhance Personal growth
                    </h2>
                </td>
            </tr>
            <tr>
                <td style=" text-align: center; padding: 0px 0 0 0;">
                    <p style="color:#000; font-size:14px ">
                        and well-being by aligning energy and fostering positive change.
                    </p>
                </td>
            </tr>
            <tr>
                <td style=" padding: 20px 0 0 0; font-size:14px">
                    <span style="font-weight: bold">Crystal: </span> {{ $result['Crystal Details']['crystal'] ?? 'N/A' }}
                </td>
            </tr>
            <tr>
                <td style="padding: 10px 0 0 0; font-size:14px">
                    <strong>Crystal Detail:</strong>
                </td>
            </tr>
            <tr>
                <td style="padding: 5px 0 0 0; font-size:14px; text-align:justify">
                    {{ $result['Crystal Details']['details'] ?? 'N/A' }}
                </td>
            </tr>

            <tr>
                <td style="text-align: start; padding: 20px 0 0 0; font-weight:bold">
                    To receive your personalized consultation, please book your appointment now.
                </td>
            </tr>

        </tbody>
    </table>
</div>
{{-- <div style="height: 200px;">
    @include('pdf.static_page.footer')
</div> --}}
{{-- </div> --}}
