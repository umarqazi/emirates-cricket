<?php


namespace App\Repos;


use App\Gallery;

class GalleryRepo extends BaseRepo
{
    private $Model = Gallery::class;

    public function __construct()
    {
        parent::__construct($this->Model);
    }
}
