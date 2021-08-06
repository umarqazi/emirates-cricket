<?php


namespace App\Repos;


interface IRepo
{
    public function store($data);
    public function update($data, $id);
    public function destroy($id);

}
