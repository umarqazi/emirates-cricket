<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Development extends Model
{
    /* Team Types */
    public static $Introduction = 1;
    public static $DomesticMen = 2;
    public static $Women = 3;
    public static $InterEmiratesLeague = 4;
    public static $EmiratiDevelopment = 5;
    public static $DevelopmentPathway = 6;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'heading', 'description', 'type' , 'image',
    ];

    public function images()
    {
        return $this->morphMany('App\Image', 'imageable');
    }
}
