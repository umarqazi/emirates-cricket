<?php


namespace App\Repos;


use App\SocialAccount;

class SocialAccountRepo extends BaseRepo
{
    private $Model = SocialAccount::class;

    public function __construct()
    {
        parent::__construct($this->Model);
    }

    public function updateByType($model, $data, $type)
    {
        return $model::where('type', $type)->update($data);
    }

}
