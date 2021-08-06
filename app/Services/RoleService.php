<?php


namespace App\Services;


use App\Repos\RoleRepo;
use Spatie\Permission\Models\Role;

class RoleService
{
    public $role_repo;

    public function __construct()
    {
        $this->role_repo = new RoleRepo();
    }

    public function all()
    {
        return $this->role_repo->all();
    }

    public function paginatedRecords()
    {
        return $this->role_repo->paginatedRecords(2);
    }

    public function find($id)
    {
        return $this->role_repo->find($id);
    }

    public function findOne($id)
    {
        return $this->role_repo->findOne($id);
    }

    public function store($params)
    {
        $roleName = array('name' => $params['name']);
        $role = $this->role_repo->store($roleName);
        $role->syncPermissions($params['permission']);
        return $role;
    }

    public function update($params, $id): bool
    {
        $roleName = array('name' => $params['name']);
        $this->role_repo->update($roleName, $id);
        $role = $this->role_repo->find($id);
        $role->syncPermissions($params['permission']);
        return true;
    }

    public function delete($id): bool
    {
        return $this->role_repo->destroy($id);
    }
}
