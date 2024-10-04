<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Success</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body style="font-family: Arial, sans-serif; background-color: #F1EBE0; margin: 0; padding: 20px;">

    <div style="max-width: 600px; margin: auto; background: white; border-radius: 8px; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); padding: 20px; border: 1px solid #BA9A63;">
        <div style="text-align: center; padding: 20px; background-color: #BA9A63; color: white; border-radius: 8px 8px 0 0;">
            <h1 style="margin: 0; font-size: 24px;">Payment Success</h1>
        </div>
        <div style="padding: 20px; line-height: 1.6; color: #333;">
            <p>Thank you for your payment!</p>
            <p>We have successfully received your payment for the numerology service.</p>
            <p><strong>Details:</strong></p>
            <ul style="padding-left: 20px;">
                {{-- <li>Payment Purpose: {{ $emailData['paymentPurpose'] }}</li> --}}
                {{-- <li>First Name: {{ $nameNumerologyData['first_name'] }}</li>
                <li>Last Name: {{ $nameNumerologyData['last_name'] }}</li> --}}
                <li>Numerology Type: <strong style="color: #BA9A63;">{{ $emailData['paymentPurpose'] }}</strong></li>
                <li>Payment ID: <strong style="color: #BA9A63;">{{ $NumerologyData['payment_id'] }}</strong></li>
            </ul>
            <p>If you have any questions, feel free to reach out to our support team.</p>
        </div>
        <div style="text-align: center; padding: 10px; font-size: 14px; color: #777;">
            <p>&copy; {{ date('Y') }} Ravi Mundra Numerology. All rights reserved.</p>
        </div>
    </div>

</body>

</html>
