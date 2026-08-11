<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $keyword = $request->query('q');

        $movies = DB::table('dc_movies')
            ->whereRaw(
                'LOWER(title) LIKE ?',
                ['%' . strtolower($keyword) . '%']
            )
            ->limit(5)
            ->get();

        $characters = DB::table('dc_characters')
            ->where('active', 1)
            ->whereRaw(
                'LOWER(name) LIKE ?',
                ['%' . strtolower($keyword) . '%']
            )
            ->limit(5)
            ->get();

        $locations = DB::table('dc_locations')
            ->whereRaw(
                'LOWER(name) LIKE ?',
                ['%' . strtolower($keyword) . '%']
            )
            ->limit(5)
            ->get();

        return response()->json([
            'keyword' => $keyword,
            'movies' => $movies,
            'characters' => $characters,
            'locations' => $locations
        ]);
    }
}