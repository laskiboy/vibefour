<?php

namespace App\Http\Controllers;

use App\Models\Contact;
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
}
