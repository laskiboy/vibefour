<?php

use App\Models\ProductScheduling;
use Illuminate\Support\Facades\Cache;

return Cache::remember('lang_en_schedule', 60, function () {
    return [
        'judul' => ProductScheduling::where('nama', 'judul')->where('bahasa_id', 2)->value('isi'),
        'deskripsi' => ProductScheduling::where('nama', 'deskripsi')->where('bahasa_id', 2)->value('isi'),
        'btn_coba_fitur' => ProductScheduling::where('nama', 'btn_coba_fitur')->where('bahasa_id', 2)->value('isi'),
        'btn_lihat_tutor' => ProductScheduling::where('nama', 'btn_lihat_tutor')->where('bahasa_id', 2)->value('isi'),
        'judul_keunggulan' => ProductScheduling::where('nama', 'judul_keunggulan')->where('bahasa_id', 2)->value('isi'),
        'deskripsi_keunggulan' => ProductScheduling::where('nama', 'deskripsi_keunggulan')->where('bahasa_id', 2)->value('isi'),
        'judul_join' => ProductScheduling::where('nama', 'judul_join')->where('bahasa_id', 2)->value('isi'),
        'gambar' => ProductScheduling::where('nama', 'gambar')->value('isi'),
    ];
});
