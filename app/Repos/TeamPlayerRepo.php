<?php


namespace App\Repos;


use App\TeamPlayer;

class TeamPlayerRepo extends BaseRepo
{
    private $Model = TeamPlayer::class;

    public function __construct()
    {
        parent::__construct($this->Model);
    }
}
