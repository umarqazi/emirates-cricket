<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    /* Team Types */
    public static $Mens = 1;
    public static $Womens = 2;
    public static $U19 = 3;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'type', 'description',
    ];

    public function players() {
        return $this->hasMany(TeamPlayer::class);
    }
}
