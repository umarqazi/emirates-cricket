<?php


namespace App\Repos;


use App\Update;

class UpdateRepo extends BaseRepo
{
    private $Model = Update::class;

    public function __construct()
    {
        parent::__construct($this->Model);
    }
}
