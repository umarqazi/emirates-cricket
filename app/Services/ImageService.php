<?php


namespace App\Services;


use App\Image;
use App\Repos\ImageRepo;
use Illuminate\Support\Facades\Storage;

class ImageService
{
    /**
     * @var ImageRepo
     */
    public $image_repo;

    /**
     * ImageService constructor.
     */
    public function __construct()
    {
        $this->image_repo = new ImageRepo();
    }

    public function store($relation_model, $data): bool
    {
        $response = false;
        foreach ($data['gallery-images'] as $imageName) {

            $image = new Image();
            $image->name = $imageName;
            $status = $relation_model->images()->save($image);

            if ($status) {

                /* Move file to storage path */
                $old_path = 'uploads/temp/gallery-images/'.$imageName;
                $new_path = 'uploads/gallery/'.$relation_model->id.'/';

                if (Storage::disk('public')->exists($old_path)) {

                    if (!Storage::disk('public')->exists($new_path)) {
                        Storage::disk('public')->makeDirectory($new_path);
                    }

                    Storage::disk('public')->move($old_path, $new_path . $imageName);
                }
                $response = true;
            }
        }
        return $response;
    }

    public function update() {

    }

}
