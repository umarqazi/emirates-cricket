<?php


namespace App\Repos;


use App\Development;

class DevelopmentRepo extends BaseRepo
{
    private $Model = Development::class;

    public function __construct()
    {
        parent::__construct($this->Model);
    }
}
