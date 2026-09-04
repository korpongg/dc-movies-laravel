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

        $characters = DB::table('dc_team_members as tm')
            ->join(
                'dc_characters as c',
                'tm.character_id',
                '=',
                'c.id'
            )
            ->leftJoin('dc_images as i', function ($join) {
                $join->on('c.id', '=', 'i.character_id')
                    ->where('i.image_type', 'profile');
            })
            ->where('tm.team_id', $team->id)
            ->where('c.active', 1)
            ->select(
                'c.id',
                'c.name',
                'c.slug',
                'c.real_name',
                'c.alignment',
                'i.image'
            )
            ->orderBy('c.name')
            ->get();

        return view(
            'team-detail',
            compact(
                'team',
                'characters'
            )
        );
    }
}