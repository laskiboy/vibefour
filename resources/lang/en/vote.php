<?php

use App\Models\ProducVoting;
use Illuminate\Support\Facades\Cache;

return Cache::remember('lang_en_vote', 60, function () {
    return [
        'judul' => ProducVoting::where('nama', 'judul')->where('bahasa_id', 2)->value('isi'),
        'deskripsi' => ProducVoting::where('nama', 'deskripsi')->where('bahasa_id', 2)->value('isi'),
        'btn_coba_fitur' => ProducVoting::where('nama', 'btn_coba_fitur')->where('bahasa_id', 2)->value('isi'),
        'btn_lihat_tutor' => ProducVoting::where('nama', 'btn_lihat_tutor')->where('bahasa_id', 2)->value('isi'),
        'judul_keunggulan' => ProducVoting::where('nama', 'judul_keunggulan')->where('bahasa_id', 2)->value('isi'),
        'deskripsi_keunggulan' => ProducVoting::where('nama', 'deskripsi_keunggulan')->where('bahasa_id', 2)->value('isi'),
        'judul_join' => ProducVoting::where('nama', 'judul_join')->where('bahasa_id', 2)->value('isi'),
        'gambar' => ProducVoting::where('nama', 'gambar')->value('isi'),
        'gratis' => 'Free',
        'previlage_gratis_1' => 'Provides Trial Access',
        'previlage_gratis_2' => 'Allows up to 10 feature uses',
        'mont' => '/ Month',
        'previlage_month_1' => 'Full access usage',
        'previlage_month_2' => 'Unlimited feature usage',
        'previlage_month_3' => 'Monthly Subscription',
        'annual' => '/ Year',
        'previlage_annual_3' => 'Annual Subscription',
        'pilih_paket' => 'Choose Package'
    ];
});
