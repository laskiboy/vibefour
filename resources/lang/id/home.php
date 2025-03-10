<?php

use App\Models\Home;
use Illuminate\Support\Facades\Cache;

return Cache::remember('lang_id_home', 60, function () {
    return [
        'judul_satu' => Home::where('nama', 'Judul 1')->value('isi'),
        'judul_dua' => Home::where('nama', 'Judul 2')->value('isi'),
        'masuk' => Home::where('nama', 'Masuk')->where('bahasa_id', 1)->value('isi'),
        'slogan' => Home::where('nama', 'Slogan')->where('bahasa_id', 1)->value('isi'),
        'judul_fitur' => Home::where('nama', 'Judul Fitur')->where('bahasa_id', 1)->value('isi'),
        'ket_fitur' => Home::where('nama', 'Keterangan Fitur')->where('bahasa_id', 1)->value('isi'),
        'judul_pencapaian' => Home::where('nama', 'Judul Pencapaian')->where('bahasa_id', 1)->value('isi'),
        'ket_pencapaian' => Home::where('nama', 'Keterangan Pencapaian')->where('bahasa_id', 1)->value('isi'),
        'judul_testimoni' => Home::where('nama', 'Judul Testimoni')->where('bahasa_id', 1)->value('isi'),
    ];
});
