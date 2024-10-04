<!DOCTYPE html>
<html>
<head>
    <title>Numerology Report</title>
    <style>
        /* Add any necessary styles here */
        .card {
            border: 1px solid #ddd;
            padding: 15px;
            margin-bottom: 20px;
        }
        .partition {
            border: 1px solid #ddd;
            padding: 15px;
            margin-bottom: 20px;
        }
        .partition-header {
            padding: 10px;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="card">
        <h2>Name Numerology Report</h2>
        <div class="partition border-primary">
            <div class="partition-header bg-primary">
                <h5 class="mb-0">First Name Analysis</h5>
            </div>
            <h5 class="text-primary">First Name Total: <span class="fw-bold">{{ $result['First Name Total'] }}</span></h5>
            <p>First Name Single Digit: <span class="fw-bold">{{ $result['First Name Single Digit'] }}</span> 
                <span class="text-muted">({{ $result['First Name Interpretation'] }})</span>
            </p>
        </div>

        <!-- Full Name Partition -->
        <div class="partition border-success">
            <div class="partition-header bg-success">
                <h5 class="mb-0">Full Name Analysis</h5>
            </div>
            <h5 class="text-success">Full Name Total: <span class="fw-bold">{{ $result['Full Name Total'] }}</span></h5>
            <p>Full Name Single Digit: <span class="fw-bold">{{ $result['Full Name Single Digit'] }}</span> 
                <span class="text-muted">({{ $result['Full Name Interpretation'] }})</span>
            </p>
        </div>
    </div>
</body>
</html>



