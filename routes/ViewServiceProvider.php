<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Header;

class ViewServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Ambil semua data header yang dibutuhkan dalam satu query
        $headers = Header::whereIn('nama', [
            'Beranda',
            'Tentang',
            'Kontak',
            'Produk',
            'Voting',
            'Penjadwalan',
            'Masuk'
        ])->get()->keyBy('nama');

        // Share ke semua view
        View::share('layout.headerAsli', $headers);
    }
}
