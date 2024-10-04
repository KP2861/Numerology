<?php

namespace App\Services;

use Mpdf\Mpdf;

class PdfService
{
    protected $mpdf;

    public function __construct()
    {
        // Fetch mPDF configuration settings from the config file
        $config = config('mpdf');

        // Initialize mPDF with the fetched config settings
        $this->mpdf = new Mpdf([
            'default_font' => $config['default_font'],
            'mode' => $config['mode'],
            'format' => $config['format'],
            'margin_left' => $config['margin_left'],
            'margin_right' => $config['margin_right'],
            'margin_top' => $config['margin_top'],
            'margin_bottom' => $config['margin_bottom'],
        ]);
    }

    public function generatePDF($htmlContent, $filename = 'document.pdf', $outputMode = 'D')
    {
        // Write the HTML content to the PDF
        $this->mpdf->WriteHTML($htmlContent);

        // Output the PDF (Download or view)
        return $this->mpdf->Output($filename, $outputMode);
    }
}
