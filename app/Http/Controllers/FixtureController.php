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
        $results = $this->cric_club_service->getLattestMatchResults(15272);
        return view('frontend.fixtures', compact('results'));
    }
}
