<?php

namespace App\Http\Controllers;

use App\Models\Achievement;
use App\Models\Contact;
use App\Models\Feature;
use App\Models\Home;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $judul = __('users.judul');
        $map = __('users.map');
        $subjudul = __('users.subjudul');
        $keterangan = __('users.keterangan');
        $alamat = __('users.alamat');
        $telepon = __('users.telepon');
        $email = __('users.email');

        return view('kontak', compact('judul', 'map', 'subjudul', 'keterangan', 'alamat', 'telepon', 'email'));
    }

    public function home()
    {
        $isi_pencapaian = Achievement::where('bahasa_id', app()->getLocale() == 'id' ? 1 : 2)->get();
        $fitur = Feature::where('bahasa_id', app()->getLocale() == 'id' ? 1 : 2)->get();
        // dd($id_bahasa);

        return view('beranda', compact('isi_pencapaian', 'fitur'));
    }
}
