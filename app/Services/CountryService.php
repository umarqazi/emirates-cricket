<?php


namespace App\Services;


use App\Repos\CountryRepo;

class CountryService
{
    public $country_repo;

    public function __construct()
    {
        $this->country_repo = new CountryRepo();
    }

    public function all() {
        return $this->country_repo->allCountries();
    }
}
