<?php


namespace App\Services;


use App\Repos\TournamentRepo;
use App\Tournament;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class TournamentService
{
    public $tournament_repo;

    public function __construct()
    {
        $this->tournament_repo = new TournamentRepo();
    }

    public function all() {
        return $this->tournament_repo->all(Tournament::class);
    }

    public function find($id) {
        return $this->tournament_repo->find(Tournament::class, $id);
    }

    public function store($params)
    {
        $params['proposed_date'] = Carbon::parse(Carbon::createFromFormat('d/m/Y', $params['proposed_date']))->format('Y-m-d');
        return $this->tournament_repo->store(Tournament::class, $params);
    }

    public function update($params, $id)
    {
        $params['proposed_date'] = Carbon::parse(Carbon::createFromFormat('d/m/Y', $params['proposed_date']))->format('Y-m-d');
        return $this->tournament_repo->update(Tournament::class, $params, $id);
    }

    public function delete($id) {
        $result = $this->tournament_repo->destroy(Tournament::class, $id);
        if ($result) {
            File::deleteDirectory(public_path('storage/uploads/tournament/'.$id.'/'));
        }
        return true;
    }

    public function approveRequest($id): bool
    {
        $this->tournament_repo->update(Tournament::class, array('status' => Tournament::$Approved), $id);
        return true;
    }

    public function declineRequest($id): bool
    {
        $this->tournament_repo->update(Tournament::class, array('status' => Tournament::$Declined), $id);
        return true;
    }

}
