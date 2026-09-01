<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    protected $table = 'dc_characters';

    public function movies()
    {
        return $this->belongsToMany(
            Movie::class,
            'movie_characters',
            'character_id',
            'movie_id'
        );
    }
}