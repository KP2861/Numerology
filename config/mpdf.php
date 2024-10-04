<?php

return [
    'default_font' => 'dejavusans',  // Fallback font that supports multiple languages
    'mode' => 'utf-8',               // Encoding mode
    'format' => 'A4',                // Paper size
    'fontDir' => [
        resource_path('fonts'),      // Custom fonts directory
        public_path('fonts/Noto_Sans_Devanagari/static'),
        public_path('fonts/Lohit_Gujarati'), // Add this if the fonts are here
    ],
    'fontdata' => [
        'noto-deva' => [
            'R' => 'NotoSansDevanagari-Regular.ttf',
            'B' => 'NotoSansDevanagari-Bold.ttf',
        ],
        'lohit-gujarati' => [
            'R' => 'Lohit-Gujarati.ttf',
        ],
    ],

    'default_font_size' => 12,
    'margin_left' => 15,
    'margin_right' => 15,
    'margin_top' => 16,
    'margin_bottom' => 16,
];
