@php
    // Get the path to the images
    $imageRudraksha1 = public_path('frontend/assests/images/pdf/rudraksha-compressed-new-1.png');
    $imageRudraksha2 = public_path('frontend/assests/images/pdf/rudraksha-compressed-new-2.png');
    // $imageRudraksha1 = public_path('frontend/assests/images/pdf/ganesha-new.png');
    // Read the file contents and encode them
    $imageRudraksha1Content = base64_encode(file_get_contents($imageRudraksha1));
    $imageRudraksha2Content = base64_encode(file_get_contents($imageRudraksha2));

    // Format the images as base64 data URIs
    $imageRudraksha1Src = 'data:image/png;base64,' . $imageRudraksha1Content;
    $imageRudraksha2Src = 'data:image/png;base64,' . $imageRudraksha2Content;

    // Read the file contents and encode them

    // Format the images as base64 data URIs

@endphp

{{-- <div
    style="background-image: url('{{ $backgroundPdfSrc }}'); background-size: cover; background-position: center; margin:auto; width:100%; height:100%;"> --}}
<div style="height: 800px; width:70%; margin:0 auto;  ">
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
                <td style=" padding: 0px 0 0 0; text-align:justify">
                    <p style="color:#000; font-size:16px; ">
                        हे देवी! बेर के समान रुद्राक्ष छोटा होने पर भी लोक में उत्तम फल देने वाला तथा सुख, सौभाग्य की
                        वृद्धि करने
                        वाला होता है। जो रुद्राक्ष आंवले के बराबर है, वह सभी अनिष्टों का विनाश करने वाला तथा सभी मनोरथों
                        को
                        पूर्ण करने वाला होता है। रुद्राक्ष जैसे-जैसे छोटा होता है, वैसे ही वैसे अधिक फल देने वाला होता
                        है। पापों
                        का नाश करने के लिए रुद्राक्ष धारण अवश्य करना चाहिए। यह संपूर्ण अभीष्ट फलों की प्राप्ति सुनिश्चित
                        करता
                        है। लोक में मंगलमय रुद्राक्ष जैसा फल देने वाला कुछ भी नहीं है। समान आकार वाले चिकने, गोल, मजबूत,
                        मोटे,
                        कांटेदार रुद्राक्ष (उभरे हुए छोटे-छोटे दानों वाले रुद्राक्ष ) सब मनोरथ सिद्धि एवं भक्ति-मुक्ति
                        दायक हैं
                        किंतु कीड़ों द्वारा खाए गए, टूटे-फूटे, कांटों से युक्त तथा जो पूरा गोल न हो, इन पांच प्रकार के
                        रुद्राक्षों का त्याग करें। जिस रुद्राक्ष में अपने आप डोरा पिरोने के लिए छेद हो, वही उत्तम माना
                        गया है।
                    </p>
                </td>
            </tr>

            <tr>
                <td style=" padding: 10px 0 0 0; text-align:justify">
                    <p style="color:#000; font-size:16px; ">
                        जिसमें मनुष्य द्वारा छेद किया हो उसे मध्यम श्रेणी का माना जाता है। इस जगत ग्यारह सौ रुद्राक्ष
                        धारण करके
                        मनुष्य जो फल पाता है, उसका में वर्णन नहीं किया जा सकता। भक्तिमान पुरुष साढ़े पांच सौ रुद्राक्ष
                        के दानों
                        का मुकुट बना ले और उसे सिर पर धारण करे। तीन सौ साठ दानों का हार बना ले, ऐसे तीन हार बनाकर उनका
                        यज्ञोपवीत
                        धारण करे
                    </p>
                </td>
            </tr>
            <tr>
                <td style=" padding: 10px 0 0 0;">
                    <p style="color:#000; font-size:16px; ">
                        महर्षियो! सिर पर ईशान मंत्र से कान में तत्पुरुष मंत्र से रुद्राक्ष धारण करना चाहिए। गले में
                        रुद्राक्ष,
                        मस्तक पर त्रिपुण्डधारी रुद्राक्ष पहने 'ॐ नमः शिवाय' मंत्र का जाप करने वाला मनुष्य यमपुर को नहीं
                        जाता।
                        रुद्राक्ष माला पर मंत्र जपने का करोड़ गुना फल मिलता है
                    </p>
                </td>
            </tr>

            <tr>
                <td style=" padding: 0px 0 0 0;">
                    <img src="{{ $imageRudraksha1Src }}" alt="ganpati" style="margin:20px 0px; width:500px">
                </td>
            </tr>
            <tr>
                <td style=" padding: 40px 0 0 0;">
                    <img src="{{ $imageRudraksha2Src }}" alt="ganpati" style="margin:20px 0px; width:500px">
                </td>
            </tr>

            <tr>
                <td style=" padding: 20px 0 0 0;">
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
            </tr>

        </tbody>
    </table>
</div>
{{-- <div style="height: 200px;">
    @include('pdf.static_page.footer')
</div> --}}
