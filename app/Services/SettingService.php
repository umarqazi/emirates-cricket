<?php


namespace App\Services;


use App\Repos\SettingRepo;
use App\Setting;

class SettingService
{
    public $setting_repo;

    public function __construct()
    {
        $this->setting_repo = new SettingRepo();
    }

    public function first()
    {
        return $this->setting_repo->first();
    }

    public function store($params)
    {
        return $this->setting_repo->store($params);
    }

    public function findOne($id)
    {
        return $this->setting_repo->findOne($id);
    }

    public function update($id, $params)
    {
        return $this->setting_repo->update($params, $id);
    }
}
