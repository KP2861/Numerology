@php
    // Get the path to the image
    $imagePath = public_path('frontend/assests/images/pdf/g-pay-qr.png');
    $imagePath2 = public_path('frontend/assests/images/pdf/upi.png');

    // Read the file contents
    $imageData = base64_encode(file_get_contents($imagePath));
    $imageData2 = base64_encode(file_get_contents($imagePath2));

    // Format the image as a base64 data URI
    $imageSrc = 'data:image/png;base64,' . $imageData;
    $imageSrc2 = 'data:image/png;base64,' . $imageData2;
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
                    <h2 style="color:#E97132; font-weight:bold; font-size:28px">Services Offered
                    </h2>
                </td>
            </tr>
            <tr>
                <td style=" text-align: start; padding: 10px 0 0 0;">
                    <h3 style="color:#000;  font-size:18px  ">
                        Get your happiness and fortune with our Numerology
                        and Astrology Science!
                    </h3>
                </td>
            </tr>
            <tr style="width: 100%; ">
                <td style=" text-align: start; vertical-align:top; padding: 15px 0 0 0;">
                    <h5 style="color:#000; font-size:16px; font-weight:normal; ">
                        Below offering various services related to
                        astrology and numerology consultations.
                        Here’s a breakdown and clarification
                        based on what you've provided:
                    </h5>
                </td>
            </tr>

            <tr style="width: 100%; padding-top:30px">
                <td
                    style=" text-align: start; vertical-align:top; vertical-align:top;   padding: 15px 0 0 0; width:100%">
                    <h5 style="color:#000; font-size:16px ">
                        Only Report ( <span style="color: #000">752 INR</span> ) :
                    </h5>
                </td>
            </tr>
            <tr style="width: 100%; padding-top:30px">
                <td
                    style=" vertical-align:top; text-align:justify; vertical-align:top;   padding: 5px 0 0 0; width:100%">
                    <p style="color #000; font-size:16px">
                        This service likely involves a
                        basic report based on
                        numerological analysis. It
                        include general insights
                        about person's
                        characteristics, strengths,
                        or potential future trends
                        based on their birth details.
                    </p>
                </td>
            </tr>
            <tr>
                <td style=" text-align: start; padding: 15px 0 0 0;">
                    <h5 style="color:#000; font-size:16px ">
                        Detailed report with 10 minutes
                        discussion ( <span style="color: #000">1400 INR</span> ) :
                    </h5>
                </td>
            </tr>
            <tr style="width: 100%; padding-top:30px">
                <td
                    style=" text-align: start; vertical-align:top; vertical-align:top;   padding: 5px 0 0 0; width:100%">
                    <p style="color #000; font-size:16px">
                        This service includes a basic report based on astrological or
                        numerological analysis. It contains general information
                        about a person's characteristics, strengths or possible future
                        trends based on their birth details. Details of how to please
                        all the planets from your home are explained.
                    </p>
                </td>
            </tr>
            <tr style="width: 100%;">
                <td style=" padding: 25px 0 0 0;">
                    <table style="width: 100%">
                        <tbody>
                            <tr>
                                <td style="vertical-align:middle;">
                                    <div>
                                        <p style="color:#000; font-size:14px ">
                                            UPI : <a href="#" style="color:#0B77CE;">Mundra.ravi@okhdfcbank</a>
                                            Pay
                                        </p>
                                        <br>
                                        <p style="color:#000; font-size:14px ;padding-top:20px ">
                                            Share the screen shot on what’s up
                                            on +919712090796</p>
                                    </div>
                                </td>
                                <td
                                    style="width:30%; background:#F3F6FC; text-align:center; vertical-align:top; padding:10px">
                                    <div>
                                        <img src="{{ $imageSrc }}" alt="ganpati"
                                            style="margin:0 auto; max-width:100%; height:auto; width:70px">
                                    </div>
                                    <p style="font-size: 12px">
                                        UPI ID: mundra.ravi@okhdfcbank
                                    </p>
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
