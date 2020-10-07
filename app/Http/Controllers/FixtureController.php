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
        $league = $this->cric_club_service->getClubIdAndLeagueList();
        $results = $this->cric_club_service->getLattestMatchResults(env('CRIC_CLUB_ID'));
        $points = $this->cric_club_service->getPointsTable();
        $point = $this->cric_club_service->getPoints(env('CRIC_CLUB_ID'), $league['data'][1]['leagueId']);
        return view('frontend.fixtures', compact('results'));
    }
}
