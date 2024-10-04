<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Name Numerology Result</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .brown-border-table {
            border: 1px solid #BA9A63;
        }

        .brown-text {
            color: #BA9A63;
        }

        .brown-border-table table.table tbody tr td {
            width: 50%;
        }

        .brown-border-table table.table tbody tr td:first-child {
            border-right: 1px solid #BA9A63;
        }

        .outline-btn {
            background: #fff;
            border: 1px solid #BA9A63;
            color: #BA9A63;
        }

        .filled-btn {
            background: #BA9A63;
            border: 1px solid transparent;
            color: #fff;
            margin-right: 20px;
        }

        .inner-wrapper {
            background: #F1EBE0;
            border: 1px solid #BA9A63;
        }

        .blurred {
            filter: blur(3.2px);
            pointer-events: none;
            user-select: none;
        }

        .red-text {
            color: #dc3545;
            font-weight: bold;
            margin-top: 20px;
        }

        .malefic-bg {
            color: #fff;
            background-color: rgb(180, 5, 5);
            filter: blur(0.2px);
            font: 14px;
        }

        .malefic-text {
            background-color: rgb(248, 244, 244);
        }

        .partition {
            border: 2px solid #BA9A63;
            padding: 15px;
            border-radius: 10px;
            background-color: #F1EBE0;
            margin-bottom: 20px;
        }

        .partition-header {
            background-color: #BA9A63;
            color: #fff;
            padding: 10px;
            border-radius: 5px;
            text-align: center;
            margin-bottom: 10px;
        }

        .border-primary {
            border-color: #BA9A63 !important;
        }

        .border-success {
            border-color: #BA9A63 !important;
        }

        .border-secondary {
            border-color: rgb(68, 56, 56) !important;
        }
    </style>
</head>

<body>
    <div class="container mt-5 border-secondary">
        <h1 class="text-center mb-4 brown-text fw-bold">Name Numerology Result</h1>

        <div class="row">
            <div class="col-12">
                <div class="partition border-primary inner-wrapper">
                    <div class="partition-header">
                        <h5 class="mb-0"> Name Analysis</h5>
                    </div>
                    <div class="fist-name">
                        <h5 class="brown-text">First Name Total: <span
                                class="fw-bold">{{ $result['first_name_total'] }}</span></h5>
                        <p>First Name Single Digit: <span
                                class="fw-bold ">{{ $result['first_name_single_digit'] }}</span>
                            <span class="text-muted ">({{ $result['first_name_interpretation'] }})</span>
                        </p>
                    </div>
                    <div class="full-name">
                        <h5 class="brown-text">Full Name Total: <span
                                class="fw-bold">{{ $result['full_name_total'] }}</span></h5>
                        <p>Full Name Single Digit: <span class="fw-bold ">{{ $result['full_name_single_digit'] }}</span>
                            <span class="text-muted ">({{ $result['full_name_interpretation'] }})</span>
                        </p>
                    </div>
                    <!-- First Name Letters Details -->
                </div>
            </div>
            <div class="col-12">
                <div class="partition border-primary inner-wrapper">
                    <div class="partition-header">
                        <h5 class="mb-0"> Letter Analysis</h5>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div>
                                <h5 class="brown-text mt-3">First Name Letter Breakdown:</h5>
                                @foreach ($result['first_name_details'] as $detail)
                                    <div class="partition border-secondary ">
                                        <p><strong>Letter:</strong> <span
                                            class="blurred">{{ $detail['letter'] }}</span></p>
                                        <p><strong>Strengths:</strong><span
                                                class="blurred">{{ $detail['strengths'] }}</span>
                                        </p>
                                        <p><strong>Weaknesses:</strong> <span
                                                class="blurred">{{ $detail['weaknesses'] }}</span>
                                        </p>
                                        <p><strong>Best Jobs:</strong> <span
                                                class="blurred">{{ $detail['best_jobs'] }}</span>
                                        </p>
                                        <p><strong>Nature:</strong> <span
                                                class="blurred">{{ $detail['nature'] }}</span></p>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div>
                                <h5 class="brown-text mt-3">Last Name Letter Breakdown:</h5>
                                @foreach ($result['last_name_details'] as $detail)
                                    <div class="partition border-secondary ">
                                        <p><strong>Letter:</strong> <span
                                                class="blurred">{{ $detail['letter'] }}</span></p>
                                        <p><strong>Strengths:</strong> <span
                                                class="blurred">{{ $detail['strengths'] }}</span>
                                        </p>
                                        <p><strong>Weaknesses:</strong> <span
                                                class="blurred">{{ $detail['weaknesses'] }}</span></p>
                                        <p><strong>Best Jobs:</strong> <span
                                                class="blurred">{{ $detail['best_jobs'] }}</span>
                                        </p>
                                        <p><strong>Nature:</strong> <span
                                                class="blurred">{{ $detail['nature'] }}</span></p>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Special Message Display -->
        <div class="row">
            <div class="col-12">
                <div class="partition border-secondary">
                    <div class="partition-header bg-secondary">
                        <h5 class="mb-0">Special Message</h5>
                    </div>
                    <span class='blurred'>
                        <p class="text-muted">{{ $result['first_name_interpretation'] }}</p>
                        <p class="text-muted">{{ $result['full_name_interpretation'] }}</p>
                    </span>
                    <p class="red-text text-center">Pay and see full report</p>
                </div>
            </div>
        </div>

        <div class="text-center mt-2">
            <div class="text-center my-4">
                <a href="{{ route('Website.pages.numerology') }}" class="btn filled-btn px-4 py-2">Calculate Again</a>
                <a href="{{ route('payment.get') }}" class="btn outline-btn px-4 py-2">Proceed to Payment</a>
            </div>
        </div>
