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

    public function getOne($where)
    {
        return $this->team_repo->getOne($where);
    }

    public function all()
    {
        return $this->team_repo->all();
    }

    public function findOne($id)
    {
        return $this->team_repo->findOne($id);
    }

    public function update($params, $id)
    {
        return $this->team_repo->update($params, $id);
    }

    public function delete($id)
    {
        return $this->team_repo->destroy($id);
    }
}
