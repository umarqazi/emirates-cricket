<?php


namespace App\Repos;


use App\News;

class NewsRepo extends BaseRepo
{
    private $Model = News::class;

    public function __construct()
    {
        parent::__construct($this->Model);
    }
}
