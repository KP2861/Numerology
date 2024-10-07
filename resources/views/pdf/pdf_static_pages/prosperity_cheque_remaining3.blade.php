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
                <td style=" text-align: start; padding: 0px 0 0 0;">
                    <h5 style="color:#000; font-size:18px ">
                        Why We Recommend Crystals, Rudraksha, and Vedic Remedies Over Gemstones?
                    </h5>
                </td>
            </tr>
            <tr>
                <td style=" text-align: start; padding: 30px 0 0 0;">
                    <h5 style="color:#EC4400
; font-size:16px ">
                        We don't focus on prescribing Gems because
                    </h5>
                </td>
            </tr>

            <tr>
                <td style=" padding: 10px 0 0 0; text-align:justify">
                    <p style="color:#000; font-size:14px ">
                        While gemstones are indeed powerful, they can carry intense energy and may require precise
                        astrological
                        alignment for optimal results. If the planetary positions or Dasha periods are not favorable,
                        <span style="color:#EC4400">a
                            gemstone
                            might provide benefits for most of the time but could also lead to challenges or disruptions
                            during
                            unfavorable periods.</span> For example, a gemstone might support you well for 10 months but
                        cause
                        difficulties
                        during the remaining 2 months if planetary conditions are not aligned. This variability can
                        create
                        unexpected turbulence in your life.
                    </p>
                </td>
            </tr>
            <tr>
                <td style=" padding: 10px 0 0 0; text-align:justify">
                    <p style="color:#000; font-size:14px ">
                        <span style="color:#EC4400"> We focus on recommending </span> Crystals, Vedic remedies, and
                        Mantras <span style="color:#EC4400">rather than gemstones because
                            these practices
                            provide a more holistic and spiritual approach to healing and growth.</span> Crystals are
                        natural
                        energy
                        amplifiers that work gently with your energy, bringing balance, clarity, and positivity to all
                        areas of
                        life. <span style="color:#EC4400">They are versatile, accessible, and can be used in combination
                            with meditation, rituals,
                            or daily
                            routines, making them practical for everyone.</span>
                    </p>
                </td>
            </tr>
            <tr>
                <td style=" padding: 10px 0 0 0; text-align:justify">
                    <p style="color:#000; font-size:14px ">
                        Rudraksha beads <span style="color:#EC4400"> are revered in Vedic tradition for their spiritual
                            significance and ability to
                            balance
                            planetary energies, promoting inner peace, clarity, and protection .</span> They are easier
                        to
                        integrate into
                        one's lifestyle and provide consistent, positive effects.
                    </p>
                </td>
            </tr>
            <tr>
                <td style=" padding: 10px 0 0 0; text-align:justify">
                    <p style="color:#000; font-size:14px ">
                        Vedic remedies and mantras<span style="color:#EC4400"> tap into ancient wisdom , working on a
                            deeper, spiritual level to
                            address the
                            root cause of issues. Mantras help align your mind and soul with positive vibrations,
                            promoting
                            peace,
                            prosperity, and success. </span> These remedies offer long-lasting benefits by fostering a
                        connection
                        with the
                        divine and nature.
                    </p>
                </td>
            </tr>
            <tr>
                <td style=" padding: 10px 0 0 0;">
                    <p style="color:#000; font-size:14px ">
                        Our focus on these methods allows you to take a gentle, yet powerful path toward personal and
                        professional
                        growth, attracting abundance and success in your life.
                    </p>
                </td>
            </tr>


        </tbody>
    </table>
</div>
{{-- <div style="height: 200px;">
    @include('pdf.static_page.footer')
</div> --}}
