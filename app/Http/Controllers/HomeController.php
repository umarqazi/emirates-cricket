<?php

namespace App\Http\Controllers;

use App\Services\SettingService;
use App\Services\NewsService;
use App\Services\SponsorService;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public $setting_service;
    public $news_service;
    public $sponsor_service;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
        $this->setting_service = new SettingService();
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
        $setting = $this->setting_service->first();
        $sponsors = $this->sponsor_service->paginatedRecords(7);
        $news = $this->news_service->all();
        return view('frontend.index', compact('sponsors', 'news' , 'setting'));
    }
}
