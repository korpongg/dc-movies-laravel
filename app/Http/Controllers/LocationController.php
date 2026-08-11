<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LocationController extends Controller
{
    public function index(Request $request)
    {
        $parent = $request->parent;

        $query = DB::table('dc_locations');

        if ($parent) {
            $query->where('parent_id', $parent);
        } else {
            $query->whereNull('parent_id');
        }

        $locations = $query
            ->orderBy('name')
            ->get();

        if ($request->ajax()) {
            return view(
                'components.locations-content',
                compact('locations')
            );
        }

        return view(
            'locations',
            compact('locations')
        );
    }

    public function filter(Request $request)
    {
        $locations = DB::table('dc_locations')
            ->where('level', $request->level)
            ->orderBy('name')
            ->get();

        return view(
            'components.locations-content',
            compact('locations')
        );
    }

    public function detail($slug)
{
    $location = DB::table('dc_locations')
        ->where('slug', $slug)
        ->first();


    if (!$location) {
        abort(404);
    }


return view(
    'components.location-detail',
    compact('location')
);
}
}