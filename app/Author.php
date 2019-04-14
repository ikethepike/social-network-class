<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    // Fillable Properties
    protected $fillable = [
        'email',
        'avatar',
        'last_name',
        'first_name',
        'description',
    ];

    /* Relations */

    /**
     * Returns all post relations.
     *
     * @return App\Post
     */
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
