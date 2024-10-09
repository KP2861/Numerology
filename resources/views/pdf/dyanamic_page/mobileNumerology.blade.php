@extends('pdf.static_page.staticpdf')

@section('pdfContent')
    @php
        $imagePath = public_path('frontend/assests/images/pdf/ganpati-ji-min.png');
        $raviMundraImagePath = public_path('frontend/assests/images/pdf/ravi-mundrra-img-min.png');
        $imageWatermark = public_path('frontend/assests/images/pdf/ravi-mundrra-watermark2.png');
        $backgroundPdf = public_path('frontend/assests/images/pdf/background-bg.png');

        // Read the file contents and encode them
        $imageData = base64_encode(file_get_contents($imagePath));
        $raviMundrraImageData = base64_encode(file_get_contents($raviMundraImagePath));
        $raviMundrraWatermark = base64_encode(file_get_contents($imageWatermark));
        $backgroundPdfData = base64_encode(file_get_contents($backgroundPdf));

        // Format the images as base64 data URIs
        $imageSrc = 'data:image/png;base64,' . $imageData;
        $raviMundrraImageSrc = 'data:image/png;base64,' . $raviMundrraImageData;
        $raviMundrraWatermarkSrc = 'data:image/png;base64,' . $raviMundrraWatermark;
        $backgroundPdfSrc = 'data:image/png;base64,' . $backgroundPdfData;

        // Check conditions for recommendation
        $hasMalefic = collect($result['Combinations'])->contains('type', 'Malefic');
        $containsSix = strpos($result['Mobile Number'], 6) != false;

        $recommendationMessage =
            $containsSix || $hasMalefic
                ? 'Recommendation: Change your mobile number as it has multiple Malefic combinations which create routine life issues with Health, Wealth & Relationship.'
                : 'Your Number is suitable for you, if you want to get check compatibility with your business and job please get book your consultation';
    @endphp

<a name="predictions"></a>
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
                        <td style="padding: 0px 0 0 0">
                            <div class="sub-heading " style="font-size:18px;">
                                Hello
                                <span style="font-weight: bold">
                                    @if (preg_match('/[a-zA-Z]/', $result['Name']))
                                        {{ $result['Name'] . ' ji' . ',' }}
                                    @else
                                        {{ $result['Name'] . ',' }}
                                    @endif

                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 10px 0 0 0">
                            <div class="sub-heading " style="font-size:16px;">
                                Please find herewith your mobile number report as per numerology.
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td style="padding: 20px 0">
                            <p style="color: #EC4400; font-size:16px; font-weight:bold">
                                {{ $recommendationMessage }}
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td style="font-size:16px; font-weight:bold; text-align:center; padding:10px 0">
                            Mobile
                            Number Predictions
                            {{ $result['Mobile Number'] }}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <table
                                style="border: 1px solid #000; border-collapse: collapse; margin-bottom:10px; width:100%; height:100%;"
                                class="mobile-table">
                                <tbody>
                                    <tr>
                                        <td
                                            style="border:1px solid #000; border-collapse: collapse; padding:5px 10px; font-size:14px;">
                                            Mobile
                                            Number
                                            Total</td>
                                        <td
                                            style="border:1px solid #000; border-collapse: collapse; text-align:center; padding:5px ; font-size:14px;">
                                            {{ $result['Total'] }}</td>
                                    </tr>
                                    <tr>
                                        <td
                                            style="border:1px solid #000; border-collapse: collapse; padding:5px 10px; font-size:14px; ">
                                            Mobile
                                            Number
                                            Compound</td>
                                        <td
                                            style="border:1px solid #000; border-collapse: collapse; text-align:center; padding:5px 10px; font-size:14px;">
                                            {{ $result['Single Digit'] }}
                                        </td>
                                    </tr>
                                </tbody>

                            </table>


                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 20px 0 5px 0; font-size:16px; font-weight:bold;">
                            How your Mobile Number impact on your life?
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 0px 0; text-align:justify">
                            <div style="font-size: 14px; ">
                                {{ $result['Personalized Message'] }}
                            </div>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
        {{-- <div style="height: 200px;">
            @include('pdf.static_page.footer')
        </div> --}}
    </div>
@endsection



<script>
    window.onload = function() {
        // Automatically trigger the PDF download
        window.location.href = "{{ route('downloadPDF', ['result' => $result]) }}";

        // Redirect to the homepage after a delay (adjust the delay if needed)
        setTimeout(function() {
            window.location.href = "{{ url('/') }}"; // Or the route you want to redirect to
        }, 2000); // 2-second delay before redirecting
    };
</script>
