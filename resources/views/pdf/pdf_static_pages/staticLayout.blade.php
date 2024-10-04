<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numerology Report</title>
    <style>
        @font-face {
            font-family: 'Noto Sans Devanagari';
            src: url('{{ public_path(' fonts/NotoSansDevanagari-VariableFont_wdth, wght.ttf') }}');
        }

        body {
            /* margin: 0;
            padding: 0; */
            box-sizing: border-box;
            font-family: 'Noto Sans Devanagari', sans-serif;
            /* padding: 40px 20px; */
            background: #fff;
            position: relative;
        }

        .border-pdf {
            border: 4px solid #DE7244;
            background: #fff
        }

        h2 {
            text-align: center;
            color: #d3e247;
            font-weight: 700;
        }

        .page-break {
            page-break-inside: avoid;
            page-break-after: always;
        }

        .watermark {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%) rotate(-45deg);
            opacity: 0.2;
            font-size: 4rem;
            color: #dbe95b;
            pointer-events: none;
        }

        .content {
            position: relative;
            z-index: 1;
        }
    </style>
</head>

<body>
    @php
        // Get the path to the images
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

    @endphp

    <div class="content">
        @include('pdf.static_page.greetPdf')
    </div>
    <div class="page-break"></div>
    <div class="content">
        @include('pdf.static_page.index')
    </div>
    <div class="page-break"></div>


    <div class="content">
        @include('pdf.pdf_static_pages.creatingAffrimation')
    </div>
    <div class="page-break"></div>
    <div class="content">
        @include('pdf.pdf_static_pages.prosperity_cheque')
    </div>
    <div class="page-break"></div>

    <div class="content">
        @include('pdf.pdf_static_pages.lakshmi_beej_mantra')
    </div>
    <div class="page-break"></div>

    <div class="content">
        @include('pdf.pdf_static_pages.rudraksha')
    </div>
    <div class="page-break"></div>

    <div class="content">
        @include('pdf.pdf_static_pages.sanjeevani_cards')
    </div>
    <div class="page-break"></div>



    <div class="content">
        @include('pdf.pdf_static_pages.planetary_remedies')
    </div>
    <div class="page-break"></div>


    <div class="content">
        @include('pdf.pdf_static_pages.vastu_guide')
    </div>
    <div class="page-break"></div>

</body>

</html>
