<?php


namespace App\Repos;


use App\Tournament;

class TournamentRepo extends BaseRepo
{
    private $Model = Tournament::class;

    public function __construct()
    {
        parent::__construct($this->Model);
    }
}
