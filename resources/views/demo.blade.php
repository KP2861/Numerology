<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PDF Test</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h2 {
            page-break-before: always; /* Start each section on a new page */
        }
    </style>
</head>
<body>
    <h1>Test PDF Links</h1>
    
    <h2>Index</h2>
    <ul>
        <li><a href="#section1">Section 1</a></li>
        <li><a href="#section2">Section 2</a></li>
        <li><a href="#section3">Section 3</a></li>
    </ul>

    <h2 id="section1">Section 1</h2>
    <p>Details for Section 1...</p>

    <h2 id="section2">Section 2</h2>
    <p>Details for Section 2...</p>

    <h2 id="section3">Section 3</h2>
    <p>Details for Section 3...</p>
</body>
</html>
