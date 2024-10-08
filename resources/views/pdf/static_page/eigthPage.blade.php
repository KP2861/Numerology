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
    <a name="serviceOffered"></a>
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
                        Unlock Your Happiness and Fortune with Our Expert Numerology and Astrology Guidance!
                    </h3>
                </td>
            </tr>
            <tr style="width: 100%; ">
                <td style=" text-align: start; vertical-align:top; padding: 15px 0 0 0;">
                    <h5 style="color:#000; font-size:16px; font-weight:normal; ">
                        At Swrahan, we provide a variety of personalized services to help you enhance your life journey
                        through the ancient sciences of astrology and numerology. Explore our offerings below:
                    </h5>
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

            <tr>
                <td style=" text-align: start; padding: 30px 0 0 0;">
                    <h5 style="color:#000; font-size:16px ">
                        Personalized Remedies as per your Asto Numero Vastu with half n hour details remedies.
                    </h5>
                </td>
            </tr>
            <tr>
                <td style="padding: 10px 0 0 0px;  width:100%; color: #000; font-size:16px">
                    1. Overview: This in-depth consultation incorporates various disciplines.
                </td>
            </tr>

            <tr>
                <td>
                    <table style="width:100%">
                        <tbody>
                            <tr>
                                <td style="padding: 0px 0 0 0px;  width:100%; color: #000; font-size:16px">
                                    2. Includes:
                                </td>
                            </tr>
                            <tr>
                                <td style=" text-align: start; padding: 5px 0 0 15px;">
                                    <ul style="color:#000 ">
                                        <li style="color #000; font-size:16px">
                                            Analysis: Insights from Vedic Astrology, Bhrigu Nandi Nadi,
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 0px 0 0 28px;  width:100%; color: #000; font-size:16px">
                                    Numerology, and
                                    Vaastu Shastra.
                                </td>
                            </tr>


                            <tr>
                                <td style=" text-align: start; padding: 5px 0 0 15px;">
                                    <ul style="color:#000 ">
                                        <li style="color #000; font-size:16px">
                                            Compatibility Analysis: Evaluation of your mobile number and name
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 0px 0 0 28px;  width:100%; color: #000; font-size:16px">
                                    against
                                    your birth date.
                                </td>
                            </tr>



                            <tr>
                                <td style=" text-align: start; padding: 5px 0 0 15px;">
                                    <ul style="color:#000 ">
                                        <li style="color #000; font-size:16px">
                                            Recommendations: Tailored advice based on your birth chart,
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 0px 0 0 28px;  width:100%; color: #000; font-size:16px">
                                    including
                                    actions to embrace or
                                    avoid, suitable gemstones, Rudraksha beads, and crystals according to your
                                    planetary
                                    periods.
                                </td>
                            </tr>



                            <tr>
                                <td style=" text-align: start; padding: 5px 0 0 15px;">
                                    <ul style="color:#000 ">
                                        <li style="color #000; font-size:16px">
                                            9-Year Prediction: A detailed forecast to help you plan your activities

                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 0px 0 0 28px;  width:100%; color: #000; font-size:16px">
                                    effectively.
                                </td>
                            </tr>



                            <tr>
                                <td style=" text-align: start; padding: 5px 0 0 15px;">
                                    <ul style="color:#000 ">
                                        <li style="color #000; font-size:16px">
                                            Event-Specific Remedies: Recommendations from texts like Ravan
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 0px 0 0 28px;  width:100%; color: #000; font-size:16px">
                                    Samhita and
                                    Lal Kitab.
                                </td>
                            </tr>



                            <tr>
                                <td style=" text-align: start; padding: 5px 0 0 15px;">
                                    <ul style="color:#000 ">
                                        <li style="color #000; font-size:16px">
                                            Utilization of Tools: Employing Yantra, Switch Words, and Energy
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding:0px 0 0 28px;  width:100%; color: #000; font-size:16px">
                                    Circles to
                                    manifest your
                                    desires.
                                </td>
                            </tr>


                            <tr>
                                <td style=" text-align: start; padding: 5px 0 0 15px;">
                                    <ul style="color:#000 ">
                                        <li style="color #000; font-size:16px">
                                            Empowerment: A reminder that your choices and actions play a
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 0px 0 0 28px;  width:100%; color: #000; font-size:16px">
                                    significant role in shaping your destiny.
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>



            <tr>
                <td>
                    <table style="width: 100%">
                        <tbody>
                            <tr>
                                <td style=" text-align: start; padding: 20px 0 0 0;">
                                    <h5 style="color:#000; font-size:16px ">
                                        Lucky SIM Card :
                                    </h5>
                                </td>
                            </tr>
                            <tr>
                                <td style=" text-align: start; padding: 10px 0 0 0;">
                                    <ul style="color:#000 ">
                                        <li style="color #000; font-size:16px">
                                            Overview: Receive a SIM card considered auspicious based on your birth
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 0px 0 0 12px;  width:100%; color: #000; font-size:16px">
                                    details.
                                </td>
                            </tr>

                            <tr>
                                <td style=" text-align: start; padding: 5px 0 0 0;">
                                    <ul style="color:#000 ">
                                        <li style="color #000; font-size:16px">
                                            Benefits: This card is believed to enhance positive energies in your life
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 0px 0 0 12px;  width:100%; color: #000; font-size:16px">
                                    according to numerological and astrological principles.
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>

            <tr>
                <td>
                    <table style="width: 100%">
                        <tbody>
                            <tr>
                                <td style=" text-align: start; padding: 20px 0 0 0;">
                                    <h5 style="color:#000; font-size:16px ">
                                        Name Correction Service:
                                    </h5>
                                </td>
                            </tr>
                            <tr>
                                <td style=" text-align: start; padding: 10px 0 0 0;">
                                    <ul style="color:#000 ">
                                        <li style="color #000; font-size:16px">
                                            Overview: Get expert recommendations for name corrections based on
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 0px 0 0 12px;  width:100%; color: #000; font-size:16px">
                                    numerological principles.
                                </td>
                            </tr>

                            <tr>
                                <td style=" text-align: start; padding: 5px 0 0 0;">
                                    <ul style="color:#000 ">
                                        <li style="color #000; font-size:16px">
                                            Benefits: Adjusting your name can align you better with your life path
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 0px 0 0 12px;  width:100%; color: #000; font-size:16px">
                                    and desired outcomes.
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>


            <tr>
                <td>
                    <table style="width: 100%">
                        <tbody>
                            <tr>
                                <td style=" text-align: start; padding: 20px 0 0 0;">
                                    <h5 style="color:#000; font-size:16px ">
                                        Vastu Support for Home/Flat (Grading of Your House) :
                                    </h5>
                                </td>
                            </tr>
                            <tr>
                                <td style=" text-align: start; padding: 10px 0 0 0;">
                                    <ul style="color:#000 ">
                                        <li style="color #000; font-size:16px">
                                            Services: Grading your house based on 16 directions.
                                        </li>
                                    </ul>
                                </td>
                            </tr>


                            <tr>
                                <td style=" text-align: start; padding: 5px 0 0 0;">
                                    <ul style="color:#000 ">
                                        <li style="color #000; font-size:16px">
                                            Support: 10-minute call to discuss your house's details and basic
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 0px 0 0 12px;  width:100%; color: #000; font-size:16px">
                                    remedies.
                                    Basic Vastu Consultation
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>


            <tr>
                <td>
                    <table style="width: 100%">
                        <tbody>
                            <tr>
                                <td style=" text-align: start; padding: 20px 0 0 0;">
                                    <h5 style="color:#000; font-size:16px ">
                                        Basic Vastu Consultation :
                                    </h5>
                                </td>
                            </tr>
                            <tr>
                                <td style=" text-align: start; padding: 10px 0 0 0;">
                                    <ul style="color:#000 ">
                                        <li style="color #000; font-size:16px">
                                            Services: Vastu assessment for specific areas (home or office).
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td style=" text-align: start; padding: 10px 0 0 0;">
                                    <ul style="color:#000 ">
                                        <li style="color #000; font-size:16px">
                                            Recommendations for key room placements.
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td style=" text-align: start; padding: 10px 0 0 0;">
                                    <ul style="color:#000 ">
                                        <li style="color #000; font-size:16px">
                                            Basic remedies (no structural changes).
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td style=" text-align: start; padding: 10px 0 0 0;">
                                    <ul style="color:#000 ">
                                        <li style="color #000; font-size:16px">
                                            PDF report with simple suggestions.
                                        </li>
                                    </ul>
                                </td>
                            </tr>



                            <tr>
                                <td style=" text-align: start; padding: 5px 0 0 0;">
                                    <ul style="color:#000 ">
                                        <li style="color #000; font-size:16px">
                                            Support: One-time virtual consultation (30 minutes) and email support
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 0px 0 0 12px;  width:100%; color: #000; font-size:16px">
                                    for 7 days post-consultation.
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>


            <tr>
                <td>
                    <table style="width: 100%">
                        <tbody>
                            <tr>
                                <td style=" text-align: start; padding: 20px 0 0 0;">
                                    <h5 style="color:#000; font-size:16px ">
                                        Standard Vastu Consultation :
                                    </h5>
                                </td>
                            </tr>



                            <tr>
                                <td>
                                    <table style="width:100%">
                                        <tbody>
                                            <tr>
                                                <td
                                                    style="padding: 10px 0 0 0px; width:100%; color: #000; font-size:16px">
                                                    1. Services:
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style=" text-align: start; padding: 5px 0 0 15px;">
                                                    <ul style="color:#000 ">
                                                        <li style="color #000; font-size:16px">
                                                            Full Vastu assessment for home or office.
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td style=" text-align: start; padding: 5px 0 0 15px;">
                                                    <ul style="color:#000 ">
                                                        <li style="color #000; font-size:16px">
                                                            Room-by-room recommendations.
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>




                                            <tr>
                                                <td style=" text-align: start; padding: 5px 0 0 15px;">
                                                    <ul style="color:#000 ">
                                                        <li style="color #000; font-size:16px">
                                                            Remedies for Vastu imbalances.
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>




                                            <tr>
                                                <td style=" text-align: start; padding: 5px 0 0 15px;">
                                                    <ul style="color:#000 ">
                                                        <li style="color #000; font-size:16px">
                                                            Energy balancing tips based on family members' birth charts.

                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>




                                            <tr>
                                                <td style=" text-align: start; padding: 5px 0 0 15px;">
                                                    <ul style="color:#000 ">
                                                        <li style="color #000; font-size:16px">
                                                            PDF report with detailed recommendations.
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <table style="width: 100%">
                                        <tbody>
                                            <tr>
                                                <td
                                                    style="padding: 10px 0 0 0px;  width:100%; color: #000; font-size:16px">
                                                    2. Support: 1-2 virtual consultations (60 minutes each) and 15 days
                                                    of
                                                </td>
                                            </tr>
                                            <tr>
                                                <td
                                                    style="padding: 0px 0  0 18px;  width:100%; color: #000; font-size:16px">
                                                    phone and
                                                    email support.
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>





                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>

            <tr>
                <td>
                    <table style="width: 100%">
                        <tbody>
                            <tr>
                                <td style=" text-align: start; padding: 20px 0 0 0;">
                                    <h5 style="color:#000; font-size:16px ">
                                        Premium Vastu Consultation :
                                    </h5>
                                </td>
                            </tr>



                            <tr>
                                <td>
                                    <table style="width:100%">
                                        <tbody>
                                            <tr>
                                                <td
                                                    style="padding: 10px 0 0 0px; width:100%; color: #000; font-size:16px">
                                                    1. Services:
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style=" text-align: start; padding: 5px 0 0 15px;">
                                                    <ul style="color:#000 ">
                                                        <li style="color #000; font-size:16px">
                                                            Comprehensive assessment for various properties.
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td style=" text-align: start; padding: 5px 0 0 15px;">
                                                    <ul style="color:#000 ">
                                                        <li style="color #000; font-size:16px">
                                                            In-depth analysis including external factors.
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>




                                            <tr>
                                                <td style=" text-align: start; padding: 5px 0 0 15px;">
                                                    <ul style="color:#000 ">
                                                        <li style="color #000; font-size:16px">
                                                            Custom remedies, including structural changes.
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>




                                            <tr>
                                                <td style=" text-align: start; padding: 5px 0 0 15px;">
                                                    <ul style="color:#000 ">
                                                        <li style="color #000; font-size:16px">
                                                            Personalized solutions for health, wealth, and prosperity.

                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>




                                            <tr>
                                                <td style=" text-align: start; padding: 5px 0 0 15px;">
                                                    <ul style="color:#000 ">
                                                        <li style="color #000; font-size:16px">
                                                            PDF report with exhaustive analysis.
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <table style="width: 100%">
                                        <tbody>
                                            <tr>
                                                <td
                                                    style="padding: 10px 0 0 0px;  width:100%; color: #000; font-size:16px">
                                                    2. Support: On-site or virtual walkthrough, multiple consultations,
                                                    and
                                                </td>
                                            </tr>
                                            <tr>
                                                <td
                                                    style="padding: 0px 0  0 18px;  width:100%; color: #000; font-size:16px">
                                                    extensive support over 1-2 months.
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>





                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>


            <tr>
                <td>
                    <table style="width: 100%">
                        <tbody>
                            <tr>
                                <td style=" text-align: start; padding: 20px 0 0 0;">
                                    <h5 style="color:#000; font-size:16px ">
                                        Devta Vastu (Industrial/Plot/Office/Shop) :
                                    </h5>
                                </td>
                            </tr>
                            <tr>
                                <td style=" text-align: start; padding: 10px 0 0 0;">
                                    <ul style="color:#000 ">
                                        <li style="color #000; font-size:16px">
                                            Overview: Solutions depend on specific problems and locations.
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>

            <tr>
                <td>
                    <table style="width: 100%">
                        <tbody>
                            <tr>
                                <td style=" text-align: start; padding: 20px 0 0 0;">
                                    <h5 style="color:#000; font-size:16px ">
                                        Additional Services :
                                    </h5>
                                </td>
                            </tr>


                            <tr>
                                <td style="padding: 10px 0 0 0px;  width:100%; color: #000; font-size:16px">
                                    1. Logo Designing Correction/Creation
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 10px 0 0 0px;  width:100%; color: #000; font-size:16px">
                                    2.Visiting Card Designing
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 10px 0 0 0px;  width:100%; color: #000; font-size:16px">
                                    3. Baby Name Suggestions
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 10px 0 0 0px;  width:100%; color: #000; font-size:16px">
                                    4. Company Name Designing (Private Ltd/Partnership Firm)
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 10px 0 0 0px;  width:100%; color: #000; font-size:16px">
                                    5. Business Consultancy
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 10px 0 0 0px;  width:100%; color: #000; font-size:16px">
                                    6. Watch Analysis & Signature Analysis and Correction
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 10px 0 0 0px;  width:100%; color: #000; font-size:16px">
                                    7. Marriage Consultations (Vedic + Astro + Numerological Remedies)
                                </td>
                            </tr>

                            <tr>
                                <td style="padding: 0">
                                    <table style="width:100%; padding:0">
                                        <tbody>
                                            <tr>
                                                <td
                                                    style="padding: 10px 0 0 0px; width:100%; color: #000; font-size:16px">
                                                    8. Pregnancy Consultations:
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style=" text-align: start; padding: 5px 0 0 15px;">
                                                    <ul style="color:#000 ">
                                                        <li style="color #000; font-size:16px">
                                                            Pre-remedies: Dates and guidance provided.
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td style=" text-align: start; padding: 5px 0 0 15px;">
                                                    <ul style="color:#000 ">
                                                        <li style="color #000; font-size:16px">
                                                            Use of Vedic Mantras and Ashwagandha Yantra.
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 10px 0 0 0px;  width:100%; color: #000; font-size:16px">
                                    9. Mobile and Date of Birth Report
                                </td>
                            </tr>



                            <tr>
                                <td style="padding: 10px 0 0 0px;  width:100%; color: #000; font-size:16px">
                                    10. Lucky Bank Account Number/Vehicle Number/House Number/Your
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 0px 0  0 18px;  width:100%; color: #000; font-size:16px">
                                    marriage date.
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </td>
            </tr>
            <tr>
                <td style=" text-align: start; padding: 30px 0 0 0;">
                    <h5 style="color:#EC4400; font-size:16px ">
                        These services cater to individuals seeking guidance and remedies based
                        on astrological and numerological interpretations, offering personalized
                        recommendations to improve various aspects of life based on these
                        practices.
                    </h5>
                </td>
            </tr>

        </tbody>
    </table>
</div>
{{-- <div style="height: 200px;">
        @include('pdf.static_page.footer')
    </div> --}}
{{-- </div> --}}
