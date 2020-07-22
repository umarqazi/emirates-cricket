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

    public function all() {
        return $this->sponsor_repo->all(Sponsor::class);
    }

    public function paginatedRecords() {
        return $this->sponsor_repo->paginatedRecords(Sponsor::class, 3);
    }

    public function find($id) {
        return $this->sponsor_repo->find(Sponsor::class, $id);
    }

    public function store($params)
    {
        return $this->sponsor_repo->store(Sponsor::class, $params);
    }

    public function update($params, $id): bool
    {
        return $this->sponsor_repo->update(Sponsor::class, $params, $id);
    }

    public function delete($id): bool
    {
        $name = $this->sponsor_repo->find(Sponsor::class, $id)->image;
        $result = $this->sponsor_repo->destroy(Sponsor::class, $id);
        if ($result) {
            File::deleteDirectory(public_path('storage/uploads/sponsor/'.$id.'/'));
        }
        return true;
    }

}
