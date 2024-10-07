{{-- @php
    $swatiMundraImagePath = public_path('frontend/assests/images/pdf/jpeg-optimizer_swati-mundra_1_11zon.png');

    // Read the file contents and encode them
    $swatiMundrraWatermark = base64_encode(file_get_contents($swatiMundraImagePath));

    // Format the images as base64 data URIs
    $swatiMundrraWatermarkSrc = 'data:image/png;base64,' . $swatiMundrraWatermark;

@endphp --}}

{{-- <div
        style="background-image: url('{{ $backgroundPdfSrc }}'); background-size: cover; background-position: center; margin:auto; width:100%; height:100%;"> --}}
<div id="#name-predictions" style="height: 780px; width:70%; margin:0 auto;  ">

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
                <td style="padding: 0px 0 30px 0; text-align:center">
                    <h3 style="font-size:20px; ">Date Of Birth Prediction ( <span>
                            {{ $result['DOB'] ?? 'N/A' }}</span> )
                    </h3>
                </td>
            </tr>
            <tr>
                <td style="padding: 0px 0 10px 0;">
                    <h3 style="font-size:16px; ">
                        Unlock the Secrets of Your Birth Date!
                    </h3>
                </td>
            </tr>
            <tr>
                <td style="padding: 0px 0 10px 0; text-align:justify">
                    <h3
                        style="color: #EC4400; margin-bottom:30px; padding-bottom:30px; font-weight:bold; font-size:16px; text-align:justify">
                        Explore How your unique Birth Date & Total influences your personality, opportunities, and
                        challenges. Dive into a personalized breakdown of how the numbers tied to your Date of Birth are
                        shaping your journey.
                    </h3>
                </td>
            </tr>


            <tr>
                <td>
                    <table style="width: 100%">
                        <tbody>
                            <tr>
                                <td style="padding: 20px 0 0px 0; font-size:16px; font-weight:bold;">
                                    How Your Date of Birth ( {{ $result['Date Detail']['date'] ?? 'N/A' }} ) Impacts
                                    Your Life ?
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 5px 0 5px 0 ; font-size: 14px; font-weight: bold">
                                    Unique Characteristic:

                                </td>
                            </tr>

                            {{-- {{ $result['Date Detail']['daySpecificDetail'] ?? 'N/A' }} --}}
                            @if (!empty($result['Date Detail']['daySpecificDetail']))

                                @foreach (explode('.', $result['Date Detail']['daySpecificDetail']) as $detail)
                                    @if (trim($detail) !== '')
                                        <tr>
                                            <td style="padding: 3px 0;  font-size: 14px;">
                                                <ul>
                                                    <li>{{ trim($detail) }}.</li>
                                                </ul>

                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @else
                                <tr>
                                    <td style="padding: 3px 0;  font-size: 14px;">
                                        <p>N/A</p>
                                    </td>
                                </tr>
                            @endif

                            <tr>
                                <td style="padding: 15px 0 0 0 ; font-size: 14px; font-weight: bold">
                                    Personalized Insights: Unleash Your True Potential:
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 5px 0 0 0; font-size: 14px;">
                                    {{ $result['Date Detail']['dayDetail'] ?? 'N/A' }}
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
                                <td style="padding: 30px 0 0px 0; font-size:16px; font-weight:bold;">
                                    How Your Date of Birth Total ( {{ $result['DOB'] ?? 'N/A' }} ) Impacts Your Life
                                </td>
                            </tr>


                            <tr>
                                <td>
                                    <table style="width: 100%">
                                        <tbody>
                                            <tr>
                                                <td style="padding: 5px 0 5px 0 ; font-size: 14px; font-weight: bold">
                                                    Unique Characteristic:
                                                </td>
                                            </tr>
                                            {{-- {{ $result['Date Detail']['daySpecificDetail'] ?? 'N/A' }} --}}
                                            @if (!empty($result['Date Detail']['singleDigitSpecificDetail']))

                                                @foreach (explode('.', $result['Date Detail']['singleDigitSpecificDetail']) as $detail)
                                                    @if (trim($detail) !== '')
                                                        <tr>
                                                            <td style="padding: 3px 0;  font-size: 14px;">
                                                                <ul>
                                                                    <li>{{ trim($detail) }}.</li>
                                                                </ul>
                                                            </td>
                                                        </tr>
                                                    @endif
                                                @endforeach
                                            @else
                                                N/A
                                            @endif
                                        </tbody>
                                    </table>

                                </td>
                            </tr>



                            <tr>
                                <td style="padding: 10px 0 0 0 ; font-size: 14px; font-weight: bold">
                                    Personalized Insights: Unleash Your True Potential:
                                </td>
                            </tr>

                            <tr>
                                <td style="padding: 5px 0 0px 0; font-size: 14px; text-align:justify">
                                    Detail: {{ $result['Date Detail']['singleDigitDetail'] ?? 'N/A' }}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>



            <tr>
                <td style="padding: 25px 0 0 0; font-size:18px; font-weight:bold">
                    Decode the Hidden Power of Your Birth Date: Multiple Numbers? </td>
            </tr>
            <tr>
                <td
                    style=" padding: 5px 0 0 0; width:100%;color: #EC4400; font-weight:bold; font-size:18px; text-align:justify">
                    Here’s How to Balance Your Life with Vastu and Remedies!
            </tr>
            <tr>
                <td style="padding: 10px 0 0 0; font-size: 14px;text-align:justify ">
                    Your birth date is more than just a number – it’s a blueprint for your strengths, challenges, and
                    potential. When certain numbers repeat, they carry special significance. Let’s unlock the meaning
                    behind your birth date and discover powerful Vastu tips and remedies to bring harmony and success
                    into your life.
                </td>
            </tr>
            <tr>
                <td style="padding: 10px 0 0 0; font-size: 14px; font-weight:bold">
                    Your Unique Number : <span style="font-weight: normal">
                        {{ $result['Multi-Date Count']['largestDigitDetails']['your_unique_number'] ?? 'N/A' }}</span>
                </td>
            </tr>
            <tr>
                <td style="padding: 10px 0 0 0; font-size: 14px; font-weight:bold">
                    Occurrence: <span style="font-weight: normal">
                        {{ $result['Multi-Date Count']['largestDigitDetails']['occurrence'] ?? 'N/A' }}</span>
                </td>
            </tr>
            <tr>
                <td style="padding: 10px 0 0 0; font-size: 14px; font-weight:bold">
                    Discover Your Nature <span style="font-weight: normal">
                        {{ $result['Multi-Date Count']['largestDigitDetails']['discover_your_nature'] ?? 'N/A' }}
                    </span>
                </td>
            </tr>
            <tr>
                <td style="padding: 10px 0 0 0; font-size: 14px; font-weight:bold">
                    Your Key Characteristics: <span style="font-weight: normal">
                        {{ $result['Multi-Date Count']['largestDigitDetails']['your_key_characteristics'] ?? 'N/A' }}</span>
                </td>
            </tr>
            <tr>
                <td style="padding: 10px 0 0 0; font-size: 14px; font-weight:bold">
                    Your Emotional Insights: <span style="font-weight: normal">
                        {{ $result['Multi-Date Count']['largestDigitDetails']['your_emotional_insights'] ?? 'N/A' }}</span>
                </td>
            </tr>
            <tr>
                <td style="padding: 10px 0 0 0; font-size: 14px; font-weight:bold">
                    Your Behaviour Insights: <span style="font-weight: normal">
                        {{ $result['Multi-Date Count']['largestDigitDetails']['your_behavior_insights'] ?? 'N/A' }}</span>
                </td>
            </tr>


            <tr>
                <td>
                    <table style="width: 100%">
                        <tbody>
                            <tr>
                                <td style="padding: 25px 0 0 0; font-size:18px; font-weight:bold">
                                    Balance Through Vastu & Numerology :
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 5px 0 0 0; font-size: 14px; font-weight:normal">
                                    Focus Area to Balance
                                </td>
                            </tr>

                            <tr>
                                <td style="padding: 25px 0 0 0; font-size:18px; font-weight:bold">
                                    Why This Direction Works & Potential Challenges
                                </td>
                            </tr>

                            <tr>
                                <td style="padding:5px 0 0 0; font-size: 14px; font-weight:normal">
                                    Looking to bring harmony and success into every area of your life? Whether it's
                                    boosting education,
                                    advancing your career, strengthening your marriage, supporting your children,
                                    improving health, or
                                    optimizing your property, our Vastu solutions are designed just for you. Share your
                                    details, and let
                                    us
                                    help you create a balanced, positive environment that aligns with your personal and
                                    professional
                                    goals.
                                    Start your transformation with us today!"
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 0px 0; text-align:center; width:100%">
                                    {{-- <img src="{{ $swatiMundrraWatermarkSrc }}" alt="ganpati" style="margin:20px 0px; width:200px; height:200px;"> --}}
                                </td>
                            </tr>
                            <tr>
                                <td
                                    style=" padding: 20px 0 0 0 ;width:100%;color: #EC4400;  font-weight:bold; font-size:18px;">
                                    "Get personalized insights on the best business for you, based on astrology and numerology."
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p style="font-size:16px; color:#000; font-weight:700; margin:0;">
                                        Book your appointment now
                                    </p>
                                    <span>
                                        <a href="#">
                                            <svg width="16" height="16" viewBox="0 0 11 11" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.29232 1.16732H8.20898V0.625651C8.20898 0.481992 8.15192 0.344217 8.05033 0.242635C7.94875 0.141053 7.81098 0.0839844 7.66732 0.0839844C7.52366 0.0839844 7.38588 0.141053 7.2843 0.242635C7.18272 0.344217 7.12565 0.481992 7.12565 0.625651V1.16732H3.87565V0.625651C3.87565 0.481992 3.81858 0.344217 3.717 0.242635C3.61542 0.141053 3.47764 0.0839844 3.33398 0.0839844C3.19033 0.0839844 3.05255 0.141053 2.95097 0.242635C2.84939 0.344217 2.79232 0.481992 2.79232 0.625651V1.16732H1.70898C1.27801 1.16732 0.864682 1.33852 0.559936 1.64327C0.255189 1.94802 0.0839844 2.36134 0.0839844 2.79232V9.29232C0.0839844 9.72329 0.255189 10.1366 0.559936 10.4414C0.864682 10.7461 1.27801 10.9173 1.70898 10.9173H9.29232C9.72329 10.9173 10.1366 10.7461 10.4414 10.4414C10.7461 10.1366 10.9173 9.72329 10.9173 9.29232V2.79232C10.9173 2.36134 10.7461 1.94802 10.4414 1.64327C10.1366 1.33852 9.72329 1.16732 9.29232 1.16732ZM9.83398 9.29232C9.83398 9.43598 9.77692 9.57375 9.67533 9.67533C9.57375 9.77692 9.43598 9.83398 9.29232 9.83398H1.70898C1.56533 9.83398 1.42755 9.77692 1.32597 9.67533C1.22439 9.57375 1.16732 9.43598 1.16732 9.29232V5.50065H9.83398V9.29232ZM9.83398 4.41732H1.16732V2.79232C1.16732 2.64866 1.22439 2.51088 1.32597 2.4093C1.42755 2.30772 1.56533 2.25065 1.70898 2.25065H2.79232V2.79232C2.79232 2.93598 2.84939 3.07375 2.95097 3.17533C3.05255 3.27692 3.19033 3.33398 3.33398 3.33398C3.47764 3.33398 3.61542 3.27692 3.717 3.17533C3.81858 3.07375 3.87565 2.93598 3.87565 2.79232V2.25065H7.12565V2.79232C7.12565 2.93598 7.18272 3.07375 7.2843 3.17533C7.38588 3.27692 7.52366 3.33398 7.66732 3.33398C7.81098 3.33398 7.94875 3.27692 8.05033 3.17533C8.15192 3.07375 8.20898 2.93598 8.20898 2.79232V2.25065H9.29232C9.43598 2.25065 9.57375 2.30772 9.67533 2.4093C9.77692 2.51088 9.83398 2.64866 9.83398 2.79232V4.41732Z"
                                                    fill="#EC4400" />
                                            </svg>
                                        </a>
                                    </span>
                                </td>
                            </tr>
                
                            <tr>
                                <td style="font-size:16px; color:#000; font-weight:700; margin:0;">
                                    Call us on <span style="color: #EC4400; font-weight:bold">7096925750</span>
                                </td>
                            </tr>
                            <tr>
                                <td style="font-size:16px; color:#000; font-weight:700; margin:0;">
                                    WhatsApp <span style="color: #EC4400; font-weight:bold">7096925750</span>
                                </td>
                            </tr>

                        </tbody>

                    </table>
                </td>
            </tr>




        </tbody>
    </table>




</div>
