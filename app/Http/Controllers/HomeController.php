<?php

namespace App\Http\Controllers;

use App\Models\Mood;
use App\Models\Entry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        $entries = Cache::remember('entries', 3600, function() {
            return Entry::orderBy('date', 'ASC')->get();
        });

        $moods = Cache::remember('moods', 3600, function() {
            return Mood::all();
        });

        return view('home', compact('entries', 'moods'));
    }
}
