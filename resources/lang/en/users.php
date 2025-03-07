<?php

use App\Models\Contact;
use Illuminate\Support\Facades\Cache;

return Cache::remember('lang_en', 60, function () {
    return [
        'judul_map' => 'Addres',
        'judul_kontak' => 'Contact',

        'placeholder_nama' => 'Name',
        'placeholder_no_telp' => 'Phone Number',
        'placeholder_komentar' => 'Message',
        'button_kirim' => 'Send',

        'judul' => Contact::where('name', 'Judul')->where('bahasa_id', 2)->value('isi') ?? 'Title Default',
        'map' => Contact::where('name', 'IFrame')->value('isi') ?? 'Map Default',
        'subjudul' => Contact::where('name', 'Subjudul')->where('bahasa_id', 2)->value('isi') ?? 'Subtitle Default',
        'keterangan' => Contact::where('name', 'Keterangan')->where('bahasa_id', 2)->value('isi') ?? 'Description Default',
        'alamat' => Contact::where('name', 'Alamat')->value('isi') ?? 'Address Default',
        'telepon' => Contact::where('name', 'Telepon')->value('isi') ?? 'Phone Default',
        'email' => Contact::where('name', 'Email')->value('isi') ?? 'Email Default',
    ];
});
