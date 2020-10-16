<?php


namespace App\Services;


use App\Download;
use App\Repos\DownloadRepo;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;

class DownloadService
{
    public $download_repo;

    public function __construct()
    {
        $this->download_repo = new DownloadRepo();
    }

    public function all() {
        return $this->download_repo->all(Download::class);
    }

    public function paginatedRecords() {
        return $this->download_repo->paginatedRecords(Download::class, 2);
    }

    public function find($id) {
        return $this->download_repo->find(Download::class, $id);
    }

    public function store($params)
    {
        $image = $params['file'];
        $name = pathinfo($_FILES['file']['name'], PATHINFO_FILENAME);;
        $extension = $image->getClientOriginalExtension();
        $new_name = $name . '.' . time() . '.' . $extension;
        $image->move(public_path('storage/uploads/downloads/'), $new_name);
        $params['file'] = $new_name;

        return  $this->download_repo->store(Download::class, $params);
    }

    public function update($params, $id){
        if (isset($params['file'])){
            $image = $params['file'];
            $name = pathinfo($_FILES['file']['name'], PATHINFO_FILENAME);;
            $extension = $image->getClientOriginalExtension();
            $new_name = $name . '.' . time() . '.' . $extension;
            $image->move(public_path('storage/uploads/downloads/'), $new_name);
            $params['file'] = $new_name;
        }
        return $this->download_repo->update(Download::class, $params, $id);
    }

    public function delete($id): bool
    {
        return $this->download_repo->destroy(Download::class, $id);
    }

}
