<?php


namespace App\Repos;


class BaseRepo implements IRepo
{
    public function all($model) {
        return $model::all();
    }

    public function find($model , $id) {
        return $model::find($id);
    }

    public function store($model, $data)
    {
        return $model::create($data);
    }

    public function update($model, $data, $id)
    {
        return $model::where('id', $id)->update($data);
    }

    public function destroy($model, $id)
    {
        return $model::where('id', $id)->delete();
    }
}
