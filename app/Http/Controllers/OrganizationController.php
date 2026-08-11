<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrganizationController extends Controller
{
    public function detail($slug)
    {
        $organization = DB::table('dc_organizations')
            ->where('slug', $slug)
            ->where('active', true)
            ->first();

        if (!$organization) {
            abort(404);
        }

        return view('organization-detail', compact('organization'));
    }
}