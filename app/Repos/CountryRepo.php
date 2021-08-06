<?php


namespace App\Repos;


use App\Country;

class CountryRepo extends BaseRepo
{
    private $Model = Country::class;

    public function __construct()
    {
        parent::__construct($this->Model);
    }

    public function allCountries()
    {
        return $this->_model::all();
    }
}
