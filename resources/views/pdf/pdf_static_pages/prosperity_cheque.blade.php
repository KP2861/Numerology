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

<a name="prosperityCheque"></a>
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
                        Prosperity Cheque Ritual for Abundance
                    </h2>
                </td>
            </tr>
            <tr>
                <td style=" padding: 10px 0 0 0;">
                    <p style="color:#000; font-size:14px ">
                        This simple yet potent ritual harnesses the energy of the New Moon each month to manifest
                        abundance and
                        prosperity.
                    </p>
                </td>
            </tr>
            <tr>
                <td style=" padding: 10px 0 0 0;">
                    <img src="{{ $imageChequeSrc }}" alt="cheque" style="max-width:100%; height:230px;">
                </td>
            </tr>



            <tr>
                <td style=" padding: 10px 0 0 0;">
                    <p style="color:#000; font-size:14px ">
                        New Moon Cheques should be created within 24 hours after the New Moon to tap into its creative
                        potential,
                        seeding your desires into the Universe. These cheques can bring abundance into your life in
                        various, often
                        unexpected ways.
                    </p>
                </td>
            </tr>
            <tr>
                <td style=" padding: 15px 0 0 0;">
                    <p style="color:#000; font-size:14px ">
                        Be grateful for the abundance and prosperity that flow into your life. Stay open to how they
                        unfold.
                    </p>
                </td>
            </tr>
        </tbody>
    </table>
</div>
{{-- <div style="height: 200px;">
    @include('pdf.static_page.footer')
</div> --}}















{{-- <div class="container">
    <h1>Prosperity Cheque Ritual for Abundance</h1>

    <div class="content">
        <p>This simple yet potent ritual harnesses the energy of the New Moon each month to manifest abundance and
            prosperity.</p>
        <p> New Moon Cheques should be created within 24 hours after the New Moon to tap into its creative potential,
            seeding your desires into the Universe. These cheques can bring abundance into your life in various, often
            unexpected ways. </p>
        <p>Be grateful for the abundance and prosperity that flow into your life. Stay open to how they unfold.</p>

        <h2>Steps to Follow:</h2>
        <ol>
            <li>Print out the abundance and prosperity cheque provided (or create your own) within 24 hours of the New
                Moon.</li>
            <li>Use a red or green pen for the process.</li>
            <li>Where it says “Pay to,” write your name.</li>
            <li>In the box, write “paid in full.”</li>
            <li>Where the dollar amount is specified, write “paid in full,” or, if you wish, a specific amount (but keep
                it realistic).</li>
            <li>You can put a date on the cheque to track when the abundance arrives.</li>
        </ol>
    </div>

    <div class="cheque">
        <h2>Prosperity Cheque</h2>
        <p>Date: <input type="text" placeholder="Date"></p>
        <p>Pay to: <input type="text" placeholder="Your Name"></p>
        <p>Amount: <input type="text" placeholder="Paid in Full"></p>
    </div>

    <div class="affirmations">
        <h2>Adding Affirmations to Your Ritual</h2>
        <p>On green paper, write affirmations such as:</p>
        <ul>
            <li>"I am open to abundance."</li>
            <li>"I am deserving of prosperity."</li>
            <li>"I am open to the ways abundance manifests in my life."</li>
            <li>"I am thankful for the blessings and prosperity coming my way."</li>
            <li>"I am thankful for the abundance in my life and welcome more."</li>
        </ul>
        <p>You may also add the phrase: "I love money, and money loves me."</p>
        <p>Incorporate money numbers like: 520, 741, 528, 1216, 1176, 234451.</p>
    </div>
    <div>
        <p>Attach Zibu symbols for abundance to amplify the energy, and fold or staple the letter to your cheque.</p>
    </div>
    <div class="energizing">
        <h2>Energizing the Ritual</h2>
        <p>If you’re inclined, use crystals that attract abundance such as Citrine, Green Aventurine, Tiger’s Eye, Jade,
            or Sunstone. You can call upon the Goddess Lakshmi for blessings. Offer your gratitude to her for showering
            golden prosperity into your life.</p>
        <p>Place the cheque in a safe, sacred space like an altar or a wealth area in your home. Release control over
            how or when abundance flows to you—trust the Universe to manage the details.</p>
    </div>

    <div class="closing">
        <h2>Closing the Ritual</h2>
        <p>If you choose, you can release the energy on No Moon day (Amavasya) by burning the cheque with a white candle
            and scattering the ashes into the universe, or by any other method that resonates with you.</p>
        <p>Be sure to offer deep gratitude for the abundance already present in your life, and remain open to what is
            yet to come.</p>
        <p>Note: The cheque can be placed in your cash box, wealth area, or a crystal grid surrounded by
            abundance-attracting crystals.</p>
    </div>

    <div class="recommendations">
        <h2>Why We Recommend Crystals, Rudraksha, and Vedic Remedies Over Gemstones</h2>
        <p>While gemstones are indeed powerful, they can carry intense energy and may require precise astrological
            alignment for optimal results. If the planetary positions or Dasha periods are not favorable, a gemstone
            might provide benefits for most of the time but could also lead to challenges or disruptions during
            unfavorable periods. For example, a gemstone might support you well for 10 months but cause difficulties
            during the remaining 2 months if planetary conditions are not aligned. This variability can create
            unexpected turbulence in your life 🌪️</p>

        <p>We focus on recommending Crystals, Vedic remedies, and Mantras rather than gemstones because these practices
            provide a more holistic and spiritual approach to healing and growth 🌿✨. Crystals are natural energy
            amplifiers that work gently with your energy, bringing balance, clarity, and positivity to all areas of
            life. They are versatile, accessible, and can be used in combination with meditation, rituals, or daily
            routines, making them practical for everyone 🌸.</p>

        <p>Rudraksha beads are revered in Vedic tradition for their spiritual significance and ability to balance
            planetary energies, promoting inner peace, clarity, and protection 🌿. They are easier to integrate into
            one's lifestyle and provide consistent, positive effects.</p>

        <p>Vedic remedies and mantras tap into ancient wisdom 🌟, working on a deeper, spiritual level to address the
            root cause of issues. Mantras help align your mind and soul with positive vibrations, promoting peace,
            prosperity, and success 💫. These remedies offer long-lasting benefits by fostering a connection with the
            divine and nature.</p>
        <p>Our focus on these methods allows you to take a gentle, yet powerful path toward personal and professional
            growth, attracting abundance and success in your life 🌱.</p>
    </div>

    <div class="footer">
        @include('pdf.static_page.footer')
    </div>
</div> --}}
