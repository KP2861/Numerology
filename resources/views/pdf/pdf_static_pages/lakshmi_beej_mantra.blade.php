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

<a name="lakshmiBeejMantra"></a>

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
                        Lakshmi Beej Mantra Practice
                    </h2>
                </td>
            </tr>
            <tr>
                <td style=" padding: 10px 0 0 0; text-align:justify">
                    <p style="color:#000; font-size:14px ">
                        This practice is important, and the recitation of this Beej Mantra can be done by anyone at any
                        time. It is
                        not necessary to sit in one specific place or hold a mala (rosary) or any other tool while
                        chanting the
                        mantra. It is also not required to light a lamp or perform any specific ritual before starting.
                    </p>
                </td>
            </tr>
            <tr>
                <td style=" padding: 10px 0 0 0;">
                    <p style="color:#000; font-size:14px ">
                        This is a Beej Mantra, and its continuous mental chanting can be done while sitting, standing,
                        lying down, or
                        even while awake or asleep. Both men and women can practice this mantra at any time.
                    </p>
                </td>
            </tr>
            <tr>
                <td style=" padding: 10px 0 0 0;">
                    <p style="color:#000; font-size:16px; font-weight:bold ">
                        Mantra:
                         "Shreem” (श्रीं)
                    </p>
                </td>
            </tr>
            <tr>
                <td style=" padding: 10px 0 0 0;">
                    <p style="color:#000; font-size:14px ">
                        This is a one-syllable Beej Mantra, which is very dear to Goddess Lakshmi. It is recommended to chant it
                        mentally. There is no need for mantra counting in this practice.
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
    <h1>Lakshmi Beej Mantra Practice</h1>

    <div class="content">
        <p>This practice is important, and the recitation of this Beej Mantra can be done by anyone at any time. It is
            not necessary to sit in one specific place or hold a mala (rosary) or any other tool while chanting the
            mantra. It is also not required to light a lamp or perform any specific ritual before starting.</p>
        <p>This is a Beej Mantra, and its continuous mental chanting can be done while sitting, standing, lying down, or
            even while awake or asleep. Both men and women can practice this mantra at any time.</p>
    </div>
    <div class="mantra">
        <h2>Mantra:</h2>
        <p>"Shreem” (श्रीं)</p>
        <p>This is a one-syllable Beej Mantra, which is very dear to Goddess Lakshmi. It is recommended to chant it
            mentally. There is no need for mantra counting in this practice.</p>
    </div>
    <div class="footer">
        @include('pdf.static_page.footer')
    </div>
</div> --}}
