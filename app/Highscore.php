<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Highscore extends Model
{
    // Fillable 
    protected $fillable = [
        "name", "score", "level"
    ];
}
