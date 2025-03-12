<?php

use App\Models\About;
use App\Models\TNC;
use Illuminate\Support\Facades\Cache;

return Cache::remember('lang_en_about', 60, function () {
    return [
        'judul' => About::where('nama', 'judul')->where('bahasa_id', 2)->value('isi'),
        'slogan' => About::where('nama', 'slogan')->where('bahasa_id', 2)->value('isi'),
        'deskripsi' => About::where('nama', 'deskripsi')->where('bahasa_id', 2)->value('isi'),
        'masuk' => About::where('nama', 'masuk')->where('bahasa_id', 2)->value('isi'),
        'judul_tentang' => About::where('nama', 'judul_tentang')->where('bahasa_id', 2)->value('isi'),
        'desk_tentang' => About::where('nama', 'desk_tentang')->where('bahasa_id', 2)->value('isi'),
        'vote' => About::where('nama', 'vote')->where('bahasa_id', 2)->value('isi'),
        'desk_vote' => About::where('nama', 'desk_vote')->where('bahasa_id', 2)->value('isi'),
        'jadwal' => About::where('nama', 'jadwal')->where('bahasa_id', 2)->value('isi'),
        'desk_jadwal' => About::where('nama', 'desk_jadwal')->where('bahasa_id', 2)->value('isi'),
        'judul_visi_misi' => About::where('nama', 'judul_visi_misi')->where('bahasa_id', 2)->value('isi'),
        'judul_visi' => About::where('nama', 'judul_visi')->where('bahasa_id', 2)->value('isi'),
        'desk_visi' => About::where('nama', 'desk_visi')->where('bahasa_id', 2)->value('isi'),
        'judul_misi_1' => About::where('nama', 'deskripsi')->where('bahasa_id', 2)->value('isi'),
        'desk_misi_1' => About::where('nama', 'deskripsi')->where('bahasa_id', 2)->value('isi'),
        'judul_misi_2' => About::where('nama', 'deskripsi')->where('bahasa_id', 2)->value('isi'),
        'desk_misi_2' => About::where('nama', 'deskripsi')->where('bahasa_id', 2)->value('isi'),
        'judul_keunggulan' => 'VibeFour Advantages',
        'judul_keunggulan_1' => 'Fast & Easy',
        'desk_keunggulan_1' => 'Voting and scheduling processes in just seconds.',
        'judul_keunggulan_2' => 'Secure & Transparent',
        'desk_keunggulan_2' => 'Data is protected with high-level encryption.',
        'judul_keunggulan_3' => 'Trusted',
        'desk_keunggulan_3' => 'Trusted by various organizations and communities.',
    ];
});
