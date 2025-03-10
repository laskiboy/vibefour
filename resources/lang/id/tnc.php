<?php

use App\Models\TNC;
use Illuminate\Support\Facades\Cache;

return Cache::remember('lang_id_tnc', 60, function () {
    return [
        'update' => 'Terakhir diperbarui pada 10 Maret 2025',

        'judul' => TNC::where('nama', 'Judul')->where('bahasa_id', 1)->value('isi'),
        'keterangan' => TNC::where('nama', 'Keterangan')->where('bahasa_id', 1)->value('isi'),
        'value' => TNC::where('nama', 'Isi')->where('bahasa_id', 1)->value('isi'),
    ];
});
