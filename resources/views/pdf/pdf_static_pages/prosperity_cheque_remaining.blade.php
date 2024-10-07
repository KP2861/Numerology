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
                    <p style="color:#000; font-size:14px; font-weight:bold ">
                        Steps to Follow:
                    </p>
                </td>
            </tr>
            <tr>
                <td style=" text-align: start; padding: 10px 0 0 0;">
                    <ul style="color:#000;">
                        <li style="color: #000; font-size:14px;">
                            Print out the abundance and prosperity cheque provided (or create your own) within 24 hours
                            of the New
                            Moon.
                        </li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td style=" text-align: start; padding: 10px 0 0 0;">
                    <ul style="color:#000;">
                        <li style="color: #000; font-size:14px;">
                            Use a red or green pen for the process.
                        </li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td style=" text-align: start; padding: 10px 0 0 0;">
                    <ul style="color:#000;">
                        <li style="color: #000; font-size:14px;">
                            Where it says “Pay to,” write your name.
                        </li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td style=" text-align: start; padding: 10px 0 0 0;">
                    <ul style="color:#000;">
                        <li style="color: #000; font-size:14px;">
                            In the box, write “paid in full.”
                        </li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td style=" text-align: start; padding: 10px 0 0 0;">
                    <ul style="color:#000;">
                        <li style="color: #000; font-size:14px;">
                            Where the dollar amount is specified, write “paid in full,” or, if you wish, a specific
                            amount (but keep
                            it realistic).
                        </li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td style=" text-align: start; padding: 10px 0 0 0;">
                    <ul style="color:#000;">
                        <li style="color: #000; font-size:14px;">
                            You can put a date on the cheque to track when the abundance arrives.
                        </li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td style=" padding: 15px 0 0 0;">
                    <p style="color:#000; font-size:14px; font-weight:bold ">
                        Adding Affirmations to Your Ritual
                    </p>
                </td>
            </tr>
            <tr>
                <td style=" padding: 5px 0 0 0;">
                    <p style="color:#000; font-size:14px; font-weight:bold ">
                        On green paper, write affirmations such as:
                    </p>
                </td>
            </tr>
            <tr>
                <td style=" text-align: start; padding: 10px 0 0 0;">
                    <ul style="color:#000;">
                        <li style="color: #000; font-size:14px;">
                            "I am open to abundance."
                        </li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td style=" text-align: start; padding: 10px 0 0 0;">
                    <ul style="color:#000;">
                        <li style="color: #000; font-size:14px;">
                            "I am deserving of prosperity."
                        </li>
                    </ul>
                </td>
            </tr>

            <tr>
                <td style=" text-align: start; padding: 10px 0 0 0;">
                    <ul style="color:#000;">
                        <li style="color: #000; font-size:14px;">
                            "I am open to the ways abundance manifests in my life."
                        </li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td style=" text-align: start; padding: 10px 0 0 0;">
                    <ul style="color:#000;">
                        <li style="color: #000; font-size:14px;">
                            "I am thankful for the blessings and prosperity coming my way."
                        </li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td style=" text-align: start; padding: 10px 0 0 0;">
                    <ul style="color:#000;">
                        <li style="color: #000; font-size:14px;">
                            "I am thankful for the abundance in my life and welcome more."
                        </li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td style=" text-align: start; padding: 10px 0 0 0;">
                    <ul style="color:#000;">
                        <li style="color: #000; font-size:14px;">
                            You may also add the phrase: "I love money, and money loves me."
                        </li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td style=" text-align: start; padding: 10px 0 0 0;">
                    <ul style="color:#000;">
                        <li style="color: #000; font-size:14px;">
                            Incorporate money numbers like: 520, 741, 528, 1216, 1176, 234451.
                        </li>
                    </ul>
                </td>
            </tr>
        </tbody>
    </table>
</div>
{{-- <div style="height: 200px;">
    @include('pdf.static_page.footer')
</div> --}}
