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

    public function all() {
        return $this->permission_repo->all(Permission::class, 'module', 'asc');
    }

    public function groupedBy() {
        $all = $this->permission_repo->all(Permission::class,'created_at', 'asc');
        return $all->groupBy('module')->toArray();
    }

    public function paginatedRecords() {
        return $this->permission_repo->paginatedRecords(Permission::class, 2);
    }

    public function find($id) {
        return $this->permission_repo->find(Permission::class, $id);
    }

    public function store($params)
    {
        return $this->permission_repo->store(Permission::class, $params);
    }

    public function update($params, $id): bool
    {
        return $this->permission_repo->update(Permission::class, $params, $id);
    }

    public function delete($id): bool
    {
        return $this->permission_repo->destroy(Permission::class, $id);
    }
}
