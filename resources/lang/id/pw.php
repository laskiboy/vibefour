<?php

use App\Models\FAQ;
use Illuminate\Support\Facades\Cache;

return Cache::remember('lang_id_pw', 60, function () {
    return [
        'nama_brand' => 'VibeFour',
        'slogan' => 'Solusi Voting & Penjadwalan Tanpa Ribet!',
        'judul' => 'Buat Kata Sandi',
        'judul_ubah' => 'Perbarui Kata Sandi',
        'ket' => 'Masukkan kata sandi baru anda dengan ketentuan :',
        'poin1' => 'Minimal terdiri dari 8 karakter',
        'poin2' => 'Mengandung minimal 1 huruf kecil',
        'poin3' => 'Mengandung minimal 1 digit angka',
        'input_pw' => 'Masukkan Password',
        'input_confirm' => 'Konfirmasi Password',
        'btn' => 'Buat Kata Sandi',
    ];
});
