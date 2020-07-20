<?php


namespace App\Repos;


class ContactRepo extends BaseRepo
{
    public function all($model)
    {
        return $model::all();
    }

    public function find($model, int $id)
    {
        return $model::find($id);
    }
}
