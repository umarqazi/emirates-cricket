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

    public function all() {
        return $this->about_repo->all(ContentPage::class);
    }

    public function findByType($where) {
        return $this->about_repo->getOne(ContentPage::class, $where);
    }

    public function find($id) {
        return $this->about_repo->find(ContentPage::class, $id);
    }

    public function findOne($id) {
        return $this->about_repo->findOne(ContentPage::class, $id);
    }

    public function store($params)
    {
        return $this->about_repo->store(ContentPage::class, $params);
    }

    public function update($params, $id): bool
    {
        return $this->about_repo->update(ContentPage::class, $params, $id);
    }

    public function delete($id): bool
    {
        return $this->about_repo->destroy(ContentPage::class, $id);
    }
}
