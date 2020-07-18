<?php


namespace App\Repos;


class BaseRepo implements IRepo
{

    public function store($model, $data)
    {
        return $model::create($data);
    }

    public function update($model, $data, $id)
    {
        // TODO: Implement update() method.
    }

    public function destroy($model, $id)
    {
        // TODO: Implement destroy() method.
    }
}
