<?php

use App\Models\Header;
use Illuminate\Support\Facades\Cache;

return Cache::remember('lang_id_header', 60, function () {
    return [
        'beranda' => Header::where('nama', 'Beranda')->where('bahasa_id', 1)->value('isi'),
        'tentang' => Header::where('nama', 'Tentang')->where('bahasa_id', 1)->value('isi'),
        'kontak' => Header::where('nama', 'Kontak')->where('bahasa_id', 1)->value('isi'),
        'produk' => Header::where('nama', 'Produk')->where('bahasa_id', 1)->value('isi'),
        'voting' => Header::where('nama', 'Produk Voting')->where('bahasa_id', 1)->value('isi'),
        'penjadwalan' => Header::where('nama', 'Produk Penjadwalan')->where('bahasa_id', 1)->value('isi'),
        'masuk' => Header::where('nama', 'Teks Masuk')->where('bahasa_id', 1)->value('isi'),
    ];
});
