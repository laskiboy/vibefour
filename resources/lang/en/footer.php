<?php

use App\Models\Footer;
use Illuminate\Support\Facades\Cache;

return Cache::remember('lang_en_footer', 60, function () {
    return [
        'alamat' => Footer::where('nama', 'Alamat')->value('isi'),
        'wa' => Footer::where('nama', 'No WA')->value('isi'),
        'telp' => Footer::where('nama', 'No Telp')->value('isi'),
        'judul_produk' => Footer::where('nama', 'Judul Produk')->where('bahasa_id', 2)->value('isi'),
        'voting' => Footer::where('nama', 'Voting')->where('bahasa_id', 2)->value('isi'),
        'penjadwalan' => Footer::where('nama', 'Penjadwalan')->where('bahasa_id', 2)->value('isi'),
        'judul_menu' => Footer::where('nama', 'Judul Menu')->where('bahasa_id', 2)->value('isi'),
        'tentang' => Footer::where('nama', 'Tentang')->where('bahasa_id', 2)->value('isi'),
        'kontak' => Footer::where('nama', 'Kontak')->where('bahasa_id', 2)->value('isi'),
        'berita' => Footer::where('nama', 'Berita')->where('bahasa_id', 2)->value('isi'),
        'tnc' => Footer::where('nama', 'TNC')->where('bahasa_id', 2)->value('isi'),
        'privasi' => Footer::where('nama', 'Privasi')->where('bahasa_id', 2)->value('isi'),
        'faq' => Footer::where('nama', 'FAQ')->value('isi'),
    ];
});
