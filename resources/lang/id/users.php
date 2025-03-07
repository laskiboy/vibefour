<?php

use App\Models\Contact;
use Illuminate\Support\Facades\Cache;

return Cache::remember('lang_id', 60, function () {
    return [
        'judul_map' => 'Alamat',
        'judul_kontak' => 'Kontak',

        'placeholder_nama' => 'Nama',
        'placeholder_no_telp' => 'Nomor Telepon',
        'placeholder_komentar' => 'Pesan',
        'button_kirim' => 'Kirim',

        'judul' => Contact::where('name', 'Judul')->where('bahasa_id', 1)->value('isi') ?? 'Judul Default',
        'map' => Contact::where('name', 'IFrame')->value('isi') ?? 'Map Default',
        'subjudul' => Contact::where('name', 'Subjudul')->where('bahasa_id', 1)->value('isi') ?? 'Subjudul Default',
        'keterangan' => Contact::where('name', 'Keterangan')->where('bahasa_id', 1)->value('isi') ?? 'Keterangan Default',
        'alamat' => Contact::where('name', 'Alamat')->value('isi') ?? 'Alamat Default',
        'telepon' => Contact::where('name', 'Telepon')->value('isi') ?? 'Telepon Default',
        'email' => Contact::where('name', 'Email')->value('isi') ?? 'Email Default',
    ];
});
