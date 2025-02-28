<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kode OTP Anda</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 100%;
            max-width: 600px;
            margin: 20px auto;
            background: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .otp {
            font-size: 24px;
            font-weight: bold;
            color: #333;
            margin: 20px 0;
            letter-spacing: 4px;
        }

        .footer {
            margin-top: 20px;
            font-size: 12px;
            color: #777;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Kode OTP Anda</h2>
        <p>Gunakan kode berikut untuk verifikasi akun Anda:</p>
        <div class="otp">{{ $otp }}</div>
        <p>Kode ini berlaku selama 10 menit.</p>
        <p>Jika Anda tidak meminta kode ini, abaikan email ini.</p>
        <div class="footer">
            <p>&copy; {{ date('Y') }} VibeFour. Semua Hak Dilindungi.</p>
        </div>
    </div>
</body>

</html>
