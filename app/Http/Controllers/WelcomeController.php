<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\DcMovie;

class WelcomeController extends Controller
{
    public function index()
    {
        $movies = DcMovie::where('release_year', '<=', 2026)
            ->orderByDesc('release_year')
            ->get();

        $characters = DB::table('dc_characters')
            ->where('active', 1)
            ->get();

        return view('welcome')->with([
            'movies' => $movies,
            'characters' => $characters,
        ]);
    }
}