<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'text', 'image',
    ];

    public function images()
    {
        return $this->morphMany('App\Image', 'imageable');
    }
}
