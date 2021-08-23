<?php


namespace App\Services;


use App\News;
use App\Repos\NewsRepo;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class NewsService
{
    public $news_repo;

    public function __construct()
    {
        $this->news_repo = new NewsRepo();
    }

    public function all()
    {
        return $this->news_repo->all();
    }

    public function getLatestRecords($limit)
    {
        return $this->news_repo->getLatestRecords($limit);
    }

    public function paginatedRecords($records = 4)
    {
        return $this->news_repo->paginatedRecords($records);
    }

    public function find($id)
    {
        return $this->news_repo->find($id);
    }

    public function store($params)
    {
        return $this->news_repo->store($params);
    }

    public function update($params, $id): bool
    {
        return $this->news_repo->update($params, $id);
    }

    public function findOne($id)
    {
        return $this->news_repo->findOne($id);
    }

    public function delete($id): bool
    {
        $name = $this->news_repo->find($id)->image;
        $result = $this->news_repo->destroy($id);
        if ($result) {
            File::deleteDirectory(public_path('storage/uploads/news/' . $id . '/'));
        }
        return true;
    }

    public function getNewsYear()
    {
        return $this->news_repo->newsYear();
    }

    public function yearlyNews($year)
    {
        return $this->news_repo->yearlyNews($year);
    }
}
