@php
    // Get the path to the images
    $imageVastu = public_path('frontend/assests/images/pdf/vastu-pdf.png');

    // Read the file contents and encode them

    $imageVastuContent = base64_encode(file_get_contents($imageVastu));

    // Format the images as base64 data URIs

    $imageVastuSrc = 'data:image/png;base64,' . $imageVastuContent;

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
                    <h2 style="color:#EC4400;font-weight:bold; font-size:28px">
                        Transform Your Space, Elevate Your Life with Vastu
                    </h2>
                </td>
            </tr>

            <tr>
                <td>
                    <img src="{{ $imageVastu }}" alt="ganpati" style="margin:20px 200px; width:400px">
                </td>
            </tr>


            <tr>
                <td style=" padding: 20px 0 0 0;">
                    <p style="color:#000; font-size:16px; font-weight:bold ">
                        Unlock the Hidden Energy of Your Home with Expert Vastu Consultation
                    </p>
                </td>
            </tr>
            <tr>
                <td style=" padding: 10px 0 0 0;">
                    <p style="color:#000; font-size:16px; font-weight:bold ">
                        Transform Your Space, Elevate Your Life!
                    </p>
                </td>
            </tr>
            <tr>
                <td style=" padding: 10px 0 0 0;">
                    <p style="color:#000; font-size:14px ">
                        In Vastu Shastra, the placement of certain objects like a temple (prayer area) and a shoe rack
                        can have significant impacts on the energy flow within a home. Here are some examples of
                        incorrect placements and their effects:
                    </p>
                </td>
            </tr>
            <tr>
                <td style=" padding: 10px 0 0 0;">
                    <p style="color:#000; font-size:16px; font-weight:bold ">
                        Temple Placement (Mandir)
                    </p>
                </td>
            </tr>
            <tr>
                <td style=" padding: 10px 0 0 0;text-align:justify">
                    <p style="color:#000; font-size:14px; ">
                        Incorrect Direction: Placing a temple in the <span style="font-weight: bold"> East of South-East
                            , South of South West , West of North-West </span> of
                        the house is considered inauspicious. These directions are associated with stability but also
                        with stagnation, which can block spiritual progress and disturb the flow of positive energy.
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
    <h1>Transform Your Space, Elevate Your Life with Vastu</h1>

    <div class="section">
        <h2>Temple Placement (Mandir)</h2>
        <ul>
            <li><strong>Incorrect Direction:</strong> Placing a temple in the East of South-East, South of South-West,
                or West of North-West corner of the house.</li>
            <li><strong>Impact:</strong> May lead to disturbances in personal and professional life, financial losses,
                family disputes, or lack of mental peace. You might feel stuck or encounter obstacles in your career or
                relationships.</li>
            <li><strong>Correct Direction:</strong> Temples should ideally be placed in the northeast (Ishan Kon)
                direction, known as the direction of the gods. This brings positive energy, spiritual growth, and peace
                to the household.</li>
        </ul>
    </div>

    <div class="section">
        <h2>Shoe Rack Placement</h2>
        <ul>
            <li><strong>Incorrect Direction:</strong> Placing a shoe rack in the North-East or South-West direction.
            </li>
            <li><strong>Impact:</strong> May lead to health problems, especially related to the eyes or head. It can
                also cause mental stress and disturb the spiritual energy in the house, resulting in a lack of clarity
                or focus in decision-making.</li>
            <li><strong>Correct Direction:</strong> Avoid placing shoe racks in the Northeast. Ensure it is placed in a
                location that does not disturb the energy flow in the house.</li>
        </ul>
    </div>

    <div class="footer">
        <p>To receive your personalized consultation, please <a href="#">book your appointment now</a>.</p>
    </div>
</div> --}}
