<?php

use App\Models\Privacy;
use App\Models\TNC;
use Illuminate\Support\Facades\Cache;

return Cache::remember('lang_en_about', 60, function () {
    return [
        'judul' => 'About Us VibeFour',
        'slogan' => 'Simplifying voting and scheduling',
        'deskripsi' => 'VibeFour is a modern solution for managing digital voting and event scheduling. With advanced technology and a secure system, we help individuals, communities, and organizations make more efficient decisions.',
        'masuk' => 'Login',
        'judul_tentang' => 'About Us',
        'desk_tentang' => 'VibeFour is a digital platform that provides an automated voting and scheduling system to help organizations and communities make decisions and manage events more easily.',
        'vote' => 'Digital Voting',
        'desk_vote' => 'An efficient, secure, and eco-friendly voting system!',
        'jadwal' => 'Smart Scheduling',
        'desk_jawal' => 'A scheduling system that is more organized, fast, and efficient!',
        'judul_visi_misi' => 'Our Vision & Mission',
        'judul_visi' => 'Vision',
        'desk_visi' => 'To be the leading digital platform for efficient and transparent voting and scheduling.',
        'judul_misi_1' => 'Collaborative',
        'desk_misi_1' => 'Enhancing work efficiency with modern technology.',
        'judul_misi_2' => 'Security',
        'desk_misi_2' => 'Ensuring user data remains safe and protected.',
        'judul_keunggulan' => 'VibeFour Advantages',
        'judul_keunggulan_1' => 'Fast & Easy',
        'desk_keunggulan_1' => 'Voting and scheduling processes in just seconds.',
        'judul_keunggulan_2' => 'Secure & Transparent',
        'desk_keunggulan_2' => 'Data is protected with high-level encryption.',
        'judul_keunggulan_3' => 'Trusted',
        'desk_keunggulan_3' => 'Trusted by various organizations and communities.',
    ];
});
