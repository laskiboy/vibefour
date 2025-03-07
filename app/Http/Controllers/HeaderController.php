<?php

namespace App\Http\Controllers;

use App\Models\Header;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;

class HeaderController extends Controller
{
    public function index()
    {
        $beranda = __('Header.beranda');
        $tentang = __('Header.tentang');
        $kontak = __('Header.kontak');
        $produk = __('Header.produk');
        $produk_vote = __('Header.voting');
        $produk_jadwal = __('Header.penjadwalan');
        $masuk = __('Header.masuk');
        return View::share('layout.headerAsli', compact('beranda', 'tentang', 'kontak', 'produk', 'produk_vote', 'produk_jadwal', 'masuk'));
    }
}
