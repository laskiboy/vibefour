<?php

namespace App\Http\Controllers;

use App\Models\FAQ;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index()
    {
        $faqs = FAQ::where('bahasa_id', app()->getLocale() == 'id' ? 1 : 2)->get();
        return view('faq', compact('faqs'));

    }
}
