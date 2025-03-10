<?php

use App\Models\Privacy;
use App\Models\TNC;
use Illuminate\Support\Facades\Cache;

return Cache::remember('lang_id_about', 60, function () {
    return [
        'judul' => 'Tentang Kami VibeFour',
        'slogan' => 'Memudahkan voting dan penjadwalan',
        'deskripsi' => 'VibeFour hadir sebagai solusi modern dalam pengelolaan voting digital dan penjadwalan acara. Dengan teknologi canggih dan sistem yang aman, kami membantu individu, komunitas, dan organisasi dalam membuat keputusan yang lebih efisien.',
        'masuk' => 'Masuk',
        'judul_tentang' => 'Tentang Kami',
        'desk_tentang' => 'VibeFour adalah platform digital yang menyediakan sistem voting dan penjadwalan otomatis untuk memudahkan organisasi dan komunitas dalam mengambil keputusan dan mengelola acara.',
        'vote' => 'Voting Digital',
        'desk_vote' => 'Sistem voting yang efisien, aman, dan ramah lingkungan!',
        'jadwal' => 'Penjadwalan Cerdas',
        'desk_jadwal' => 'Sistem pengelolaan jadwal yang lebih rapi, cepat, dan efisien!',
        'judul_visi_misi' => 'Visi & Misi Kami',
        'judul_visi' => 'Visi',
        'desk_visi' => 'Menjadi platform digital terdepan dalam voting dan penjadwalan yang efisien dan transparan.',
        'judul_misi_1' => 'Kolaboratif',
        'desk_misi_1' => 'Meningkatkan efisiensi kerja dengan teknologi modern.',
        'judul_misi_2' => 'Keamanan',
        'desk_misi_2' => 'Menjamin data pengguna tetap aman dan terlindungi.',
        'judul_keunggulan' => 'Keunggulan VibeFour',
        'judul_keunggulan_1' => 'Cepat & Mudah',
        'desk_keunggulan_1' => 'Proses voting dan penjadwalan hanya dalam hitungan detik.',
        'judul_keunggulan_2' => 'Aman & Transparan',
        'desk_keunggulan_2' => 'Data terlindungi dengan enkripsi tingkat tinggi.',
        'judul_keunggulan_3' => 'Terpercaya',
        'desk_keunggulan_3' => 'Dipercaya oleh berbagai organisasi dan komunitas.',
    ];
});
