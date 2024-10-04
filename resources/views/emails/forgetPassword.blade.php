<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body style="font-family: Arial, sans-serif; background-color: #F1EBE0; margin: 0; padding: 20px;">

    <div style="max-width: 600px; margin: auto;">
        <div style="text-align: center; padding: 20px; background-color: #BA9A63; color: white; border-radius: 8px;">
            <h2 style="margin: 0;">Password Reset Request</h2>
        </div>
        <div style="background-color: white; border-radius: 8px; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); padding: 20px; margin-top: 10px; border: 1px solid #BA9A63;">
            <p style="line-height: 1.6; color: #333;">To reset your password, please click the button below:</p>
            <a href="{{ env('EMAIL_URL') . 'reset-password/' . $token }}" style="display: inline-block; padding: 10px 20px; background-color: #BA9A63; color: white; text-decoration: none; border-radius: 5px; font-weight: bold; margin-top: 20px;">
                <i class="fas fa-lock" style="margin-right: 5px;"></i> Reset Password
            </a>
            <p style="line-height: 1.6; color: #333; margin-top: 20px;">If you did not request a password reset, please ignore this email.</p>
        </div>
        <div style="text-align: center; padding: 10px; font-size: 14px; color: #777; margin-top: 10px;">
            <p>&copy; {{ date('Y') }} Ravi Mundra Numerology. All rights reserved.</p>
        </div>
    </div>

</body>

</html>
