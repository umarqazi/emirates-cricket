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
        return $model::where('id', $id)->update($data);
    }

    public function destroy($model, $id)
    {
        return $model::where('id', $id)->delete();
    }
}
