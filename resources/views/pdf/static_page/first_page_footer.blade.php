@php
    // Get the path to the images
    $raviMundraImagePathFooter = storage_path('app/public/' . $result['footerData']['footer_img']);
    $imageQRPath = public_path('frontend/assests/images/pdf/footer-scanner-img.png');

    // Initialize image data variables
    $raviMundrraImageSrcFooter = '';
    $imageQR = '';

    // Check if the footer image path is not empty and the file exists
    if (!empty($result['footerData']['footer_img']) && file_exists($raviMundraImagePathFooter)) {
        $raviMundrraImageDataFooter = base64_encode(file_get_contents($raviMundraImagePathFooter));
        $raviMundrraImageSrcFooter = 'data:image/png;base64,' . $raviMundrraImageDataFooter;
    }

    // Check if the QR image path is not empty and the file exists
    if (file_exists($imageQRPath)) {
        $imageQRData = base64_encode(file_get_contents($imageQRPath));
        $imageQR = 'data:image/png;base64,' . $imageQRData;
    }
@endphp

<div style="height: 200px;">
    <div style="margin:0 40px;">
        <table style="margin: 0 70px 40px 70px; width:100%;">
            <tbody>
                <tr>
                    <td style=" vertical-align:bottom; ">
                        <div>
                            @if (!empty($imageQR))
                                <img src="{{ $imageQR }}" alt="QR Code" style="max-width:100%; height:130px">
                            @else
                                <p style="font-size:16px; color:#000; font-weight:700; margin:0;">
                                    QR Code not available.
                                </p>
                            @endif
                        </div>
                    </td>
                    <td style=" vertical-align:bottom; ">
                        <table style="width: 100%">
                            <tbody>
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
                                    <td style="padding-top: 5px">
                                        <p style="font-size:16px; color:#000; font-weight:700; margin:0;">
                                            Call us on <span style="font-weight: bold; color:#EC4400">7096925750</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding: 5px 0">
                                        <h6 style="font-size:16px; color:#EC4400; font-weight:700; margin:0px 0 0px 0;">
                                            Follow, subscribe like our channel.
                                        </h6>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <table style="width: 100%">
                                            <tbody>
                                                <tr>
                                                    <td style="width: 30px">
                                                        <a href="https://www.instagram.com/Swrahan">
                                                            <svg width="27" height="27" viewBox="0 0 27 27"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M13.2599 0C5.94845 0 0 5.94845 0 13.2601C0 20.572 5.94845 26.5202 13.2599 26.5202C20.5715 26.5202 26.5202 20.572 26.5202 13.2601C26.52 5.94845 20.5713 0 13.2599 0ZM13.2599 25.2124C6.66951 25.2124 1.30783 19.8507 1.30783 13.2601C1.30783 6.66972 6.66951 1.30783 13.2599 1.30783C19.8503 1.30783 25.2124 6.66972 25.2124 13.2601C25.2122 19.8507 19.8503 25.2124 13.2599 25.2124Z"
                                                                    fill="#EC4400" />
                                                                <path
                                                                    d="M13.6671 11.2217C12.3177 11.2217 11.2217 12.3177 11.2217 13.6671C11.2217 15.0164 12.3177 16.1151 13.6671 16.1151C15.0164 16.1151 16.1151 15.0164 16.1151 13.6671C16.1151 12.3177 15.0164 11.2217 13.6671 11.2217Z"
                                                                    fill="#EC4400" />
                                                                <path
                                                                    d="M17.3576 7H9.97608C8.33603 7 7 8.33603 7 9.97608V17.3576C7 19.0003 8.33603 20.3337 9.97608 20.3337H17.3576C19.0003 20.3337 20.3337 19.0003 20.3337 17.3576V9.97608C20.3337 8.33603 19.0003 7 17.3576 7ZM13.6668 17.987C11.2854 17.987 9.34673 16.0482 9.34673 13.6668C9.34673 11.2854 11.2854 9.34939 13.6668 9.34939C16.0482 9.34939 17.987 11.2854 17.987 13.6668C17.987 16.0482 16.0482 17.987 13.6668 17.987ZM18.0776 10.1334C17.5736 10.1334 17.1629 9.7254 17.1629 9.22139C17.1629 8.71738 17.5736 8.3067 18.0776 8.3067C18.5816 8.3067 18.9923 8.71738 18.9923 9.22139C18.9923 9.7254 18.5816 10.1334 18.0776 10.1334Z"
                                                                    fill="#EC4400" />
                                                            </svg>
                                                        </a>
                                                    </td>
                                                    <td style="width: 30px">
                                                        <a href="https://www.facebook.com/Swrahan">
                                                            <svg width="28" height="27" viewBox="0 0 28 27"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M13.7804 0C6.46896 0 0.520508 5.94845 0.520508 13.2601C0.520508 20.572 6.46896 26.5202 13.7804 26.5202C21.092 26.5202 27.0407 20.572 27.0407 13.2601C27.0405 5.94845 21.0918 0 13.7804 0ZM13.7804 25.2124C7.19001 25.2124 1.82834 19.8507 1.82834 13.2601C1.82834 6.66972 7.19001 1.30783 13.7804 1.30783C20.3708 1.30783 25.7329 6.66972 25.7329 13.2601C25.7327 19.8507 20.3708 25.2124 13.7804 25.2124Z"
                                                                    fill="#EC4400" />
                                                                <path
                                                                    d="M17.8679 5.479H14.9916C14.9848 5.479 14.9783 5.47922 14.972 5.47988C12.0679 5.48903 11.6887 7.51682 11.6871 9.28915C11.6832 9.30572 11.681 9.32272 11.681 9.34038V10.5846H9.69356C9.57324 10.5846 9.47559 10.6822 9.47559 10.8025V13.8709C9.47559 13.9915 9.57324 14.0889 9.69356 14.0889H11.681V20.8223C11.681 20.9428 11.7787 21.0402 11.899 21.0402H14.7995C14.9201 21.0402 15.0175 20.9428 15.0175 20.8223V14.0891H17.8677C17.9883 14.0891 18.0857 13.9917 18.0857 13.8711V10.8027C18.0857 10.6824 17.9883 10.5848 17.8677 10.5848H14.7995V8.93538H17.8677C17.9883 8.93538 18.0857 8.83773 18.0857 8.71741V5.69698C18.0859 5.57666 17.9883 5.479 17.8679 5.479Z"
                                                                    fill="#EC4400" />
                                                            </svg>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="https://www.youtube.com/@Swrahan">
                                                            <svg width="27" height="27" viewBox="0 0 27 27"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M13.2599 0C5.94845 0 0 5.94845 0 13.2601C0 20.572 5.94845 26.5202 13.2599 26.5202C20.5715 26.5202 26.5202 20.572 26.5202 13.2601C26.52 5.94845 20.5713 0 13.2599 0ZM13.2599 25.2124C6.66951 25.2124 1.30783 19.8507 1.30783 13.2601C1.30783 6.66972 6.66951 1.30783 13.2599 1.30783C19.8503 1.30783 25.2124 6.66972 25.2124 13.2601C25.2122 19.8507 19.8503 25.2124 13.2599 25.2124Z"
                                                                    fill="#EC4400" />
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                    d="M20.6882 11.1478C20.5848 9.7238 20.3254 8.25344 18.5048 8.14585C15.0936 7.95138 11.6741 7.95138 8.26289 8.14585C6.44234 8.25133 6.18287 9.7238 6.0795 11.1478C5.9735 12.5634 5.9735 13.985 6.0795 15.4006C6.18287 16.8246 6.44234 18.295 8.26289 18.4025C11.6741 18.597 15.0936 18.597 18.5048 18.4025C20.3254 18.2971 20.5848 16.8246 20.6882 15.4006C20.7942 13.985 20.7942 12.5634 20.6882 11.1478ZM11.9082 15.1728V10.9537L15.9164 13.0632L11.9082 15.1728Z"
                                                                    fill="#EC4400" />
                                                            </svg>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        {{-- <a href="#"
                            style=" font-size:14px; color: #0B77CE; font-weight:700; display: block; word-break: break-word; overflow-wrap: break-word;  margin:0px 0; display:block; text-decoration:none">
                            https.//www.youtube.com/@SwatiMundrra
                        </a>
                        <br>
                        <a href="https://www.facebook.com/Swrahan"
                            style=" font-size:14px; color: #0B77CE; font-weight:700; display: block;
                               word-break: break-word;
                               overflow-wrap: break-word;  margin:0px 0; display:block; text-decoration:none">https.//www.facebook.com/@SwatiMundrra\
                        </a>
                        <br>
                        <a href="https://www.instagram.com/Swrahan"
                            style=" font-size:14px; color: #0B77CE; font-weight:700; display: block;
                             word-break: break-word;
                             overflow-wrap: break-word;  margin:0px 0; display:block; text-decoration:none">https.//www.instagram.com/@SwatiMundrra
                        </a> --}}




                    </td>
                    <td rowspan="1" style=" vertical-align:bottom; ">
                        @if (!empty($raviMundrraImageSrcFooter))
                            <img src="{{ $raviMundrraImageSrcFooter }}" alt="Footer Image" style="width: 130px">
                        @endif
                    </td>

                </tr>
                <tr>
                    <td colspan="3" style="text-align:center; padding-top:20px; vertical-align: middle;">
                        {PAGENO}
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
