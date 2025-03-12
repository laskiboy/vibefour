<?php

use App\Models\About;
use App\Models\TNC;
use Illuminate\Support\Facades\Cache;

return Cache::remember('lang_id_about', 60, function () {
    return [
        'judul' => About::where('nama', 'judul')->where('bahasa_id', 1)->value('isi'),
        'slogan' => About::where('nama', 'slogan')->where('bahasa_id', 1)->value('isi'),
        'deskripsi' => About::where('nama', 'deskripsi')->where('bahasa_id', 1)->value('isi'),
        'masuk' => About::where('nama', 'masuk')->where('bahasa_id', 1)->value('isi'),
        'judul_tentang' => About::where('nama', 'judul_tentang')->where('bahasa_id', 1)->value('isi'),
        'desk_tentang' => About::where('nama', 'desk_tentang')->where('bahasa_id', 1)->value('isi'),
        'vote' => About::where('nama', 'vote')->where('bahasa_id', 1)->value('isi'),
        'desk_vote' => About::where('nama', 'desk_vote')->where('bahasa_id', 1)->value('isi'),
        'jadwal' => About::where('nama', 'jadwal')->where('bahasa_id', 1)->value('isi'),
        'desk_jadwal' => About::where('nama', 'desk_jadwal')->where('bahasa_id', 1)->value('isi'),
        'judul_visi_misi' => About::where('nama', 'judul_visi_misi')->where('bahasa_id', 1)->value('isi'),
        'judul_visi' => About::where('nama', 'judul_visi')->where('bahasa_id', 1)->value('isi'),
        'desk_visi' => About::where('nama', 'desk_visi')->where('bahasa_id', 1)->value('isi'),
        'judul_keunggulan' => 'Keunggulan VibeFour',
        'judul_keunggulan_1' => 'Cepat & Mudah',
        'desk_keunggulan_1' => 'Proses voting dan penjadwalan hanya dalam hitungan detik.',
        'judul_keunggulan_2' => 'Aman & Transparan',
        'desk_keunggulan_2' => 'Data terlindungi dengan enkripsi tingkat tinggi.',
        'judul_keunggulan_3' => 'Terpercaya',
        'desk_keunggulan_3' => 'Dipercaya oleh berbagai organisasi dan komunitas.',
    ];
});
