<?php

namespace App\Http\Controllers;

use App\Models\TNC;
use Illuminate\Http\Request;

class TncController extends Controller
{
    public function index()
    {
        $judul = TNC::where('nama', 'Judul')->first();
        $ket = TNC::where('nama', 'Keterangan')->first();
        $val = TNC::where('nama', 'Isi')->first();
        return view('tnc', compact('judul', 'ket', 'val'));
    }
}
