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

    public function all() {
        return $this->update_repo->all(Update::class);
    }

    public function paginatedRecords() {
        return $this->update_repo->paginatedRecords(Update::class, 2);
    }

    public function find($id) {
        return $this->update_repo->find(Update::class, $id);
    }

    public function findOne($id) {
        return $this->update_repo->findOne(Update::class, $id);
    }

    public function store($params)
    {
        return $this->update_repo->store(Update::class, $params);
    }

    public function update($params, $id): bool
    {
        return $this->update_repo->update(Update::class, $params, $id);
    }

    public function delete($id): bool
    {
        return $this->update_repo->destroy(Update::class, $id);
    }
}
