<!DOCTYPE html>
<html>
<head>
    <title>Reset Your Password</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
            color: #333333;
        }
        .container {
            max-width: 600px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color:#2F387F;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
        }
        .footer {
            margin-top: 20px;
            text-align: center;
            font-size: 0.9em;
            color: #4b99f2;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Reset Your Password</h2>
        <p>You are receiving this email because we received a password reset request for your MedSky airline account.</p>
        <p>Please click the button below to reset your password:</p>
        <p><a href="{{ $resetLink }}" class="button">Reset Password</a></p>
        <p>If you did not request a password reset, no further action is required.</p>
        <div class="footer">
            <p>Thank you for using MedSky airline.</p>
        </div>
    </div>
</body>
</html>

