<?php

namespace App\Http\Controllers;

use Mpdf\Mpdf;

class PDFController extends Controller
{
    public function downloadPDF()
    {
        // Initialize mPDF with default settings
        $mpdf = new \Mpdf\Mpdf([
            'default_font_size' => 12,
            'mode' => 'utf-8',
            'format' => 'A4',
            'margin_left' => 10,
            'margin_right' => 10,
            'margin_top' => 10,
            'margin_bottom' => 10,
        ]);
    
        // Enable automatic font and language detection
        $mpdf->autoScriptToLang = true;
        $mpdf->autoLangToFont = true;
    
        // Example sections for the index
        $sections = [
            ['label' => 'Aardvark', 'content' => 'Content for Aardvark...'],
            ['label' => 'Banana', 'content' => 'Content for Banana...'],
            ['label' => 'Cantaloupe', 'content' => 'Content for Cantaloupe...'],
        ];
    
        // Add a new page for the index
        $mpdf->AddPage();
        $mpdf->WriteHTML("<h1>Index</h1>");
    
        // Create links and store them in the array before writing HTML
        foreach ($sections as &$section) {
            $section['link'] = $mpdf->AddLink(); // Create a link for each section
            $mpdf->WriteHTML("<a href='#' onclick='this.click();'>{$section['label']}</a><br />");
        }
        unset($section); // Unset reference to avoid unintended overwrites
    
        // Write each section and add the corresponding bookmarks
        foreach ($sections as $section) {
            $mpdf->AddPage(); // Start each section on a new page
            $mpdf->Bookmark($section['label'], 1); // Create a bookmark for the section
            $mpdf->SetLink($section['link']); // Link the section to the index
            $mpdf->WriteHTML("<h1>{$section['label']}</h1><p>{$section['content']}</p>");
        }
    
        // Output the generated PDF
        $mpdf->Output('my_document.pdf', 'I');
    }
    
}
