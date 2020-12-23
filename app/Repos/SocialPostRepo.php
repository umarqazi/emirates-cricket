<?php


namespace App\Repos;


class SocialPostRepo extends BaseRepo
{
    public function getRecent($model, $where, $count ,$column, $order)
    {
        return $model::where($where)->orderBy($column, $order)->take($count)->get();
    }
}
