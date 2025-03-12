<?php

use App\Models\FAQ;
use Illuminate\Support\Facades\Cache;

return Cache::remember('lang_id_lupa', 60, function () {
    return [
        'nama_brand' => 'VibeFour',
        'slogan' => 'Solusi Voting & Penjadwalan Tanpa Ribet!',
        'judul_lupa' => 'Lupa Kata Sandi',
        'ket' => 'Masukkan email Anda yang telah terdaftar. Kami akan mengirimkan email untuk melakukan reset kata sandi.',
        'input_email' => 'Masukkan Email',
        'btn_lupa' => 'Lupa Kata Sandi',
        'back' => 'Kembali ke login?',
    ];
});
