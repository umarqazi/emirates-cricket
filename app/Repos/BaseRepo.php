<?php


namespace App\Repos;


class BaseRepo implements IRepo
{
    public function all($model, $column = 'created_at' ,$order = 'desc') {
        return $model::orderBy($column, $order)->get();
    }

    public function paginatedRecords($model, $records, $column = 'created_at', $order = 'desc') {
        return $model::orderBy($column, $order)->paginate($records);
    }

    public function groupedBy($model, $groupBy, $column = 'created_at', $order = 'desc') {
        return $model::groupBy($groupBy)->orderBy($column, $order)->get();
    }

    public function find($model , $id) {
        return $model::find($id);
    }

    public function findByToken($model , $token) {
        return $model::where('token', $token)->first();
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
