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
            /* margin: 0;            padding: 0; */
            box-sizing: border-box;
            font-family: 'Noto Sans Devanagari', sans-serif;
            /* padding: 40px 20px; */
            background: #fff;
            position: relative;
        }

        .page-break {
            page-break-inside: avoid;
            page-break-after: always;
        }

        .own-li::before {
            content: "";
            width: 20px;
            height: 20px;
            background-color: blue;
            display: block;
        }
    </style>
</head>

<body>
    @php
        // Get the path to the images
        $imagePath = public_path('frontend/assests/images/pdf/ganpati-ji-min.png');
        $raviMundraImagePath = public_path('frontend/assests/images/pdf/ravi-mundrra-img-min.png');
        $imageWatermark = public_path('frontend/assests/images/pdf/ravi-mundrra-watermark2.png');
        $backgroundPdf = public_path('frontend/assests/images/pdf/background-bg1.png');

        // Read the file contents and encode them
        $imageData = base64_encode(file_get_contents($imagePath));
        $raviMundrraImageData = base64_encode(file_get_contents($raviMundraImagePath));
        $raviMundrraWatermark = base64_encode(file_get_contents($imageWatermark));
        $backgroundPdfData = base64_encode(file_get_contents($backgroundPdf));

        // Format the images as base64 data URIs
        $imageSrc = 'data:image/png;base64,' . $imageData;
        $raviMundrraImageSrc = 'data:image/png;base64,' . $raviMundrraImageData;
        $raviMundrraWatermarkSrc = 'data:image/png;base64,' . $raviMundrraWatermark;
        $backgroundPdfSrcImg = 'data:image/png;base64,' . $backgroundPdfData;

    @endphp
    <style>
        body {
            background-image: url('{{ $backgroundPdfSrcImg }}');
            background-size: contain;
            width: 100%;
            height: 100%;

            background-repeat: no-repeat;
            background-position: center
        }
    </style>
    <div class="content">
        @include('pdf.static_page.greetPdf')
    </div>

    <div class="page-break"></div>
    <div class="content">
        @include('pdf.advance_numerology.advanceNumerologyIndex')
    </div>

    <div class="content">
        @yield('pdfAdvanceContent')
    </div>
    


    <div class="page-break"></div>
    <div class="content"> @include('pdf.advance_numerology.areaOfStruggle') </div>


    <div class="page-break"></div>
    <div class="content"> @include('pdf.static_page.fourthPage') </div>
    <div class="page-break"></div>
    <div class="content"> @include('pdf.static_page.fifthPage') </div>
    <div class="page-break"></div>
    <div class="content"> @include('pdf.static_page.sixthPage') </div>
    <div class="page-break"></div>
    <div class="content"> @include('pdf.static_page.seventhPage') </div>
    <div class="page-break"></div>



    <div class="content">
        @include('pdf.static_page.fourthPage')
    </div>
    <div class="page-break"></div>
    <div class="content"> @include('pdf.pdf_static_pages.prosperity_cheque') </div>
    <div class="page-break"></div>
    <div class="content"> @include('pdf.pdf_static_pages.prosperity_cheque_remaining') </div>
    <div class="page-break"></div>

    <div class="content">
        @include('pdf.static_page.seventhPage')
    </div>














    <div class="page-break"></div>
    <div class="content"> @include('pdf.pdf_static_pages.sanjeevani_cards-remaining') </div>
    <div class="page-break"></div>
    <div class="content"> @include('pdf.pdf_static_pages.sanjeevani_cards-remaining2') </div>
    <div class="page-break"></div>
    <div class="content"> @include('pdf.pdf_static_pages.vastu_guide') </div>
    <div class="page-break"></div>
    <div class="content"> @include('pdf.pdf_static_pages.vastu_guide-remaining') </div>
    <div class="page-break"></div>
    <div class="content"> @include('pdf.pdf_static_pages.switch_words') </div>
    <div class="page-break"></div>
    <div class="content"> @include('pdf.pdf_static_pages.switch_words-remaining') </div>
    <div class="page-break"></div>
    <div class="content"> @include('pdf.pdf_static_pages.switch_words-remaining2') </div>
    <div class="page-break"></div>
    {{-- <div class="content">
        @include('pdf.pdf_static_pages.rudraksha-remaining')
    </div> --}}
    {{-- <div class="page-break"></div>
    <div class="content">
        @include('pdf.pdf_static_pages.rudraksha-remaining2')
    </div> --}}


    <div class="page-break"></div>
    <div class="content">
        @include('pdf.pdf_static_pages.crystal')
    </div>



    <div class="page-break"></div>
    <div class="content"> @include('pdf.static_page.ninthPage') </div>
    <div class="page-break"></div>
    <div class="content">
        @include('pdf.pdf_static_pages.sanjeevani_cards-remaining')
    </div>
    <div class="page-break"></div>
    <div class="content">
        @include('pdf.pdf_static_pages.sanjeevani_cards-remaining2')
    </div>
    <div class="page-break"></div>
    <div class="content"> @include('pdf.static_page.eleveenthPage') </div>
    <div class="page-break"></div>
    <div class="content">
        @include('pdf.pdf_static_pages.vastu_guide-remaining')
    </div>
    <div class="page-break"></div>
    <div class="content">
        @include('pdf.pdf_static_pages.switch_words')
    </div>
    <div class="page-break"></div>
    <div class="content">
        @include('pdf.pdf_static_pages.switch_words-remaining')
    </div>
    <div class="page-break"></div>
    <div class="content">
        @include('pdf.pdf_static_pages.switch_words-remaining2')
    </div>
    <div class="page-break"></div>
    <div class="content">
        @include('pdf.static_page.eigthPage')
    </div>
    <div class="page-break"></div>
    <div class="content">
        @include('pdf.static_page.ninthPage')
    </div>

    <div class="page-break"></div>
    <div class="content">
        @include('pdf.static_page.tenthPage')
    </div>

    <div class="page-break"></div>
    <div class="content">
        @include('pdf.static_page.eleveenthPage')
    </div>

    <div class="page-break"></div>
    <div class="content">
        @include('pdf.static_page.termAndConditionRemaining')
    </div>
</body>

</html>
