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

    public function newsYear()
    {
        $news = News::selectRaw('YEAR(date) as year')->groupBy('year')->get();
        return $news;
    }

    public function yearlyNews($year, $records = 6)
    {
        return News::whereYear('date', $year)->orderBy('date', 'desc')->paginate($records);
    }
}
