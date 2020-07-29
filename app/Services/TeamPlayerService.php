<?php


namespace App\Services;


use App\Repos\TeamPlayerRepo;

class TeamPlayerService
{
    public $team_player_repo;

    public function __construct()
    {
        $this->team_player_repo = new TeamPlayerRepo();
    }
}
