<?php


namespace App\Services;


use App\Development;
use App\Repos\DevelopmentRepo;

class DevelopmentService
{
    public $development_repo;

    public function __construct()
    {
        $this->development_repo = new  DevelopmentRepo();
    }

    public function all()
    {
        return $this->development_repo->all(Development::class);
    }

    public function store($params)
    {
        return $this->development_repo->store(Development::class, $params);
    }

    public function find(int $id)
    {
        return $this->development_repo->find(Development::class, $id);
    }

    public function findByType($type)
    {
        $where = array('type' => $type);
        return $this->development_repo->getOne(Development::class, $where);
    }

    public function update($id, $params)
    {
        return $this->development_repo->update(Development::class, $params, $id);
    }

    public function delete(int $id)
    {
        return $this->development_repo->destroy(Development::class, $id);
    }
}
