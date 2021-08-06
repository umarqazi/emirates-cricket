<?php


namespace App\Repos;


use App\Download;

class DownloadRepo extends BaseRepo
{
    private $Model = Download::class;

    public function __construct()
    {
        parent::__construct($this->Model);
    }
}
