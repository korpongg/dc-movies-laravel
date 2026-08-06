<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CharacterController extends Controller
{
    
public function detail($slug)
{
    $character = DB::table('dc_characters as c')
        ->leftJoin('dc_character_details as d', 'c.id', '=', 'd.character_id')
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

    return view('character-detail', compact('character'));
}
   public function dc(Request $request)
{
    $characters = DB::table('dc_characters as c')
        ->leftJoin('dc_images as i', function($join){
            $join->on('c.id','=','i.character_id')
                 ->where('i.image_type','profile');
        })
        ->select(
            'c.id', 'c.name', 'c.slug', 'c.real_name', 
            'c.gender', 'c.alignment', 'c.species', 
            'c.color', 'c.status', 'i.image'
        )
        ->where('c.active', 1)
        ->orderBy('c.id', 'desc')
        ->paginate(24);

    // ส่ง Partial View เฉพาะตอนที่มาจาก AJAX ของ Pagination จริงๆ เท่านั้น
    if ($request->ajax() && $request->has('page')) {
        return view('components.character-content', compact('characters'));
    }

    // ถ้าเข้าตรง หรือ Back กลับมาจากหน้า Detail ให้ส่ง Full View เสมอ
    return view('dc', compact('characters'));
}

}