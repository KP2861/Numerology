<?php

namespace App\Http\Controllers;

use Mpdf\Mpdf;

class PDFController extends Controller
{
    public function downloadPDF() // No parameters
    {
        // Initialize mPDF instance with settings
        $mpdf = new Mpdf([
            'tempDir' => '/tmp',
            'format' => 'A4',
            'margin_left' => 10,
            'margin_right' => 10,
            'margin_top' => 20,
            'margin_bottom' => 30, // Space for footers
        ]);

        // Define the footers
        $footerHtmlFirstAndLast = $this->getFooterHtml('First and Last Page');
        $footerHtmlCommon = $this->getFooterHtml('Middle Pages');

        // Add the first page and set the footer
        $mpdf->AddPage();
        $mpdf->WriteHTML('<h1>Page 1</h1>');
        $mpdf->WriteHTML('<p>This is the content for page 1. Here you can add your report information.</p>');
        $mpdf->SetHTMLFooter($footerHtmlFirstAndLast);

        // Add additional pages (no footer)
        for ($i = 2; $i <= 4; $i++) {
            $mpdf->AddPage();
            $mpdf->WriteHTML('<h1>Page ' . $i . '</h1>');
            $mpdf->WriteHTML('<p>This is the content for page ' . $i . '. More information can be added here.</p>');
            $mpdf->SetHTMLFooter($footerHtmlCommon);
        }

        // Add the last page and set the footer
        $mpdf->AddPage();
        $mpdf->WriteHTML('<h1>Page 5</h1>');
        $mpdf->WriteHTML('<p>This is the content for the last page. Final remarks and conclusions can go here.</p>');
        $mpdf->SetHTMLFooter($footerHtmlFirstAndLast);

        // Output the PDF
        return response($mpdf->Output('report.pdf', 'D'), 200)
            ->header('Content-Type', 'application/pdf');
    }

    // Function to create footer HTML
    private function getFooterHtml($type)
    {
        $footerHtml = '<table style="width:100%; height:100%; position:relative; padding:30px 80px">';
        $footerHtml .= '<tr>';
        $footerHtml .= '<td style="vertical-align: bottom;">';
        $footerHtml .= '<h6 style="font-size:38px; color:#010705; font-weight:700;">Follow, subscribe like our channel.</h6>';
        $footerHtml .= '<div>';
        for ($i = 0; $i < 3; $i++) {
            $footerHtml .= '<a href="#" style="width:100%; font-size:32px; color:#DCA36E; font-weight:700; display:block; text-decoration:none">https://www.youtube.com/@RaviMundrraNumerology</a>';
        }
        $footerHtml .= '</div></td>';
        if ($type === 'First and Last Page') {
            $footerHtml .= '<td><div><img src="https://stgps.appsndevs.com/numerology/public/frontend/assests/images/hero-section/swati-mundra.jpg" alt="ganpati" style="margin-left:300px; width:400px; height:auto;"></div></td>';
        }
        $footerHtml .= '</tr></table>';

        return $footerHtml;
    }
}
