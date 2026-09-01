<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CharacterController extends Controller
{
    
public function detail($slug)
{
    $character = DB::table('dc_characters as c')
        ->leftJoin(
            'dc_character_details as d',
            'c.id',
            '=',
            'd.character_id'
        )
        ->select(
            'c.*',
            'd.biography',
            'd.personality',
            'd.abilities',
            'd.weapons',
            'd.weakness',
            'd.height',
            'd.weight',
            'd.eye_color',
            'd.hair_color',
            'd.birthplace',
            'd.occupation',
            'd.affiliation',
            'd.base_of_operations',
            'd.first_appearance',
            'd.banner_image'
        )
        ->where('c.slug', $slug)
        ->first();

    if (!$character) {
        abort(404);
    }

    /*
    |--------------------------------------------------------------------------
    | Character Relations
    |--------------------------------------------------------------------------
    */

    $relations = DB::table('dc_character_relations as r')
        ->join(
            'dc_characters as c',
            'r.related_character_id',
            '=',
            'c.id'
        )
        ->leftJoin('dc_images as i', function ($join) {
            $join->on('c.id', '=', 'i.character_id')
                ->where('i.image_type', 'profile');
        })
        ->where('r.character_id', $character->id)
        ->where('c.active', 1)
        ->select(
            'c.id',
            'c.name',
            'c.slug',
            'c.real_name',
            'c.alignment',
            'i.image',
            'r.relation_type'
        )
        ->orderBy('c.name')
        ->get();

    $heroes = $relations->where('relation_type', 'Hero');
    $villains = $relations->where('relation_type', 'Villain');

    return view(
        'character-detail',
        compact(
            'character',
            'heroes',
            'villains'
        )
    );
}
public function dc(Request $request)
{
    $type = $request->get('type', 'all');

    if ($type === 'team') {

        $teams = DB::table('dc_teams')
            ->where('active', true)
            ->orderBy('id', 'desc')
            ->paginate(24);

        return view('dc', compact('teams', 'type'));
    }

    if ($type === 'organization') {

        $organizations = DB::table('dc_organizations')
            ->where('active', true)
            ->orderBy('id', 'desc')
            ->paginate(24);

        return view('dc', compact('organizations', 'type'));
    }

    $query = DB::table('dc_characters as c')
        ->leftJoin('dc_images as i', function ($join) {
            $join->on('c.id', '=', 'i.character_id')
                ->where('i.image_type', 'profile');
        })
        ->select(
            'c.id',
            'c.name',
            'c.slug',
            'c.real_name',
            'c.gender',
            'c.alignment',
            'c.species',
            'c.color',
            'c.status',
            'i.image'
        )
        ->where('c.active', 1);

    if ($type === 'hero') {
        $query->where('c.alignment', 'Hero');
    }

    if ($type === 'villain') {
        $query->where('c.alignment', 'Villain');
    }

    $characters = $query
        ->orderBy('c.id', 'desc')
        ->paginate(24)
        ->withQueryString();

    if ($request->ajax() && $request->has('page')) {
        return view(
            'components.character-content',
            compact('characters', 'type')
        );
    }

    return view(
        'dc',
        compact('characters', 'type')
    );
}


}