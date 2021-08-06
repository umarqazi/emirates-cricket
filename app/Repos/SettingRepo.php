<?php


namespace App\Repos;


use App\Setting;

class SettingRepo extends BaseRepo
{
    private $Model = Setting::class;

    public function __construct()
    {
        parent::__construct($this->Model);
    }
}
