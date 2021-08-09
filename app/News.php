<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'headline', 'description', 'image', 'slug', 'date', 'summary', 'active', 'so','image_alt','source'
    ];
}
