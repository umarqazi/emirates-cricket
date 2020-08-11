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

    public function all() {
        return $this->user_repo->all(User::class);
    }

    public function paginatedRecords() {
        return $this->user_repo->paginatedRecords(User::class, 2);
    }

    public function find($id) {
        return $this->user_repo->find(User::class, $id);
    }

    public function findByToken($token) {
        return $this->user_repo->findByToken(User::class, $token);
    }

    public function store($params)
    {
        return $this->user_repo->store(User::class, $params);
    }

    public function update($params, $id): bool
    {
        return $this->user_repo->update(User::class, $params, $id);
    }

    public function delete($id): bool
    {
        return $this->user_repo->destroy(User::class, $id);
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
