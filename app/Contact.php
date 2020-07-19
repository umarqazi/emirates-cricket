<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    public static $Pending = 0;
    public static $Read = 1;
    public static $Replied = 2;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'subject', 'message', 'status', 'reply', 'replied_by'
    ];
}
