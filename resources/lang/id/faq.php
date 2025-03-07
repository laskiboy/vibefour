<?php

use App\Models\FAQ;
use Illuminate\Support\Facades\Cache;

return Cache::remember('lang_id_faq', 60, function () {
    return [
        'pertanyaan' => FAQ::where('bahasa_id', 1)->get(),
        'jawaan' => FAQ::where('bahasa_id', 1)->get(),
        'id' => FAQ::pluck('id'),
    ];
});
