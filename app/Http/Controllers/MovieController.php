<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MovieController extends Controller
{
    public function index(Request $request)
    {
        $query = DB::table('dc_movies');

        if ($request->type == 'coming') {
            $query->whereDate('release_date', '>', now());
        } else {
            $query->whereDate('release_date', '<=', now());
        }

        $movies = $query
            ->orderBy('release_date', 'desc')
            ->paginate(24);

        if ($request->ajax()) {
            return view(
                'components.movie-content',
                compact('movies')
            );
        }

        return view(
            'movies',
            compact('movies')
        );
    }

    public function detail($id)
    {
        $movie = DB::table('dc_movies')
            ->where('id', $id)
            ->first();

        if (!$movie) {
            abort(404);
        }

        $characters = DB::table('dc_characters as c')
            ->join(
                'dc_movie_characters as mc',
                'c.id',
                '=',
                'mc.character_id'
            )
            ->leftJoin('dc_images as i', function ($join) {
                $join->on('c.id', '=', 'i.character_id')
                    ->where('i.image_type', 'profile');
            })
            ->where('mc.movie_id', $id)
              ->where('c.active', 1)
            ->select(
                'c.id',
                'c.name',
                'c.slug',
                'c.real_name',
                'c.alignment',
                'i.image'
            )
            ->orderBy('c.id')
            ->get();

        return view(
            'movie-detail',
            compact('movie', 'characters')
        );
    }
}