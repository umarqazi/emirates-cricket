<?php


namespace App\Repos;


use App\Image;

class ImageRepo extends BaseRepo
{
    private $Model = Image::class;

    public function __construct()
    {
        parent::__construct($this->Model);
    }
}
