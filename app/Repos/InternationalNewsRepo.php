<?php


namespace App\Repos;


use App\InternationalNews;

class InternationalNewsRepo extends BaseRepo
{
    private $Model = InternationalNews::class;

    public function __construct()
    {
        parent::__construct($this->Model);
    }
}
