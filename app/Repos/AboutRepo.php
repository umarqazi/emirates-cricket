<?php


namespace App\Repos;


use App\ContentPage;

class AboutRepo extends BaseRepo
{
    private $Model = ContentPage::class;

    public function __construct()
    {
        parent::__construct($this->Model);
    }
}
