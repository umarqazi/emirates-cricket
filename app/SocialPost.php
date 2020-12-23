<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SocialPost extends Model
{

    public function account() {
        return $this->belongsTo(SocialAccount::class);
    }
}
