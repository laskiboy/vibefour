<?php

namespace App\Providers;

use App\Models\Header;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */

    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $bahasaId = App::getLocale() == 'id' ? 1 : 2; // Sesuaikan dengan ID bahasa di database

        $headers = Header::whereIn('nama', [
            'Beranda',
            'Tentang',
            'Kontak',
            'Produk',
            'Produk Voting',
            'Produk Penjadwalan',
            'Teks Masuk'
        ])
            ->where('bahasa_id', $bahasaId) // Ambil berdasarkan bahasa yang aktif
            ->get()
            ->keyBy('nama');

        View::share('headers', $headers);
    }
}
