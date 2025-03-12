<?php

use App\Models\FAQ;
use Illuminate\Support\Facades\Cache;

return Cache::remember('lang_en_pw', 60, function () {
    return [
        'nama_brand' => 'VibeFour',
        'slogan' => 'Effortless Voting & Scheduling Solution!',
        'judul' => 'Create Password',
        'judul_ubah' => 'Change Password',
        'ket' => 'Enter your new password following these requirements:',
        'poin1' => 'At least 8 characters long',
        'poin2' => 'Contains at least 1 lowercase letter',
        'poin3' => 'Contains at least 1 digit',
        'input_pw' => 'Enter Password',
        'input_confirm' => 'Confirm Password',
        'btn' => 'Create Password',
    ];
});
