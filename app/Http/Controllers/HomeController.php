<?php

namespace App\Http\Controllers;

use App\Services\InternationalNewsService;
use App\Services\SettingService;
use App\Services\NewsService;
use App\Services\SponsorService;

class HomeController extends Controller
{
    public $setting_service;
    public $news_service;
    public $sponsor_service;
    public $international_service;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->setting_service = new SettingService();
        $this->news_service = new NewsService();
        $this->sponsor_service = new SponsorService();
        $this->international_service = new InternationalNewsService();
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
        $news = $this->news_service->getLatestRecords(8);
        $international_news = $this->international_service->getLatestRecords(4);
        return view('frontend.index', compact('sponsors', 'news', 'setting', 'international_news'));
    }

    public function international_news_content($id)
    {
        $international_news = $this->international_service->find(decodeData($id));
        return view('frontend.news-detail', compact('international_news'));
    }

    public function news_content($id)
    {
        $news = $this->news_service->find(decodeData($id));
        return view('frontend.news-detail', compact('news'));
    }
}
