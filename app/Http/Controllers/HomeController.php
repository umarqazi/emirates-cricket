<?php

namespace App\Http\Controllers;

use App\Services\NewsService;
use App\Services\SponsorService;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public $news_service;
    public $sponsor_service;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->news_service = new NewsService();
        $this->sponsor_service = new SponsorService();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $sponsors = $this->sponsor_service->paginatedRecords(7);
        $news = $this->news_service->all();
        return view('frontend.index', compact('sponsors', 'news'));
    }
}
