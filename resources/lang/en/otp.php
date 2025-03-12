<?php

use App\Models\FAQ;
use Illuminate\Support\Facades\Cache;

return Cache::remember('lang_en_otp', 60, function () {
    return [
        'nama_brand' => 'VibeFour',
        'slogan' => 'Effortless Voting & Scheduling Solution!',
        'judul' => 'OTP Verification',
        'ket' => 'Enter the verification code that has been sent to your email address.',
        'btn' => 'Verify OTP',
        'resend' => 'Resend OTP?',
        'cooldown' => 'Please try again in',
        'detik' => 'seconds',
    ];
});
