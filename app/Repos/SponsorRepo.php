<?php


namespace App\Repos;


use App\Sponsor;

class SponsorRepo extends BaseRepo
{
    private $Model = Sponsor::class;

    public function __construct()
    {
        parent::__construct($this->Model);
    }
}
