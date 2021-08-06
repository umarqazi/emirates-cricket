<?php


namespace App\Services;


use App\Repos\SocialAccountRepo;
use App\SocialAccount;
use App\SocialPost;

class SocialAccountService
{
    public $social_account_repo;

    public function __construct()
    {
        $this->social_account_repo = new SocialAccountRepo();
    }

    public function findByType($type)
    {
        $where = array('type' => $type);
        return $this->social_account_repo->getOne($where);
    }

    public function all()
    {
        return $this->social_account_repo->all();
    }

    public function update($params, $id)
    {
        return $this->social_account_repo->update($params, $id);
    }
}
