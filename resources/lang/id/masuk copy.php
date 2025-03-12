<?php

use App\Models\FAQ;
use Illuminate\Support\Facades\Cache;

return Cache::remember('lang_id_masuk', 60, function () {
    return [
        'nama_brand' => 'VibeFour',
        'slogan' => 'Solusi Voting & Penjadwalan Tanpa Ribet!',
        'input_usn_email' => 'Masukkan Username Atau Email',
        'input_usn' => 'Masukkan Username',
        'input_email' => 'Masukkan Email',
        'input_nama' => 'Masukkan Nama',
        'input_password' => 'Masukkan Password',
        'lupa_pw' => 'Lupa Password?',
        'regis' => 'Belum Punya Akun?',
        'daftar' => 'Daftar',
        'login' => 'Sudah Punya Akun?',
        'masuk' => 'Masuk',
    ];
});
