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


            $query->whereDate(
                'release_date',
                '>',
                now()
            );


        } else {


            $query->whereDate(
                'release_date',
                '<=',
                now()
            );


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

    abort_if(!$movie, 404);

    return view('movie-detail', compact('movie'));
}

}