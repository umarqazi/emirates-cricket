<?php


namespace App\Repos;


use Spatie\Permission\Models\Role;

class RoleRepo extends BaseRepo
{
    private $Model = Role::class;

    public function __construct()
    {
        parent::__construct($this->Model);
    }
}
