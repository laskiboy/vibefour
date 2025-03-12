<?php

use Illuminate\Support\Facades\Cache;

return Cache::remember('lang_id_jadwal', 60, function () {
    return [
        'judul' => 'Apa Itu Sistem Penjadwalan VibeFour?',
        'deskripsi' => 'VibeFour menghadirkan solusi penjadwalan digital yang efisien dan otomatis, dirancang untuk membantu organisasi, komunitas, dan event dalam mengatur jadwal dengan lebih mudah, akurat, dan fleksibel. Dengan fitur canggih, platform ini memungkinkan pengguna untuk membuat, mengelola, dan berbagi jadwal dengan lebih terorganisir, sehingga tidak ada lagi jadwal bentrok atau miskomunikasi.',
        'btn_coba_fitur' => 'Coba Fitur',
        'btn_lihat_tutor' => 'Lihat Tutorian',
        'judul_keunggulan' => 'Fitur Unggulan Penjadwalan',
        'deskripsi_keunggulan' => 'Dengan VibeFour, pengelolaan jadwal jadi lebih rapi, cepat, dan efisien!',
        'keunggulan_1' => 'Undang temanmu',
        'desk_keunggulan_1' => 'Pada fitur penjadwalan, kamu bisa langsung mengirim undangan walapun temanmu belum punya akun',
        'keunggulan_2' => 'Menambahkan ketersediaan',
        'desk_keunggulan_2' => 'Anda bisa menambah ketersediaan untuk mempermudah pembuat jadwal menentukan jadwal tanpa menunggu konfirmasi',
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
