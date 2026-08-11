<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TeamController extends Controller
{
    public function detail($slug)
    {
        $team = DB::table('dc_teams')
            ->where('slug', $slug)
            ->where('active', 1)
            ->first();

        if (!$team) {
            abort(404);
        }

        return view('team-detail', compact('team'));
    }
}