<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Development extends Model
{
    /* Team Types */
    public static $EmiratiDevelopment = 1;
    public static $DevelopmentPathway = 2;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'heading', 'description',
    ];

    public function images()
    {
        return $this->morphMany('App\Image', 'imageable');
    }
}
