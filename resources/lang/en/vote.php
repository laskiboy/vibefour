<?php

use Illuminate\Support\Facades\Cache;

return Cache::remember('lang_en_vote', 60, function () {
    return [
        'judul' => 'What is the VibeFour Voting System?',
        'deskripsi' => 'VibeFour offers a fast, secure, and transparent digital voting solution, enabling organizations, communities, and events to manage voting efficiently. Designed to meet various needs, we ensure that every vote is counted fairly and accurately.',
        'btn_coba_fitur' => 'Try Features',
        'btn_lihat_tutor' => 'View Tutorial',
        'judul_keunggulan' => 'Top Features Of Voting',
        'deskripsi_keunggulan' => 'With VibeFour, voting becomes more efficient, secure, and eco-friendly!',
        'keunggulan_1' => 'Guaranteed Voting Security',
        'desk_keunggulan_1' => 'Voting can be general or private using automatically generated room codes.',
        'keunggulan_2' => 'Anonymous Settings',
        'desk_keunggulan_2' => 'Voting creators can customize who is allowed to vote or anonymize voters.',
        'keunggulan_3' => 'Customizable Voting Results',
        'desk_keunggulan_3' => 'Voting results can be customized—public for voters to see or private for only the creator.',
        'judul_join' => 'Join VibeFour',
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
