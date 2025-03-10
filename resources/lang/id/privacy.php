<?php

use App\Models\Privacy;
use App\Models\TNC;
use Illuminate\Support\Facades\Cache;

return Cache::remember('lang_id_priv', 60, function () {
    return [
        'update' => 'Terakhir diperbarui pada 10 Maret 2025',

        'judul' => Privacy::where('nama', 'Judul')->where('bahasa_id', 1)->value('isi'),
        'keterangan' => Privacy::where('nama', 'Keterangan')->where('bahasa_id', 1)->value('isi'),
        'value' => Privacy::where('nama', 'Isi')->where('bahasa_id', 1)->value('isi'),
    ];
});
