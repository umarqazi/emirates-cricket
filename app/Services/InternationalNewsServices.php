<?php


namespace App\Services;


use App\Employee;
use App\InternationalNews;
use App\News;
use App\Repos\InternationalNewsRepo;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class InternationalNewsServices
{
    public $international_news_repo;

    public function __construct()
    {
        $this->international_news_repo = new InternationalNewsRepo();
    }

    public function all() {
        return $this->international_news_repo->all(InternationalNews::class);
    }

    public function getOne() {
        return $this->international_news_repo->getOne(InternationalNews::class);
    }

    public function paginatedRecords($records = 4) {
        return $this->international_news_repo->paginatedRecords(InternationalNews::class, $records);
    }

    public function find($id) {
        return $this->international_news_repo->find(InternationalNews::class, $id);
    }

    public function store($params){
        $extension = $params['image']->getClientOriginalExtension();
        $imageName = time().'.'.$extension;
        $file = $params['image'];
        $params['image'] = $imageName;

        $news =  $this->international_news_repo->store(InternationalNews::class, $params);

        if (!empty($news)) {
            $path = 'uploads/international-news/'.$news->id.'/';
            if (!Storage::disk('public')->exists($path)) {
                Storage::disk('public')->makeDirectory($path);
            }
            Storage::disk('public')->putFileAs($path, $file, $imageName);
        }

        return $news;
    }

    public function update($params, $id){
        return $this->international_news_repo->update(InternationalNews::class, $params, $id);
    }

    public function delete($id): bool
    {
        $name = $this->international_news_repo->find(InternationalNews::class, $id)->image;
        $result = $this->international_news_repo->destroy(InternationalNews::class, $id);
        if ($result) {
            File::deleteDirectory(public_path('storage/uploads/international-news/'.$id.'/'));
        }
        return true;
    }

}
