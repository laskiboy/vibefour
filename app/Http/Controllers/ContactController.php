<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $judul = Contact::find(1);
        $map = Contact::find(2);
        $subjudul = Contact::find(3);
        $ket = Contact::find(4);
        $alamat = Contact::find(5);
        $telp = Contact::find(6);
        $email = Contact::find(7);
        return view('kontak', compact('judul', 'map', 'subjudul', 'ket', 'alamat', 'telp', 'email'));
    }
}
