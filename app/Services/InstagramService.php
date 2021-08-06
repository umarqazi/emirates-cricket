<?php


namespace App\Services;


use App\SocialAccount;
use EspressoDev\InstagramBasicDisplay\InstagramBasicDisplay;
use Facebook\Exceptions\FacebookResponseException;
use Facebook\Exceptions\FacebookSDKException;
use Facebook\Facebook;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

class InstagramService
{
    public $instagram;
    public $accessToken;
    public $social_account_service;

    public function __construct()
    {
        $this->social_account_service = new SocialAccountService();
        $instagram_tokens = $this->getDbTokens();
        $this->accessToken = $instagram_tokens->long_lived_access_token;
        $this->instagram = new InstagramBasicDisplay([
            'appId' => env('INSTAGRAM_APP_ID'),
            'appSecret' => env('INSTAGRAM_APP_SECRET'),
            'redirectUri' => env('INSTAGRAM_DEFAULT_CALLBACK_URL')
        ]);
    }

    public function getDBTokens()
    {
        return $this->social_account_service->findByType(SocialAccount::$Instagram);
    }

    public function instagramLogin()
    {
        return $this->instagram->getLoginUrl();
    }

    public function instagramCallback($params)
    {

        $tokens = array();

        // Get the OAuth callback code
        $code = $params['code'];
        Log::alert('Code:: ' . $code);

        // Get the short lived access token (valid for 1 hour)
        $short_access_token = $this->instagram->getOAuthToken($code);
        Log::alert(json_encode($short_access_token));

        $tokens['page_access_token'] = $short_access_token->access_token;

        /* SET USER ID in SESSION */
        session(['instagram_user_id' => $short_access_token->user_id]);

        // Exchange this token for a long lived token (valid for 60 days)
        $access_token = $this->instagram->getLongLivedToken($tokens['page_access_token']);
        Log::alert(json_encode($access_token));

        $tokens['long_lived_access_token'] = $access_token->access_token;
        $tokens['expires_in'] = $access_token->expires_in;

        $this->instagram->setAccessToken($access_token->access_token);
        return $tokens;
    }

    public function getUserProfile()
    {
        $this->instagram->setAccessToken($this->accessToken);
        return $this->instagram->getUserProfile();
    }

    public function getUserMedia()
    {
        $this->instagram->setAccessToken($this->accessToken);
        return $this->instagram->getUserMedia('me', 10);
    }
}
