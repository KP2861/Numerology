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

<a name="sanjeevaniCards"></a>
 
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
                    <h2 style="color:#EC4400;font-weight:bold; font-size:28px">
                        Sanjeevani Cards
                    </h2>
                </td>
            </tr>
            <tr>
                <td style=" padding: 10px 0 0 0;">
                    <p style="color:#000; font-size:14px ">
                        Sanjeevani Cards are a spiritual tool associated with healing and wellness, inspired by the
                        teachings and
                        energy of Sathya Sai Baba. Here’s a detailed overview:
                    </p>
                </td>
            </tr>
            <tr>
                <td style=" padding: 10px 0 0 0;">
                    <p style="color:#000; font-size:18px; font-weight:bold ">
                        Sanjeevani Cards Overview
                    </p>
                </td>
            </tr>
            <tr>
                <td style="padding: 10px 0 0 0;  width:100%; color: #000">
                    <div style="width:100%;">
                        <p
                            style="color: #000; margin-bottom:30px; padding-bottom:30px; font-weight:bold; font-size:14px">
                            1. Purpose:
                        </p>
                    </div>
                </td>
            </tr>
            <tr>
                <td style="padding: 5px 0 0 20px;  width:100%; color: #000; font-size:14px">
                    Sanjeevani Cards are designed to support physical, emotional, and
                    spiritual healing. They are believed to channel divine energy to aid in well-being and recovery.
                </td>
            </tr>
            <tr>
                <td style="padding: 10px 0 0 0;  width:100%; color: #000">
                    <div style="width:100%;">
                        <p
                            style="color: #000; margin-bottom:30px; padding-bottom:30px; font-weight:bold; font-size:14px">
                            2. How to Use:
                        </p>
                    </div>
                </td>
            </tr>
            <tr>
                <td style="padding: 5px 0 0 20px;  width:100%; color: #000; font-size:14px">
                    <table style="width: 100%">
                        <tbody>
                            <tr>
                                <td style="padding: 0px 0 0 0;  width:100%; color: #000">
                                    <div style="width:100%;">
                                        <ul style="color:#000; list-style-type: disc; padding-left: 20px;">
                                            <li
                                                style="color: #000; margin-bottom:30px; padding-bottom:30px;  font-size:14px">
                                                Meditation:
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 5px 0 0 10px;  width:100%; color: #000; font-size:14px">
                                    Hold the card in your hands or place it on the affected area
                                    while meditating. Focus on the healing energy of the card.
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 10px 0 0 0;  width:100%; color: #000">
                                    <div style="width:100%;">
                                        <ul style="color:#000; list-style-type: disc; padding-left: 20px;">
                                            <li
                                                style="color: #000; margin-bottom:30px; padding-bottom:30px;  font-size:14px">
                                                Affirmations:
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 5px 0 0 10px;  width:100%; color: #000; font-size:14px">
                                    Recite affirmations or prayers related to health and healing
                                    while using the card.
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 10px 0 0 0;  width:100%; color: #000">
                                    <div style="width:100%;">
                                        <ul style="color:#000; list-style-type: disc; padding-left: 20px;">
                                            <li
                                                style="color: #000; margin-bottom:30px; padding-bottom:30px;  font-size:14px">
                                                Visualization:
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 5px 0 0 10px;  width:100%; color: #000; font-size:14px">
                                    Visualize healing light or energy from the card surrounding
                                    and healing the area of concern.
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr>
                <td style="padding: 10px 0 0 0;  width:100%; color: #000">
                    <div style="width:100%;">
                        <p
                            style="color: #000; margin-bottom:30px; padding-bottom:30px; font-weight:bold; font-size:14px">
                            3. Placement:
                        </p>
                    </div>
                </td>
            </tr>
            <tr>
                <td style="padding: 5px 0 0 20px;  width:100%; color: #000; font-size:14px">
                    You can place the card in your meditation space, near your bedside, or
                    carry it with you to continuously receive its healing energy.
                </td>
            </tr>
            <tr>
                <td style="padding: 10px 0 0 0;  width:100%; color: #000">
                    <div style="width:100%;">
                        <p
                            style="color: #000; margin-bottom:30px; padding-bottom:30px; font-weight:bold; font-size:14px">
                            4. Blessings:
                        </p>
                    </div>
                </td>
            </tr>
            <tr>
                <td style="padding: 5px 0 0 20px;  width:100%; color: #000; font-size:14px">
                    The card is thought to carry divine blessings and healing energy that
                    support overall wellness and personal growth.
                </td>
            </tr>
        </tbody>
    </table>
</div>
{{-- <div style="height: 200px;">
    @include('pdf.static_page.footer')
</div> --}}







{{-- <div class="container">
    <h1>Sanjeevani Cards</h1>

    <div class="content">
        <p>Sanjeevani Cards are a spiritual tool associated with healing and wellness, inspired by the teachings and
            energy of Sathya Sai Baba. Here’s a detailed overview:</p>

        <div class="section">
            <h2>Sanjeevani Cards Overview</h2>
            <ol>
                <li><strong>Purpose:</strong> Sanjeevani Cards are designed to support physical, emotional, and
                    spiritual healing. They are believed to channel divine energy to aid in well-being and recovery.
                </li>
                <li><strong>How to Use:</strong>
                    <ul>
                        <li><strong>Meditation:</strong> Hold the card in your hands or place it on the affected area
                            while meditating. Focus on the healing energy of the card.</li>
                        <li><strong>Affirmations:</strong> Recite affirmations or prayers related to health and healing
                            while using the card.</li>
                        <li><strong>Visualization:</strong> Visualize healing light or energy from the card surrounding
                            and healing the area of concern.</li>
                    </ul>
                </li>
                <li><strong>Placement:</strong> You can place the card in your meditation space, near your bedside, or
                    carry it with you to continuously receive its healing energy.</li>
                <li><strong>Blessings:</strong> The card is thought to carry divine blessings and healing energy that
                    support overall wellness and personal growth.</li>
            </ol>
        </div>

        <div class="section">
            <h2>For Daily Use Tip</h2>
            <p>Print the Sanjeevani Cards, laminate them, and keep them on your water bottle for at least 10 minutes.
                Drink the water with the positive affirmation: "I am healthy and grateful to the universe."</p>
            <p>Below we have shared some of the Sanjeevani Cards. For specific conditions or diseases, you can connect
                with us to get a remedial card.</p>
        </div>
    </div>

    <div class="footer">
        @include('pdf.static_page.footer')
    </div>
</div> --}}
