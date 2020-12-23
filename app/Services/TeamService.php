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

    public function all() {
        return $this->team_repo->all(Team::class);
    }

    public function update($params, $id) {
        return $this->team_repo->update(Team::class, $params, $id);
    }

    public function delete($id) {
        return $this->team_repo->destroy(Team::class, $id);
    }
}
