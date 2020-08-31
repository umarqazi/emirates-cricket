<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SocialAccount extends Model
{
    /* Account Types */
    public static $Facebook = 1;
    public static $Instagram = 2;
    public static $Twitter = 3;


    public function posts() {
        return $this->hasMany(SocialPost::class);
    }
}
