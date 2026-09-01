<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DcMovie extends Model
{
    protected $table = 'dc_movies';

    protected $fillable = [
        'title',
        'universe',
        'type',
        'poster',
        'backdrop',
        'featured',
        'sort_order',
        'release_year'
    ];

    public function characters()
    {
        return $this->belongsToMany(
            DcCharacter::class,
            'dc_movie_characters',
            'movie_id',
            'character_id'
        );
    }
}