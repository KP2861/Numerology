<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numerology Report</title>

</head>

<body>
    @php
        // Get the path to the images
        $imagePath = public_path('frontend/assests/images/pdf/ganpati-ji-min.png');
        $raviMundraImagePath = public_path('frontend/assests/images/pdf/ravi-mundrra-img-min.png');
        // $imageWatermark = public_path('frontend/assests/images/pdf/ravi-mundrra-watermark2.png');
        // $backgroundPdf = public_path('frontend/assests/images/pdf/background-bgImg');
        $backgroundPdf = public_path('frontend/assests/images/pdf/background-bg1.png');

        // Read the file contents and encode them
        $imageData = base64_encode(file_get_contents($imagePath));
        $raviMundrraImageData = base64_encode(file_get_contents($raviMundraImagePath));
        // $raviMundrraWatermark = base64_encode(file_get_contents($imageWatermark));
        $backgroundPdfData = base64_encode(file_get_contents($backgroundPdf));

        // Format the images as base64 data URIs
        $imageSrc = 'data:image/png;base64,' . $imageData;
        $raviMundrraImageSrc = 'data:image/png;base64,' . $raviMundrraImageData;
        // $raviMundrraWatermarkSrc = 'data:image/png;base64,' . $raviMundrraWatermark;
        $backgroundPdfSrcImg = 'data:image/png;base64,' . $backgroundPdfData;

    @endphp
    <style>
        @font-face {
            font-family: 'Noto Sans Devanagari';
            src: url('{{ public_path(' fonts/NotoSansDevanagari-VariableFont_wdth, wght.ttf') }}');
        }

        body {
            background-image: url('{{ $backgroundPdfSrcImg }}');
            background-size: contain;
            font-family: 'Noto Sans Devanagari', sans-serif;
            width: 100%;
            height: 100%;
            background-repeat: no-repeat;
            background-position: center
        }


        .border-pdf {
            border: 4px solid #DE7244;
            background: #fff
        }

        h2 {
            text-align: center;
            color: #8E1888;
            font-weight: 700;
        }

        .page-break {
            page-break-inside: avoid;
            page-break-after: always;
        }

        /* .watermark {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%) rotate(-45deg);
        opacity: 0.2;
        font-size: 4rem;
        color: #8E1888;
        pointer-events: none;
    } */

        .content {
            position: relative;
            z-index: 1;
        }
    </style>
    {{-- <style>
    /* You can also move this CSS to the PHP code if needed */
    body {
        background-image: url('{{ $backgroundPdfSrc }}');
        Set the background image
        background-size: cover;
        background-position: center;
        /* margin: auto; */
        /* width: 210mm; 
        height: 297mm; */
        /* background-repeat:no-repeat; */
    }
</style> --}}

    {{-- <div
        style="background-image: url('{{ $backgroundPdfSrc }}'); background-size: cover; background-position: center; margin:auto; width:100%; height:100%;"> --}}

    <div class="content">
        @include('pdf.static_page.greetPdf')
    </div>











    <div class="page-break"></div>
    <div class="content">
        @include('pdf.name_numerology.nameNumerologyIndex')
    </div>

    <div class="content">
        @include('pdf.static_page.freeGifts')
    </div>

    <div class="page-break"></div>
    <div class="content">
        @yield('pdfNameContent')
    </div>
    <div class="page-break"></div>


    <div class="content">
        @include('pdf.name_numerology.character_set')
    </div>
    <div class="page-break"></div>



    <div class="content">
        @include('pdf.name_numerology.bestJobs')
    </div>
    <div class="page-break"></div>

    <div class="content">
        @include('pdf.name_numerology.name_numerology_pdf-dob')
    </div>
    <div class="page-break"></div>


    <div class="content">
        @include('pdf.static_page.fourthPage')
    </div>
    <div class="page-break"></div>

    <div class="content">
        @include('pdf.static_page.fifthPage')
    </div>
    <div class="page-break"></div>
    <div class="content">
        @include('pdf.static_page.sixthPage')
    </div>
    <div class="page-break"></div>

    <div class="content">
        @include('pdf.static_page.seventhPage')
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
        @include('pdf.pdf_static_pages.prosperity_cheque_remaining')
    </div>
    <div class="page-break"></div>
    <div class="content">
        @include('pdf.pdf_static_pages.prosperity_cheque_remaining2')
    </div>
    <div class="page-break"></div>
    <div class="content">
        @include('pdf.pdf_static_pages.prosperity_cheque_remaining3')
    </div>
    <div class="page-break"></div>
    <div class="content">
        @include('pdf.pdf_static_pages.lakshmi_beej_mantra')
    </div>
    <div class="page-break"></div>
    <div class="content">
        @include('pdf.pdf_static_pages.rudraksha')
    </div>

    <div class="content">
        @include('pdf.pdf_static_pages.rudraksha-remaining')
    </div>



    <div class="page-break"></div>
    <div class="content">
        @include('pdf.pdf_static_pages.crystal')
    </div>



    <div class="page-break"></div>
    <div class="content">
        @include('pdf.pdf_static_pages.sanjeevani_cards')

    </div>
    <div class="page-break"></div>
    <div class="content">
        @include('pdf.pdf_static_pages.sanjeevani_cards-remaining')
    </div>
    <div class="page-break"></div>
    <div class="content">
        @include('pdf.pdf_static_pages.sanjeevani_cards-remaining2')
    </div>
    <div class="page-break"></div>
    <div class="content">
        @include('pdf.pdf_static_pages.vastu_guide')
    </div>
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

    {{-- <div class="page-break"></div>
    <div class="content">
        @include('pdf.static_page.ninthPage')
    </div>

    <div class="page-break"></div>
    <div class="content">
        @include('pdf.static_page.tenthPage')
    </div> --}}

    <div class="page-break"></div>
    <div class="content">
        @include('pdf.static_page.eleveenthPage')
    </div>

    <div class="page-break"></div>
    <div class="content">
        @include('pdf.static_page.termAndConditionRemaining')
    </div>


    {{-- </div> --}}
</body>

</html>
