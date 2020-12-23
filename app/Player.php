<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Player extends Model
{
    use Notifiable;

    /* Visa Status Types */
    public static $Residence = 1;
    public static $Visit = 0;

    /* Player Status Types */
    public static $Approved = 1;
    public static $Declined = 0;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'email', 'dob', 'mobile', 'nationality', 'living_in', 'visa_status', 'playing_with', 'message', 'status', 'photo', 'id_type', 'passport_page', 'emirates_id_front', 'emirates_id_back', 'visa_page', 'passport_expiry'
    ];

    public function country() {
        return $this->belongsTo(Country::class, 'nationality');
    }

}
