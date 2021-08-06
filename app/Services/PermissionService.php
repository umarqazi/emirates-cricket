<?php


namespace App\Services;


use App\Repos\PermissionRepo;
use Spatie\Permission\Models\Permission;

class PermissionService
{
    public $permission_repo;

    public function __construct()
    {
        $this->permission_repo = new PermissionRepo();
    }

    public function all()
    {
        return $this->permission_repo->all('module', 'asc');
    }

    public function groupedBy()
    {
        $all = $this->permission_repo->all('created_at', 'asc');
        return $all->groupBy('module')->toArray();
    }

    public function paginatedRecords()
    {
        return $this->permission_repo->paginatedRecords(2);
    }

    public function find($id)
    {
        return $this->permission_repo->find($id);
    }

    public function findOne($id)
    {
        return $this->permission_repo->findOne($id);
    }

    public function store($params)
    {
        return $this->permission_repo->store($params);
    }

    public function update($params, $id): bool
    {
        return $this->permission_repo->update($params, $id);
    }

    public function delete($id): bool
    {
        return $this->permission_repo->destroy($id);
    }
}
