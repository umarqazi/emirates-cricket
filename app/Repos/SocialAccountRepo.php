<?php


namespace App\Repos;


class SocialAccountRepo extends BaseRepo
{
    public function updateByType($model, $data, $type)
    {
        return $model::where('type', $type)->update($data);
    }

}
