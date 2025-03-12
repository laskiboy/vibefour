<?php

use App\Models\FAQ;
use Illuminate\Support\Facades\Cache;

return Cache::remember('lang_en_forgot', 60, function () {
    return [
        'nama_brand' => 'VibeFour',
        'slogan' => 'Effortless Voting & Scheduling Solution!',
        'judul_lupa' => 'Forgot Password',
        'ket' => 'Enter your registered email. We will send you an email to reset your password.',
        'input_email' => 'Enter Email',
        'btn_lupa' => 'Forgot Password',
        'back' => 'Back to login?',
    ];
});
