<?php

use Illuminate\Support\Facades\Cache;

return Cache::remember('lang_id_vote', 60, function () {
    return [
        'judul' => 'Apa Itu Sistem Voting VibeFour?',
        'deskripsi' => 'VibeFour menghadirkan solusi voting digital yang cepat, aman, dan transparan, memungkinkan organisasi, komunitas, dan acara untuk mengelola pemungutan suara dengan efisien. Dengan sistem yang dirancang untuk berbagai kebutuhan, kami memastikan bahwa setiap suara dihitung secara adil dan akurat.',
        'btn_coba_fitur' => 'Coba Fitur',
        'btn_lihat_tutor' => 'Lihat Tutorian',
        'judul_keunggulan' => 'Fitur Unggulan Voting',
        'deskripsi_keunggulan' => 'Dengan VibeFour, voting menjadi lebih efisien, aman, dan ramah lingkungan!',
        'keunggulan_1' => 'Keamanan voting terjamin',
        'desk_keunggulan_1' => 'Vote bisa menjadi general ataupun privat menggunakan kode room yang dibuat secara otomatis',
        'keunggulan_2' => 'Pengaturan anonimus',
        'desk_keunggulan_2' => 'Pembuat voting bisa melakukan kostumisasi siapa saja yang bisa memilih voting, atau pembuat voting juga bisa menyamarkan pemilih',
        'keunggulan_3' => 'Kostumisasi hasil vote',
        'desk_keunggulan_3' => 'Hasil voting bisa dikostumisasi, public untuk hasil vote yang bisa dilihat pemilih, dan private untuk hasil yang hanya bisa dilihat pembuat voting',
        'judul_join' => 'Bergabung Bersama VibeFour',
        'gratis' => 'Gratis',
        'previlage_gratis_1' => 'Memberikan Akses Trial',
        'previlage_gratis_2' => 'Memberikan Penggunaan fitur sebanyak 10 kali',
        'mont' => '/ Bulan',
        'previlage_month_1' => 'Penggunaan akses full',
        'previlage_month_2' => 'Tanpa batasan penggunaan fitur',
        'previlage_month_3' => 'Langganan Bulanan',
        'annual' => '/ Tahun',
        'previlage_annual_3' => 'Langganan Tahunan',
        'pilih_paket' => 'Pilih Paket'
    ];
});
