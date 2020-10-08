<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InternationalNews extends Model
{
    protected $fillable = [
        'title', 'description', 'image'
    ];
}
