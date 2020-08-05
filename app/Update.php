<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Update extends Model
{
    public $table = 'app_updates';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
    ];
}
