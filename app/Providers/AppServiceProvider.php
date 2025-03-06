<?php

namespace App\Providers;

use App\Models\Header;
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
        $headers = Header::whereIn('nama', [
            'Beranda',
            'Tentang',
            'Kontak',
            'Produk',
            'Produk Voting',
            'Produk Penjadwalan',
            'Masuk'
        ])->get()->keyBy('nama');

        View::share('headers', $headers);
    }
}
