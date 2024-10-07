@php
    // Get the path to the images
    $imageSanjeevani1 = public_path('frontend/assests/images/pdf/sanjeevini-1.png');
    $imageSanjeevani2 = public_path('frontend/assests/images/pdf/sanjeevini-2.png');

    // Read the file contents and encode them
    $imageSanjeevani1Content = base64_encode(file_get_contents($imageSanjeevani1));
    $imageSanjeevani2Content = base64_encode(file_get_contents($imageSanjeevani2));

    // Format the images as base64 data URIs
    $imageSanjeevani1Src = 'data:image/png;base64,' . $imageSanjeevani1Content;
    $imageSanjeevani2Src = 'data:image/png;base64,' . $imageSanjeevani2Content;

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
                <td style="padding: 0px 0 0 0px;  width:100%; color: #000; font-size:14px">
                    Print the Sanjeevani Cards, laminate them, and keep them on your water bottle for at least 10
                    minutes.
                    Drink the water with the positive affirmation: "I am healthy and grateful to the universe."
                </td>
            </tr>
            <tr>
                <td style="padding: 15px 0 0 0px;  width:100%; color: #000; font-size:14px">
                    Below we have shared some of the Sanjeevani Cards. For specific conditions or diseases, you can
                    connect
                    with us to get a remedial card.
                </td>
            </tr>
            <tr>
                <td>
                    <table style="width: 100%">
                        <tbody> 
                            <tr>
                                <td style="width: 50%;">
                                    <img src="{{ $imageSanjeevani1Src }}" alt="ganpati"
                                        style="margin:20px 0px; width:200px">
                                </td>
                                <td style="width: 50%;">
                                    <img src="{{ $imageSanjeevani2Src }}" alt="ganpati"
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
