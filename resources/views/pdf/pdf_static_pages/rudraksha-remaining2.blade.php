@php
    // Get the path to the images
    $imageRudraksha2 = public_path('frontend/assests/images/pdf/rudraksha-compressed-new-2.png');
    // Read the file contents and encode them
    $imageRudraksha2Content = base64_encode(file_get_contents($imageRudraksha2));

    // Format the images as base64 data URIs
    $imageRudraksha2Src = 'data:image/png;base64,' . $imageRudraksha2Content;
@endphp

{{-- <div
    style="background-image: url('{{ $imageRudraksha2Src }}'); background-size: cover; background-position: center; margin:auto; width:100%; height:100%;"> --}}
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
           


            {{-- <tr>
                <td style=" padding: 00px 0 0 0;">
                    <p style="color:#000; font-size:18px;; font-weight:bold ">
                        रुद्राक्ष कब धारण करना चाहिए?

                    </p>
                </td>
            </tr>
            <tr>
                <td style=" padding: 10px 0 0 0;">
                    <p style="color:#000; font-size:16px; ">
                        रुद्राक्ष को सोमवार के दिन या किसी शुभ मुहूर्त में धारण करना सबसे अच्छा माना जाता है। विशेषकर
                        पूर्णिमा,
                        महाशिवरात्रि, और प्रदोष व्रत के दिन इसे धारण करना शुभ होता है।
                    </p>
                </td>
            </tr>
            <tr>
                <td style=" padding: 20px 0 0 0;">
                    <p style="color:#000; font-size:18px;; font-weight:bold ">
                        रुद्राक्ष को कब साफ करना चाहिए?
                    </p>
                </td>
            </tr>
            <tr>
                <td style=" padding: 10px 0 0 0;">
                    <p style="color:#000; font-size:16px; ">
                        रुद्राक्ष को नियमित रूप से साफ करना चाहिए, खासकर हर पूर्णिमा या अमावस्या के दिन। इसे गंगाजल,
                        कच्चे दूध या
                        ताजे पानी से धो सकते हैं और बाद में धूप में सूखा सकते हैं
                    </p>
                </td>
            </tr>
            <tr>
                <td style=" padding: 20px 0 0 0; text-align:justify">
                    <p style="color:#000; font-size:16px; ">
                        हम आपकी ग्रह स्थिति और विशिष्ट व्यावसायिक समस्याओं के आधार पर उपयुक्त रुद्राक्ष की सिफारिश कर
                        सकते
                        हैं। रुद्राक्ष के मोती जीवन में केवल सकारात्मक परिणाम लाने के लिए जाने जाते हैं, जो आपकी
                        व्यक्तिगत
                        और व्यावसायिक वृद्धि को बढ़ावा देते हैं, और आपके ज्योतिषीय आवश्यकताओं के साथ
                        सामंजस्य
                        स्थापित करते हैं।
                    </p>
                </td>
            </tr> --}}

        </tbody>
    </table>
</div>
{{-- <div style="height: 200px;">
    @include('pdf.static_page.footer')
</div> --}}
