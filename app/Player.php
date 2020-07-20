<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    public static $Residence = 1;
    public static $Visit = 0;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'email', 'dob', 'mobile', 'nationality', 'living_in', 'visa_status', 'playing_with', 'message', 'status', 'photo'
    ];

    public function country() {
        return $this->belongsTo(Country::class, 'nationality');
    }

}
