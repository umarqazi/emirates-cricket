<?php


namespace App\Services;


use App\Repos\UserRepo;
use App\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class UserService
{
    public $user_repo;

    public function __construct()
    {
        $this->user_repo = new UserRepo();
    }

    public function all()
    {
        return $this->user_repo->all();
    }

    public function paginatedRecords()
    {
        return $this->user_repo->paginatedRecords(2);
    }

    public function find($id)
    {
        return $this->user_repo->find($id);
    }

    public function findOne($id)
    {
        return $this->user_repo->findOne($id);
    }

    public function findByToken($token)
    {
        return $this->user_repo->findByToken($token);
    }

    public function store($params)
    {
        return $this->user_repo->store($params);
    }

    public function update($params, $id): bool
    {
        return $this->user_repo->update($params, $id);
    }

    public function delete($id): bool
    {
        return $this->user_repo->destroy($id);
    }

    public function setPassword($data)
    {
        $user = $this->findByToken($data['token']);
        $params = array();
        $params['password'] = Hash::make($data['password']);
        $params['token'] = null;
        $params['email_verified_at'] = Carbon::now()->format('Y-m-d H:i:s');
        return $this->update($params, $user->id);
    }
}
