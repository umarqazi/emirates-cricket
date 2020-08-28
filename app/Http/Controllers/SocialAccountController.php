<?php

namespace App\Http\Controllers;

use App\Http\Requests\SocialAccountRequest;
use App\Services\FacebookService;
use App\Services\SocialAccountService;
use App\Services\SocialPostService;
use App\SocialAccount;
use Facebook\Facebook;
use Illuminate\Http\Request;

class SocialAccountController extends Controller
{
    public $social_account_service;
    public $social_post_service;
    public $facebook_service;
    public $facebook;

    public function __construct()
    {
        $this->social_account_service = new SocialAccountService();
        $this->social_post_service = new SocialPostService();
        $this->facebook_service = new FacebookService();
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
        $loginUrl = $this->facebook_service->facebookLogin();
        return view('backend.social-accounts.show', compact('socialAccount', 'loginUrl'));
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
}
