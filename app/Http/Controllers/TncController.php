<?php

namespace App\Http\Controllers;

use App\Models\TNC;
use Illuminate\Http\Request;

class TncController extends Controller
{
    public function index()
    {
        $judul = __('tnc.judul');
        $ket = __('tnc.keterangan');
        $val = __('tnc.value');
        return view('tnc', compact('judul', 'ket', 'val'));
    }
}
