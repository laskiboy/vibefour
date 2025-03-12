<?php

use App\Models\FAQ;
use Illuminate\Support\Facades\Cache;

return Cache::remember('lang_id_otp', 60, function () {
    return [
        'nama_brand' => 'VibeFour',
        'slogan' => 'Solusi Voting & Penjadwalan Tanpa Ribet!',
        'judul' => 'Verifikasi OTP',
        'ket' => 'Masukkan kode Verifikasi anda yang telah dikirim ke alamat email anda sebelumnya.',
        'btn' => 'Verifikasi OTP',
        'resend' => 'Kirim Ulang OTP?',
        'cooldown' => 'Silahkan coba lagi dalam',
        'detik' => 'detik',
    ];
});
