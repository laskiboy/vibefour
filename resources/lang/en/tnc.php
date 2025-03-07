<?php

use App\Models\TNC;
use Illuminate\Support\Facades\Cache;

return Cache::remember('lang_en_tnc', 60, function () {
    return [
        'update' => 'Last updated 10 February 2025',
        
        'judul' => TNC::where('nama', 'Judul')->where('bahasa_id', 2)->value('isi'),
        'keterangan' => TNC::where('nama', 'Keterangan')->where('bahasa_id', 2)->value('isi'),
        'value' => TNC::where('nama', 'Isi')->where('bahasa_id', 2)->value('isi'),
    ];
});
