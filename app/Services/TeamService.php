<?php


namespace App\Services;


use App\Repos\TeamRepo;
use App\Team;

class TeamService
{
    public $team_repo;

    public function __construct()
    {
        $this->team_repo = new TeamRepo();
    }

    public function getOne($where) {
        return $this->team_repo->getOne(Team::class, $where);
    }
}
