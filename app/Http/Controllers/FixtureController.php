<?php

namespace App\Http\Controllers;

use App\Services\CricClubApiService;
use Illuminate\Http\Request;

class FixtureController extends Controller
{
    public $cric_club_service;
    public function __construct()
    {
        $this->cric_club_service = new CricClubApiService();
    }

    public function fixtures() {
        return view('frontend.fixtures');
    }
}
