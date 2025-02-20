<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function getEvents()
    {
        $events = [
            ["name" => "Konser Musik", "date" => "25 Maret 2025"],
            ["name" => "Seminar Teknologi", "date" => "30 Maret 2025"],
            ["name" => "Workshop Laravel", "date" => "5 April 2025"]
        ];

        return response()->json($events);
    }
}
