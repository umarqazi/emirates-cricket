<?php


namespace App\Services;


use App\Repos\TeamPlayerRepo;
use App\TeamPlayer;
use Illuminate\Support\Facades\File;

class TeamPlayerService
{
    public $team_player_repo;

    public function __construct()
    {
        $this->team_player_repo = new TeamPlayerRepo();
    }

    public function all() {
        return $this->team_player_repo->all(TeamPlayer::class);
    }

    public function paginatedRecords() {
        return $this->team_player_repo->paginatedRecords(TeamPlayer::class, 3);
    }

    public function find($id) {
        return $this->team_player_repo->find(TeamPlayer::class, $id);
    }

    public function count()
    {
        return $this->team_player_repo->count(TeamPlayer::class);
    }

    public function store($params)
    {
        return $this->team_player_repo->store(TeamPlayer::class, $params);
    }

    public function update($params, $id): bool
    {
        return $this->team_player_repo->update(TeamPlayer::class, $params, $id);
    }

    public function delete($id): bool
    {
        return $this->team_player_repo->destroy(TeamPlayer::class, $id);
    }
}
