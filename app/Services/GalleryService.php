<?php


namespace App\Services;


use App\Gallery;
use App\Repos\GalleryRepo;
use Illuminate\Support\Facades\File;

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

    public function all()
    {
        return $this->gallery_repo->all();
    }

    public function paginatedRecords()
    {
        return $this->gallery_repo->paginatedRecords(2);
    }

    public function find($id)
    {
        return $this->gallery_repo->find($id);
    }

    public function store($params)
    {
        return $this->gallery_repo->store($params);
    }

    public function update($params, $id): bool
    {
        return $this->gallery_repo->update($params, $id);
    }

    public function delete($id): bool
    {
        $gallery = $this->gallery_repo->find($id);

        /* Delete Images related to this Gallery */
        $gallery->images()->delete();

        /* Now Delete Gallery */
        $result = $this->gallery_repo->destroy($id);
        if ($result) {
            File::deleteDirectory(public_path('storage/uploads/gallery/' . $id . '/'));
        }
        return true;
    }
}
