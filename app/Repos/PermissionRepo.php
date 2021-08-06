<?php


namespace App\Repos;


use Spatie\Permission\Models\Permission;

class PermissionRepo extends BaseRepo
{
    private $Model = Permission::class;

    public function __construct()
    {
        parent::__construct($this->Model);
    }
}
