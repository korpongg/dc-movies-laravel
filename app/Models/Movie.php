<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $table = 'dc_movies';

    public function characters()
    {
        return $this->belongsToMany(
            Character::class,
            'movie_characters',
            'movie_id',
            'character_id'
        );
    }
}