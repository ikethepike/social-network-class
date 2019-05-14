<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    // Fillable properties
    protected $fillable = [
        'username',
        'score',
        'level'
    ];
}