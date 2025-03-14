<?php

use App\Models\ProducVoting;
use Illuminate\Support\Facades\Cache;

return Cache::remember('lang_id_vote', 60, function () {
    return [
        'judul' => ProducVoting::where('nama', 'judul')->where('bahasa_id', 1)->value('isi'),
        'deskripsi' => ProducVoting::where('nama', 'deskripsi')->where('bahasa_id', 1)->value('isi'),
        'btn_coba_fitur' => ProducVoting::where('nama', 'btn_coba_fitur')->where('bahasa_id', 1)->value('isi'),
        'btn_lihat_tutor' => ProducVoting::where('nama', 'btn_lihat_tutor')->where('bahasa_id', 1)->value('isi'),
        'judul_keunggulan' => ProducVoting::where('nama', 'judul_keunggulan')->where('bahasa_id', 1)->value('isi'),
        'deskripsi_keunggulan' => ProducVoting::where('nama', 'deskripsi_keunggulan')->where('bahasa_id', 1)->value('isi'),
        'judul_join' => ProducVoting::where('nama', 'judul_join')->where('bahasa_id', 1)->value('isi'),
        'gambar' => ProducVoting::where('nama', 'gambar')->value('isi'),
        'video' => ProducVoting::where('nama', 'video')->value('isi'),
    ];
});
