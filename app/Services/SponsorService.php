<?php


namespace App\Services;


use App\Sponsor;
use App\Repos\SponsorRepo;
use Illuminate\Support\Facades\File;

class SponsorService
{
    public $sponsor_repo;

    public function __construct()
    {
        $this->sponsor_repo = new SponsorRepo();
    }

    public function all()
    {
        return $this->sponsor_repo->all();
    }

    public function paginatedRecords($records = 3)
    {
        return $this->sponsor_repo->paginatedRecords($records);
    }

    public function find($id)
    {
        return $this->sponsor_repo->find($id);
    }

    public function findOne($id)
    {
        return $this->sponsor_repo->findOne($id);
    }

    public function store($params)
    {
        return $this->sponsor_repo->store($params);
    }

    public function update($params, $id): bool
    {
        return $this->sponsor_repo->update($params, $id);
    }

    public function delete($id): bool
    {
        $name = $this->sponsor_repo->find($id)->image;
        $result = $this->sponsor_repo->destroy($id);
        if ($result) {
            File::deleteDirectory(public_path('storage/uploads/sponsor/' . $id . '/'));
        }
        return true;
    }
}
