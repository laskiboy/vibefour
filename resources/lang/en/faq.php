<?php

use App\Models\FAQ;
use Illuminate\Support\Facades\Cache;

return Cache::remember('lang_en_faq', 60, function () {
    return [
        'judul' => 'We Are Here To Help',

        'pertanyaan' => FAQ::where('bahasa_id', 2)->get(),
        'jawaan' => FAQ::where('bahasa_id', 2)->get(),
        'id' => FAQ::pluck('id'),
    ];
});
