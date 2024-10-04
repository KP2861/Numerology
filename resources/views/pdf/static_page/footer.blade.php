@php
    // Get the path to the image
    // $imagePath = public_path('frontend/assests/images/pdf/footer-scanner-img.png');
    $raviMundraImagePathFooter = storage_path('app/public/' . $result['footerData']['footer_img']);

    // Read the file contents
    // $imageData = base64_encode(file_get_contents($imagePath));
    $raviMundrraImageDataFooter = base64_encode(file_get_contents($raviMundraImagePathFooter));

    // Format the image as a base64 data URI
    // $imageSrc = 'data:image/png;base64,' . $imageData;
    $raviMundrraImageSrcFooter = 'data:image/png;base64,' . $raviMundrraImageDataFooter;
@endphp
<div style="height: 200px; ">
    <div style="margin:0 40px 0px 40px; ">
        <table style="margin: 0 70px 40px 70px; width:100%;">
            <tbody>
                <tr>

                    <td>
                        {{-- <div>
                            <img src="{{ $imageSrc }}" alt="ganpati" style="max-width:100%; height:100px">
                        </div> --}}
                    </td>

                    <td rowspan="7" style=" vertical-align:bottom; ">
                        <img src="{{ $raviMundrraImageSrcFooter }}" alt="ganpati" style="width: 150px">
                    </td>
                </tr>
                <tr>
                    <td>
                        <p style="font-size:16px; color:#000; font-weight:700; margin:0;">
                            Book your appointment now
                        </p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p style="font-size:16px; color:#000; font-weight:700; margin:0;">
                            Call us on <span style="font-weight: bold; color:#EC4400">7096925750</span>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h6 style="font-size:16px; color:#EC4400; font-weight:700; margin:10px 0 20px 0;">
                            Follow, subscribe like our channel.
                        </h6>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="#"
                            style=" font-size:14px; color: #0B77CE; font-weight:700; display: block;
               word-break: break-word;
               overflow-wrap: break-word;  margin:4px 0; display:block; text-decoration:none">https.//www.youtube.com/@RaviMundrraNumerology</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="#"
                            style=" font-size:14px; color: #0B77CE; font-weight:700; display: block;
               word-break: break-word;
               overflow-wrap: break-word;  margin:4px 0; display:block; text-decoration:none">https.//www.facebook.com/@RaviMundrraNumerology</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="#"
                            style=" font-size:14px; color: #0B77CE; font-weight:700; display: block;
           word-break: break-word;
           overflow-wrap: break-word;  margin:4px 0; display:block; text-decoration:none">https.//www.instagram.com/@RaviMundrraNumerology</a>
                    </td>
                </tr>

                <tr>
                    <td colspan="2" style="text-align:center; padding-top:20px; vertical-align: middle;">
                        {{-- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; --}}
                        {PAGENO}
                        {{-- <p style="font-size: 18px; font-weight:bold; text-align:center; width:20px; margin:0 auto">
                        {PAGENO}
                    </p> --}}
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
