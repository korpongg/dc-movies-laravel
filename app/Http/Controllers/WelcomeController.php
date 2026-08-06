<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DcMovie;

class WelcomeController extends Controller
{
    public function index()
    {
        $movies = DcMovie::where('release_year', '<=', 2026)
            ->orderByDesc('release_year')
            ->get();


        return view('welcome')->with([
            'movies' => $movies,
        ]);
    }
}