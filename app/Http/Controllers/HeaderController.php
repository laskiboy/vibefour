<?php

namespace App\Http\Controllers;

use App\Models\Header;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;

class HeaderController extends Controller
{
    public function index()
    {
        $beranda = Header::where('nama', 'Beranda')->first();
        $tentang = Header::where('nama', 'Tentang')->first();
        $kontak = Header::where('nama', 'Kontak')->first();
        $produk = Header::where('nama', 'Produk')->first();
        $produk_vote = Header::where('nama', 'Voting')->first();
        $produk_jadwal = Header::where('nama', 'Penjadwalan')->first();
        $masuk = Header::where('nama', 'Masuk')->first();
        return View::share('layout.headerAsli', compact('beranda', 'tentang', 'kontak', 'produk', 'produk_vote', 'produk_jadwal', 'masuk'));
    }
}
