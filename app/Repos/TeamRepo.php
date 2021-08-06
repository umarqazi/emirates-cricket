<?php


namespace App\Repos;


use App\Team;

class TeamRepo extends BaseRepo
{
    private $Model = Team::class;

    public function __construct()
    {
        parent::__construct($this->Model);
    }
}
