<?php

use Illuminate\Support\Facades\Cache;

return Cache::remember('lang_en_schedule', 60, function () {
    return [
        'judul' => 'What is the VibeFour Scheduling System?',
        'deskripsi' => 'VibeFour offers an efficient and automated digital scheduling solution designed to help organizations, communities, and events manage schedules more easily, accurately, and flexibly. With advanced features, this platform allows users to create, manage, and share schedules in a more organized way, eliminating scheduling conflicts and miscommunication.',
        'btn_coba_fitur' => 'Try Features',
        'btn_lihat_tutor' => 'View Tutorial',
        'judul_keunggulan' => 'Top Features Of Scheduling',
        'deskripsi_keunggulan' => 'With VibeFour, schedule management becomes more organized, fast, and efficient!',
        'keunggulan_1' => 'Invite Your Friends',
        'desk_keunggulan_1' => 'With the scheduling feature, you can send invitations even if your friends don’t have an account yet.',
        'keunggulan_2' => 'Add Availability',
        'desk_keunggulan_2' => 'You can add your availability to help the scheduler set the schedule without waiting for confirmation.',
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
