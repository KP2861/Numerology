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
                        Creating Affirmation
                    </h2>
                </td>
            </tr>
            <tr>
                <td style=" text-align: center; padding: 10px 0 0 0;">
                    <p style="color:#000; font-size:14px ">
                        Creating Affirmation and Abundance/Prosperity Cheque Aura
                    </p>
                </td>
            </tr>
            <tr>
                <td style=" text-align: start; padding: 30px 0 0 0;">
                    <h5 style="color:#000; font-size:18px ">
                        What are Affirmations?
                    </h5>
                </td>
            </tr>
            <tr>
                <td style=" padding: 10px 0 0 0;">
                    <p style="color:#000; font-size:14px ">
                        Affirmations are simple statements we make in our day-to-day lives. They can be positive or
                        negative and may arise from the subconscious mind. Affirmations can occur naturally or be
                        intentional.
                    </p>
                </td>
            </tr>
            <tr>
                <td style=" padding: 15px 0 0 0;">
                    <p style="color:#000; font-size:14px ">
                        Here, we will focus on creating positive affirmations.
                    </p>
                </td>
            </tr>
            <tr>
                <td style=" text-align: start; padding: 10px 0 0 0;">
                    <ul style="color:#000;">
                        <li style="color: #000; font-size:14px;">
                            Start with the words "I am." These are the two most powerful words.
                        </li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td style=" text-align: start; padding: 10px 0 0 0;">
                    <ul style="color:#000;">
                        <li style="color: #000; font-size:14px;">
                            Use the present tense.
                        </li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td style=" text-align: start; padding: 10px 0 0 0;">
                    <ul style="color:#000;">
                        <li style="color: #000; font-size:14px;">
                            State it in the positive—affirm what you want, not what you don’t want.
                        </li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td style=" text-align: start; padding: 10px 0 0 0;">
                    <ul style="color:#000;">
                        <li style="color: #000; font-size:14px;">
                            Keep it brief.
                        </li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td style=" text-align: start; padding: 10px 0 0 0;">
                    <ul style="color:#000;">
                        <li style="color: #000; font-size:14px;">
                            Make it specific.
                        </li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td style=" text-align: start; padding: 10px 0 0 0;">
                    <ul style="color:#000;">
                        <li style="color: #000; font-size:14px;">
                            Include an action word ending with -ing.
                        </li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td style=" text-align: start; padding: 10px 0 0 0;">
                    <ul style="color:#000;">
                        <li style="color: #000; font-size:14px;">
                            Include at least one dynamic emotion or feeling word.
                        </li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td style=" text-align: start; padding: 10px 0 0 0;">
                    <ul style="color:#000;">
                        <li style="color: #000; font-size:14px;">
                            Make affirmations for yourself, not others.
                        </li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td style=" padding: 20px 0 0 0;">
                    <p style="color:#000; font-size:14px; font-weight:bold ">
                        Examples:
                    </p>
                </td>
            </tr>
            <tr>
                <td style=" text-align: start; padding: 10px 0 0 0;">
                    <ul style="color:#000;">
                        <li style="color: #000; font-size:14px;">
                            I can slow my breathing to release the anxiety I feel.
                        </li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td style=" text-align: start; padding: 10px 0 0 0;">
                    <ul style="color:#000;">
                        <li style="color: #000; font-size:14px;">
                            I am enough, and I am growing.
                        </li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td style=" text-align: start; padding: 10px 0 0 0;">
                    <ul style="color:#000;">
                        <li style="color: #000; font-size:14px;">
                            I am worthy of increasing my income.
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
{{-- </div> --}}








{{-- <div class="container">
        <h1>Creating Affirmation</h1>
        <div class="affirmation-content">
            <h3>Creating Affirmation and Abundance/Prosperity Cheque Aura</h3>
            <h3>What are Affirmations?</h3>
            <p>Affirmations are simple statements we make in our day-to-day lives. They can be positive or negative and may arise from the subconscious mind. Affirmations can occur naturally or be intentional.</p>
            <p>Here, we will focus on creating positive affirmations.</p>

            <h2>Steps to Create an Affirmation:</h2>
            <ul>
                <li>Start with the words "I am." These are the two most powerful words.</li>
                <li>Use the present tense.</li>
                <li>State it in the positive—affirm what you want, not what you don’t want.</li>
                <li>Keep it brief.</li>
                <li>Make it specific.</li>
                <li>Include an action word ending with -ing.</li>
                <li>Include at least one dynamic emotion or feeling word.</li>
                <li>Make affirmations for yourself, not others.</li>
            </ul>

            <h3>Examples:</h3>
            <ul>
                <li>I can slow my breathing to release the anxiety I feel.</li>
                <li>I am enough, and I am growing.</li>
                <li>I am worthy of increasing my income.</li>
            </ul>
        </div>
        <div class="footer">
            @include('pdf.static_page.footer')
        </div>
    </div> --}}
