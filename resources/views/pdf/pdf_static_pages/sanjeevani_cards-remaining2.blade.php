@php
    // Get the path to the images
    $imageSanjeevani3 = public_path('frontend/assests/images/pdf/sanjeevini-3.png');
    $imageSanjeevani4 = public_path('frontend/assests/images/pdf/sanjeevini-4.png');

    // Read the file contents and encode them
    $imageSanjeevani3Content = base64_encode(file_get_contents($imageSanjeevani3));
    $imageSanjeevani4Content = base64_encode(file_get_contents($imageSanjeevani4));

    // Format the images as base64 data URIs
    $imageSanjeevani3Src = 'data:image/png;base64,' . $imageSanjeevani3Content;
    $imageSanjeevani4Src = 'data:image/png;base64,' . $imageSanjeevani4Content;
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
                <td style="padding: 0px 0 0 0">
                    <table style="width: 100%">
                        <tbody>
                            <tr>
                                <td style="width: 50%;">
                                    <img src="{{ $imageSanjeevani3Src }}" alt="ganpati"
                                        style="margin:20px 0px; width:200px">
                                </td>
                                <td style="width: 50%;">
                                    <img src="{{ $imageSanjeevani4Src }}" alt="ganpati"
                                        style="margin:20px 0px; width:200px">
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
