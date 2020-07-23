<?php


namespace App\Services;


use App\Repos\GalleryRepo;

class GalleryService
{
    /**
     * @var $gallery_repo
     */
    public $gallery_repo;

    /**
     * GalleryService constructor.
     */
    public function __construct()
    {
        $this->gallery_repo = new GalleryRepo();
    }


}
