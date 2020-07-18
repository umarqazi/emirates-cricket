<?php


namespace App\Repos;


interface IRepo
{
    public function store($model, $data);
    public function update($model, $data, $id);
    public function destroy($model, $id);

}
