<?php

use App\Models\FAQ;
use Illuminate\Support\Facades\Cache;

return Cache::remember('lang_en_price', 60, function () {
    return [
        // 'judul' => ,

        'pertanyaan' => FAQ::where('bahasa_id', 2)->get(),
        'jawaan' => FAQ::where('bahasa_id', 2)->get(),
        'id' => FAQ::pluck('id'),
    ];
});
