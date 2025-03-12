<?php

use App\Models\FAQ;
use Illuminate\Support\Facades\Cache;

return Cache::remember('lang_en_masuk', 60, function () {
    return [
        'nama_brand' => 'VibeFour',
        'slogan' => 'Effortless Voting & Scheduling Solution!',
        'input_usn_email' => 'Enter Username Or Email',
        'input_usn' => 'Enter Username',
        'input_email' => 'Enter Email',
        'input_nama' => 'Enter Name',
        'input_password' => 'Enter Password',
        'lupa_pw' => 'Forgot Password?',
        'regis' => 'Don’t have an account?',
        'daftar' => 'Sign Up',
        'login' => 'Already have an account?',
        'masuk' => 'Login',
    ];
});
