<?php

namespace App\Http\Controllers;

use App\Services\FacebookService;
use App\Services\SettingService;
use App\Services\NewsService;
use App\Services\SocialAccountService;
use App\Services\SocialPostService;
use App\Services\SponsorService;
use App\SocialAccount;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public $setting_service;
    public $news_service;
    public $sponsor_service;
    public $facebook_service;
    public $social_account_service;
    public $social_post_service;

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
        $this->facebook_service = new FacebookService();
        $this->social_account_service = new SocialAccountService();
        $this->social_post_service = new SocialPostService();
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
        $posts = $this->getSocialPosts();
        return view('frontend.index', compact('sponsors', 'news' , 'setting', 'posts'));
    }

    public function getSocialPosts()
    {
        $post = array();
        /* One Facebook Post */
        $facebook = $this->social_account_service->findByType(SocialAccount::$Facebook);
        $post['facebook'] = $this->social_post_service->getOne($facebook->id);

        /* One Instagram Post */
        $instagram = $this->social_account_service->findByType(SocialAccount::$Instagram);
        $post['instagram'] = $this->social_post_service->getOne($instagram->id);

        /* One Twitter Post */
        $twitter = $this->social_account_service->findByType(SocialAccount::$Twitter);
        $post['twitter'] = $this->social_post_service->getOne($twitter->id);
        return $post;
    }
}
