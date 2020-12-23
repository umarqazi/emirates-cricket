<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasPermissions;
use Spatie\Permission\Traits\RefreshesPermissionCache;

class Employee extends Model
{

    use HasPermissions;
    use RefreshesPermissionCache;

    protected  $table = 'employees';

    protected $fillable = [
        'name', 'designation', 'description', 'image'
    ];
}
