<?php


namespace App\Repos;


use App\Country;

class CountryRepo
{
    public function all()
    {
        return Country::all();
    }

}
