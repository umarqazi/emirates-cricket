<?php


namespace App\Repos;


class PlayerRepo extends BaseRepo
{
    public function store($model, $data)
    {
        dd($model);
        return parent::store($model, $data); // TODO: Change the autogenerated stub
    }

}
