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

}