<?php


namespace App\Services;


use App\Repos\UpdateRepo;
use App\Update;
use Illuminate\Support\Facades\File;

class UpdateService
{
    public $update_repo;

    public function __construct()
    {
        $this->update_repo = new UpdateRepo();
    }

    public function all()
    {
        return $this->update_repo->all();
    }

    public function paginatedRecords()
    {
        return $this->update_repo->paginatedRecords(2);
    }

    public function find($id)
    {
        return $this->update_repo->find($id);
    }

    public function findOne($id)
    {
        return $this->update_repo->findOne($id);
    }

    public function store($params)
    {
        return $this->update_repo->store($params);
    }

    public function update($params, $id): bool
    {
        return $this->update_repo->update($params, $id);
    }

    public function delete($id): bool
    {
        return $this->update_repo->destroy($id);
    }
}
