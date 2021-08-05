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

    public function findOne($id) {
        return $this->team_player_repo->findOne(TeamPlayer::class, $id);
    }


    public function storeToGallery($request){

        if($request->image == null){
            return 0;
        }

        $imageName = $request->image->getClientOriginalName();
        return $request->image->move(public_path('storage/uploads/team-players'), $imageName);
    }

    public function removeFileFromDirectory($name){
        if(File::exists(public_path('storage/uploads/team-players/'.$name))){
            File::delete(public_path('storage/uploads/team-players/'.$name));
        }
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
