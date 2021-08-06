<?php


namespace App\Repos;


use App\User;

class UserRepo extends BaseRepo
{
    private $Model = User::class;

    public function __construct()
    {
        parent::__construct($this->Model);
    }
}
