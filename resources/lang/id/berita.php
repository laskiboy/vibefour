<?php

use App\Models\FAQ;
use Illuminate\Support\Facades\Cache;

return Cache::remember('lang_id_berita', 60, function () {
    return [
        'jdudl_berita' => 'Berita Utama',
    ];
});
