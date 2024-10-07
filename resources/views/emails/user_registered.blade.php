<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Our Platform!</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body style="font-family: Arial, sans-serif; background-color: #F1EBE0; margin: 0; padding: 20px;">

    <div style="max-width: 600px; margin: auto; background: white; border-radius: 8px; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); padding: 20px; border: 1px solid #BA9A63;">
        <div style="text-align: center; padding: 20px; background-color: #BA9A63; color: white; border-radius: 8px 8px 0 0;">
            <h1 style="margin: 0; font-size: 24px;">Welcome to Ravi Mundra Numerology</h1>
        </div>
        <div style="padding: 20px; line-height: 1.6; color: #333;">
            <p>Hi {{ $user->name }},</p>
            <p>Thank you for registering! We're excited to have you on board.</p>

            <div style="margin: 10px 0;">
                <i class="fas fa-envelope" style="font-size: 20px; margin-right: 8px; color: #BA9A63;"></i>Email: <strong>{{ $user->email }}</strong>
            </div>
            <div style="margin: 10px 0;">
                <i class="fas fa-key" style="font-size: 20px; margin-right: 8px; color: #BA9A63;"></i>Password: <strong>{{ $password }}</strong>
            </div>
            <div style="margin: 10px 0;">
                <i class="fas fa-phone" style="font-size: 20px; margin-right: 8px; color: #BA9A63;"></i>Phone Number: <strong>{{ $user->phone_number }}</strong>
            </div>
            <div style="margin: 10px 0;">
                <i class="fas fa-calendar-alt" style="font-size: 20px; margin-right: 8px; color: #BA9A63;"></i>Date of Birth: <strong>{{ $user->dob }}</strong>
            </div>

            <p>If you have any questions, feel free to reach out to us.</p>
            <a href="{{ env('EMAIL_URL') }}login" style="display: inline-block; padding: 10px 15px; background-color: #BA9A63; color: white; text-decoration: none; border-radius: 5px; margin-top: 20px; font-weight: bold;">Go to Login Page</a>

            <p style="color: #dc3545; font-weight: bold; margin-top: 20px; text-align: center;">Don't forget to check your numerology results!</p>
        </div>
        <div style="text-align: center; padding: 10px; font-size: 14px; color: #777;">
            <p>&copy; {{ date('Y') }} Ravi Mundrra Numerology. All rights reserved.</p>
        </div>
    </div>

</body>

</html>
