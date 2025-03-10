<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrivacyController extends Controller
{
    public function index()
    {
        $judul = __('privacy.judul');
        $ket = __('privacy.keterangan');
        $val = __('privacy.value');
        return view('privacy', compact('judul', 'ket', 'val'));
    }
}
