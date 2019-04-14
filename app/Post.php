<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Fillable properties
    protected $fillable = [
        'title',
        'text',
        'image',
        'upvotes',
        'author_id',
    ];

    // Eager load relations
    protected $with = ['author'];

    /* Relations */

    public function author()
    {
        return $this->belongsTo(Author::class);
    }
}
