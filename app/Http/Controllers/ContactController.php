<?php

namespace App\Http\Controllers;

use App\Models\Achievement;
use App\Models\Advantages;
use App\Models\Basket;
use App\Models\ProductScheduling;
use App\Models\Feature;
use App\Models\Home;
use App\Models\Missions;
use App\Models\News;
use App\Models\Packages;
use App\Models\Rate;
use Carbon\Carbon;
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
        $testimoni = Rate::get();
        // dd($testimoni);

        return view('beranda', compact('isi_pencapaian', 'fitur', 'testimoni'));
    }

    public function tentang()
    {
        $missions = Missions::where('bahasa_id', app()->getLocale() == 'id' ? 1 : 2)->get();
        $advantages = Advantages::where('bahasa_id', app()->getLocale() == 'id' ? 1 : 2)->get();
        return view('tentang', compact('missions', 'advantages'));
    }

    public function vote()
    {
        $fitur = Feature::where('bahasa_id', app()->getLocale() == 'id' ? 1 : 2)->get();
        $fitures = Feature::where('produk', 'vote')->where('bahasa_id', app()->getLocale() == 'id' ? 1 : 2)->get();

        $basic = Packages::where('price_id', 1)->where('bahasa_id', app()->getLocale() == 'id' ? 1 : 2)->first();
        $item_basic = Packages::where('price_id', 1)->where('bahasa_id', app()->getLocale() == 'id' ? 1 : 2)->get();

        $month = Packages::where('price_id', 3)->where('bahasa_id', app()->getLocale() == 'id' ? 1 : 2)->first();
        $item_month = Packages::where('price_id', 3)->where('bahasa_id', app()->getLocale() == 'id' ? 1 : 2)->get();

        $year = Packages::where('price_id', 4)->where('bahasa_id', app()->getLocale() == 'id' ? 1 : 2)->first();
        $item_year = Packages::where('price_id', 4)->where('bahasa_id', app()->getLocale() == 'id' ? 1 : 2)->get();

        return view('produk.produkVote', compact('fitur', 'fitures', 'basic', 'item_basic', 'month', 'item_month', 'year', 'item_year'));
    }

    public function jadwal()
    {
        $fitur = Feature::where('bahasa_id', app()->getLocale() == 'id' ? 1 : 2)->get();
        $fitures = Feature::where('produk', 'jadwal')->where('bahasa_id', app()->getLocale() == 'id' ? 1 : 2)->get();

        $basic = Packages::where('price_id', 1)->where('bahasa_id', app()->getLocale() == 'id' ? 1 : 2)->first();
        $item_basic = Packages::where('price_id', 1)->where('bahasa_id', app()->getLocale() == 'id' ? 1 : 2)->get();

        $month = Packages::where('price_id', 3)->where('bahasa_id', app()->getLocale() == 'id' ? 1 : 2)->first();
        $item_month = Packages::where('price_id', 3)->where('bahasa_id', app()->getLocale() == 'id' ? 1 : 2)->get();

        $year = Packages::where('price_id', 4)->where('bahasa_id', app()->getLocale() == 'id' ? 1 : 2)->first();
        $item_year = Packages::where('price_id', 4)->where('bahasa_id', app()->getLocale() == 'id' ? 1 : 2)->get();

        return view('produk.produkPenjadwalan', compact('fitur', 'fitures', 'basic', 'item_basic', 'month', 'item_month', 'year', 'item_year'));
    }

    protected function getBahasaId()
    {
        $localeToId = [
            'id' => 1,
            'en' => 2,
        ];

        return $localeToId[app()->getLocale()] ?? 1; // fallback ke ID bahasa Indonesia (1)
    }

    public function news()
    {
        Carbon::setLocale('id');
        $news = News::where('bahasa_id', app()->getLocale() == 'id' ? 1 : 2)->get();
        return view('berita.berita', compact('news'));
    }

    public function show($id)
    {
        Carbon::setLocale('id');
        $berita = News::where('id', $id)
            ->where('bahasa_id', app()->getLocale() == 'id' ? 1 : 2)
            ->firstOrFail();

        return view('berita.detailBerita', compact('berita'));
    }
}
