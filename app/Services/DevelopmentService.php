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
        return $this->development_repo->all();
    }

    public function store($params)
    {
        $image = $params['image'];
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('storage/uploads/development/'), $new_name);
        $params['image'] = $new_name;

        return $this->development_repo->store($params);
    }

    public function find(int $id)
    {
        return $this->development_repo->find($id);
    }

    public function findByType($type)
    {
        $where = array('type' => $type);
        return $this->development_repo->getOne($where);
    }

    public function findOne($id)
    {
        return $this->development_repo->findOne($id);
    }

    public function update($params, $id): bool
    {
        if (array_key_exists('image', $params)) {
            $image = $params['image'];
            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('storage/uploads/development/'), $image_name);
            $params['image'] = $image_name;
        }
        return $this->development_repo->update($params, $id);
    }

    public function delete(int $id)
    {
        return $this->development_repo->destroy($id);
    }
}
