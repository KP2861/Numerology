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
                <td style="padding: 0px 0 0px 0;  width:100%; color: #000">
                    <div style="width:100%;">
                        <ul style="color:#000; list-style-type: disc; padding-left: 20px;">
                            <li style="color: #000; font-size:14px;">
                                <span style="font-weight: bold">
                                    Vedic :</span> Alpyati privayay
                            </li>
                        </ul>
                    </div>
                </td>
            </tr>
            <tr>
                <td style="padding: 0px 0 0 10px;  width:100%; color: #000; font-size:14px">
                    <span style="font-weight: bold">
                        When to chant : </span> Any time
                </td>
            </tr>
            <tr>
                <td style="padding: 0px 0 0 10px;  width:100%; color: #000; font-size:14px">
                    <span style="font-weight: bold">
                        How many times in every occurrence:
                    </span>
                    108 times Daily.
                </td>
            </tr>







            <tr>
                <td style="padding: 15px 0 5px 0;  width:100%; color: #000">
                    <div style="width:100%;">
                        <ul style="color:#000; list-style-type: disc; padding-left: 20px;">
                            <li style="color: #000; font-size:16px; font-weight:bold">
                                For client attraction :
                            </li>
                        </ul>
                    </div>
                </td>
            </tr>
            <tr>
                <td style="padding: 0px 0 0 10px;  width:100%; color: #000; font-size:14px">
                    <span style="font-weight: bold">
                        Switch Word :</span>LUKAS TASO
                </td>
            </tr>
            <tr>
                <td style="padding: 0px 0 0 10px;  width:100%; color: #000; font-size:14px">
                    <span style="font-weight: bold">
                        When to chant : </span> Any time
                </td>
            </tr>
            <tr>
                <td style="padding: 0px 0 0 10px;  width:100%; color: #000; font-size:14px">
                    <span style="font-weight: bold">
                        How many times in every occurrence:
                    </span>
                    51 times Daily.
                </td>
            </tr>






            <tr>
                <td style="padding: 15px 0 5px 0;  width:100%; color: #000">
                    <div style="width:100%;">
                        <ul style="color:#000; list-style-type: disc; padding-left: 20px;">
                            <li style="color: #000; font-size:16px; font-weight:bold">
                                Job/promotion/interview :
                            </li>
                        </ul>
                    </div>
                </td>
            </tr>
            <tr>
                <td style="padding: 0px 0 0 10px;  width:100%; color: #000; font-size:14px">
                    <span style="font-weight: bold">
                        Switch Word :</span>Chemi-Fortune-Eliza-La-Magia-Verminticus (shemi fortune pronounce karna hai)
                </td>
            </tr>
            <tr>
                <td style="padding: 0px 0 0 10px;  width:100%; color: #000; font-size:14px">
                    <span style="font-weight: bold">
                        When to chant : </span> Any time
                </td>
            </tr>
            <tr>
                <td style="padding: 0px 0 0 10px;  width:100%; color: #000; font-size:14px">
                    <span style="font-weight: bold">
                        How many times in every occurrence:
                    </span>
                    5 min daily 3 times.
                </td>
            </tr>




            <tr>
                <td style="padding: 15px 0 5px 0;  width:100%; color: #000">
                    <div style="width:100%;">
                        <ul style="color:#000; list-style-type: disc; padding-left: 20px;">
                            <li style="color: #000; font-size:16px; font-weight:bold">
                                Love from family n friend :
                            </li>
                        </ul>
                    </div>
                </td>
            </tr>
            <tr>
                <td style="padding: 0px 0 0 10px;  width:100%; color: #000; font-size:14px">
                    <span style="font-weight: bold">
                        Switch Word :</span>Hyus le de gama
                </td>
            </tr>
            <tr>
                <td style="padding: 0px 0 0 10px;  width:100%; color: #000; font-size:14px">
                    <span style="font-weight: bold">
                        When to chant : </span> Any time
                </td>
            </tr>
            <tr>
                <td style="padding: 0px 0 0 10px;  width:100%; color: #000; font-size:14px">
                    <span style="font-weight: bold">
                        How many times in every occurrence:
                    </span>
                    5 min daily 3 times.
                </td>
            </tr>
















            <tr>
                <td style="padding: 15px 0 0px 0;  width:100%; color: #000">
                    <div style="width:100%;">
                        <ul style="color:#000; list-style-type: disc; padding-left: 20px;">
                            <li style="color: #000; font-size:14px;">
                                <span style="font-weight: bold">
                                    Vedic:</span> RAMRAJ
                            </li>
                        </ul>
                    </div>
                </td>
            </tr>

            <tr>
                <td style="padding: 0px 0 0 10px;  width:100%; color: #000; font-size:14px">
                    <span style="font-weight: bold">
                        When to chant : </span> Any time
                </td>
            </tr>
            <tr>
                <td style="padding: 0px 0 0 10px;  width:100%; color: #000; font-size:14px">
                    <span style="font-weight: bold">
                        How many times in every occurrence:
                    </span>
                    5 min daily 3 times.
                </td>
            </tr>












            <tr>
                <td style="padding: 15px 0 5px 0;  width:100%; color: #000">
                    <div style="width:100%;">
                        <ul style="color:#000; list-style-type: disc; padding-left: 20px;">
                            <li style="color: #000; font-size:16px; font-weight:bold">
                                To Buy/Sale Property :
                            </li>
                        </ul>
                    </div>
                </td>
            </tr>
            <tr>
                <td style="padding: 0px 0 0 10px;  width:100%; color: #000; font-size:14px">
                    <span style="font-weight: bold">
                        Switch Word :</span> Luc-Behela-murtuja
                </td>
            </tr>
            <tr>
                <td style="padding: 0px 0 0 10px;  width:100%; color: #000; font-size:14px">
                    <span style="font-weight: bold">
                        When to chant : </span> Any time
                </td>
            </tr>
            <tr>
                <td style="padding: 0px 0 0 10px;  width:100%; color: #000; font-size:14px">
                    <span style="font-weight: bold">
                        How many times in every occurrence:
                    </span>
                    5 min daily 3 times.
                </td>
            </tr>



            <tr>
                <td style="padding: 15px 0 0px 0;  width:100%; color: #000">
                    <div style="width:100%;">
                        <ul style="color:#000; list-style-type: disc; padding-left: 20px;">
                            <li style="color: #000; font-size:14px;">
                                <span style="font-weight: bold">
                                    Vedic:</span> shree laxmi narayan divya dham
                            </li>
                        </ul>
                    </div>
                </td>
            </tr>

            <tr>
                <td style="padding: 0px 0 0 10px;  width:100%; color: #000; font-size:14px">
                    <span style="font-weight: bold">
                        When to chant : </span> Morning and Evening
                </td>
            </tr>
            <tr>
                <td style="padding: 0px 0 0 10px;  width:100%; color: #000; font-size:14px">
                    <span style="font-weight: bold">
                        How many times in every occurrence:
                    </span>
                    108 times
                </td>
            </tr>



        </tbody>
    </table>
</div>
{{-- <div style="height: 200px;">
    @include('pdf.static_page.footer')
</div> --}}
