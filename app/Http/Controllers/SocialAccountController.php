<?php

namespace App\Http\Controllers;

use App\Http\Requests\SocialAccountRequest;
use App\Services\FacebookService;
use App\Services\InstagramService;
use App\Services\SocialAccountService;
use App\Services\SocialPostService;
use App\Services\TwitterService;
use App\SocialAccount;
use Facebook\Facebook;
use Illuminate\Http\Request;

class SocialAccountController extends Controller
{
    public $social_account_service;
    public $social_post_service;
    public $facebook_service;
    public $instagram_service;
    public $twitter_service;
    public $facebook;

    public function __construct()
    {
        $this->social_account_service = new SocialAccountService();
        $this->social_post_service = new SocialPostService();
        $this->facebook_service = new FacebookService();
        $this->instagram_service = new InstagramService();
        $this->twitter_service = new TwitterService();
        $this->facebook = new Facebook();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $accounts = $this->social_account_service->all();
        return view('backend.social-accounts.index', compact('accounts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(SocialAccount $socialAccount)
    {
        if ($socialAccount->type === SocialAccount::$Facebook)
        {
            $loginUrl = $this->facebook_service->facebookLogin();
            $fetchPostsRoute = route('facebook.get.posts');
            $view = 'backend.social-accounts.facebook-show';

        } elseif ($socialAccount->type === SocialAccount::$Instagram) {
            $loginUrl = $this->instagram_service->instagramLogin();
            $fetchPostsRoute = route('instagram.get.posts');
            $view = 'backend.social-accounts.instagram-show';

        } else {
            $loginUrl = $this->twitter_service->twitterLogin();
            $fetchPostsRoute = route('twitter.get.posts');
            $view = 'backend.social-accounts.twitter-show';

        }

        return view($view, compact('socialAccount', 'loginUrl', 'fetchPostsRoute'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(SocialAccount $socialAccount)
    {
        return view('backend.social-accounts.edit', compact('socialAccount'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SocialAccountRequest $request, SocialAccount $socialAccount)
    {
        $params = $request->except(['_token', '_method']);
        $status = $this->social_account_service->update($params, $socialAccount->id);
        if ($status) {
            return redirect()->route('social-accounts.index')->with('success', $socialAccount->name.' Tokens have been Updated Successfully!');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function facebookLogin() {
        $loginUrl = $this->facebook_service->facebookLogin();
        return view('backend.social-accounts.facebook-login', compact('loginUrl'));
    }

    public function facebookCallback()
    {
        $tokens = $this->facebook_service->facebookCallback();
        $social_account = $this->social_account_service->findByType(SocialAccount::$Facebook);

        /* Update Tokens */
        $params = array('page_access_token' => $tokens['page_access_token'] ,'long_lived_access_token' => $tokens['long_lived_access_token'], 'expires_in' => date('Y-m-d H:i:s', time() + 5184000)); /* Equals to 60days in Seconds */

        $status = $this->social_account_service->update($params, $social_account->id);
        if ($status) {
            $data = $this->facebook_service->getPostsFromPage();
            $response = $this->social_post_service->storeLattestPosts($data, $social_account->id);
            if ($response) {
                return redirect()->route('social-accounts.show', $social_account->id)->with('success', 'Latest Posts have been successfully Fetched!');
            }
        }
    }

    public function getLatestFacebookPosts() {
        $social_account = $this->social_account_service->findByType(SocialAccount::$Facebook);
        $data = $this->facebook_service->getPostsFromPage();
        $response = $this->social_post_service->storeLattestPosts($data, $social_account->id);
        if ($response) {
            return redirect()->route('social-accounts.show', $social_account->id)->with('success', 'Latest Posts have been successfully Fetched!');
        }
    }

    public function instagramCallback() {
        $social_account = $this->social_account_service->findByType(SocialAccount::$Instagram);
        $tokens = $this->instagram_service->instagramCallback($_GET);

        /* Update Tokens */
        $params = array('page_access_token' => $tokens['page_access_token'] ,'long_lived_access_token' => $tokens['long_lived_access_token'], 'expires_in' => date('Y-m-d H:i:s', time() + $tokens['expires_in'])); /* Equals to 60days in Seconds */

        $status = $this->social_account_service->update($params, $social_account->id);

        if ($status) {
            $media = $this->instagram_service->getUserMedia();
            $response = $this->social_post_service->storeLattestPosts($media->data, $social_account->id);
            if ($response) {
                return redirect()->route('social-accounts.show', $social_account->id)->with('success', 'Latest Posts have been successfully Fetched!');
            }
        }
    }

    public function getLatestInstagramPosts() {
        $social_account = $this->social_account_service->findByType(SocialAccount::$Instagram);
        /* GET User Media Posts */
        $media = $this->instagram_service->getUserMedia();

        /* Store latest Instagram Posts in DB */
        $response = $this->social_post_service->storeLattestPosts($media->data, $social_account->id);
        if ($response) {
            return redirect()->route('social-accounts.show', $social_account->id)->with('success', 'Latest Posts have been successfully Fetched!');
        }
    }

    public function twitterCallback() {
        $social_account = $this->social_account_service->findByType(SocialAccount::$Twitter);
        $tokens = $this->twitter_service->twitterCallback($_GET);

        /* Update Tokens */
        $params = array('user_access_token' => $tokens['user_access_token'], 'page_access_token' => $tokens['page_access_token'] ,'long_lived_access_token' => $tokens['long_lived_access_token'], 'expires_in' => date('Y-m-d H:i:s', time() + $tokens['expires_in'])); /* Equals to 60days in Seconds */

        $status = $this->social_account_service->update($params, $social_account->id);

        if ($status) {
            $tweets = $this->twitter_service->getUserTweets();
            $response = $this->social_post_service->storeLattestPosts($tweets, $social_account->id);
            if ($response) {
                return redirect()->route('social-accounts.show', $social_account->id)->with('success', 'Latest Posts have been successfully Fetched!');
            }
        }
    }

    public function getLatestTwitterPosts() {
        $social_account = $this->social_account_service->findByType(SocialAccount::$Twitter);
        $tweets = $this->twitter_service->getUserTweets();
        $response = $this->social_post_service->storeLattestPosts($tweets, $social_account->id);
        if ($response) {
            return redirect()->route('social-accounts.show', $social_account->id)->with('success', 'Latest Posts have been successfully Fetched!');
        }
    }

    public function fanClub() {
        $posts = array();
        /* Recent Four Facebook Post */
        $facebook = $this->social_account_service->findByType(SocialAccount::$Facebook);
        $posts['facebook'] = $this->social_post_service->getRecent($facebook->id, 4);

        /* Recent Four Instagram Post */
        $instagram = $this->social_account_service->findByType(SocialAccount::$Instagram);
        $posts['instagram'] = $this->social_post_service->getRecent($instagram->id, 4);

        /* Recent Four Twitter Post */
        $twitter = $this->social_account_service->findByType(SocialAccount::$Twitter);
        $posts['twitter'] = $this->social_post_service->getRecent($twitter->id, 4);
        return view('frontend.fan-club', compact('posts'));
    }
}
