<?php


namespace App\Services;


use App\Repos\TeamPlayerRepo;
use App\TeamPlayer;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class TeamPlayerService
{
    public $team_player_repo;

    public function __construct()
    {
        $this->team_player_repo = new TeamPlayerRepo();
    }

    public function all()
    {
        return $this->team_player_repo->all();
    }

    public function paginatedRecords()
    {
        return $this->team_player_repo->paginatedRecords(3);
    }

    public function find($id)
    {
        return $this->team_player_repo->find($id);
    }

    public function count()
    {
        return $this->team_player_repo->count();
    }

    public function store($params)
    {
        return $this->team_player_repo->store($params);
    }

    public function findOne($id)
    {
        return $this->team_player_repo->findOne($id);
    }

    public function storeToGallery($request)
    {

        if ($request->image == null) {
            return 0;
        }

        $imageName = $request->image->getClientOriginalName();
        return $request->image->move(public_path('storage/uploads/team-players'), $imageName);
    }

    public function removeFileFromDirectory($name)
    {
        if (File::exists(public_path('storage/uploads/team-players/' . $name))) {
            File::delete(public_path('storage/uploads/team-players/' . $name));
        }
    }

    public function update($params, $id): bool
    {
        return $this->team_player_repo->update($params, $id);
    }

    public function delete($id): bool
    {
        return $this->team_player_repo->destroy($id);
    }
}
