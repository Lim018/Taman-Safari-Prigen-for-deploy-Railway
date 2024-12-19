<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use App\Models\Jadwal;

class PagesController extends Controller
{
    public function index()
    {
        $events = Event::orderBy('start_date')->get();
        $jadwals = Jadwal::all();
        return view('pages.index', compact('jadwals', 'events'));

    }
    public function about()
    {
        return view('pages.about');
    }
    public function jadwal()
    {
        $jadwals = Jadwal::all();
        return view('pages.jadwal', compact('jadwals'));
    }
}
