<?php


namespace App\Services;


use App\ContentPage;
use App\Repos\AboutRepo;

class AboutService
{
    public $about_repo;

    public function __construct()
    {
        $this->about_repo = new AboutRepo();
    }

    public function all()
    {
        return $this->about_repo->all();
    }

    public function findByType($where)
    {
        return $this->about_repo->getOne($where);
    }

    public function find($id)
    {
        return $this->about_repo->find($id);
    }

    public function findOne($id)
    {
        return $this->about_repo->findOne($id);
    }

    public function store($params)
    {
        return $this->about_repo->store($params);
    }

    public function update($params, $id): bool
    {
        return $this->about_repo->update($params, $id);
    }

    public function delete($id): bool
    {
        return $this->about_repo->destroy($id);
    }
}
