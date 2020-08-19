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
        return $this->setting_repo->first(Setting::class);
    }

    public function update($id, $params)
    {
        return $this->setting_repo->update(Setting::class, $params, $id);
    }
}
