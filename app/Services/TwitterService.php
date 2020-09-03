<?php


namespace App\Services;


use Abraham\TwitterOAuth\TwitterOAuth;
use App\SocialAccount;

class TwitterService
{

    public $twitter;
    public $twitter_tokens;
    public $accessToken;
    public $oauthToken;
    public $social_account_service;

    public function __construct()
    {
        $this->social_account_service = new SocialAccountService();
        $this->twitter_tokens = $this->getDbTokens();
        $this->accessToken = $this->twitter_tokens->long_lived_access_token;
        $this->oauthToken = $this->twitter_tokens->page_access_token;
        $this->twitter = new TwitterOAuth(env('TWITTER_CONSUMER_KEY'), env('TWITTER_CONSUMER_SECRET'), $this->twitter_tokens->user_access_token, $this->twitter_tokens->page_access_token);
//        $this->twitter->get("account/verify_credentials");
//        $this->twitter->setTimeouts(10, 15);
    }

    public function getDBTokens() {
        return $this->social_account_service->findByType(SocialAccount::$Twitter);
    }

    public function twitterLogin() {
        $request_token = $this->twitter->oauth('oauth/request_token', array('oauth_callback' => env('TWITTER_OAUTH_CALLBACK')));

        $_SESSION['oauth_token'] = $request_token['oauth_token'];
        $_SESSION['oauth_token_secret'] = $request_token['oauth_token_secret'];

        $url = $this->twitter->url('oauth/authorize', array('oauth_token' => $request_token['oauth_token']));

        return $url;
    }

    public function twitterCallback($params) {

        $twitter = new TwitterOAuth(env('TWITTER_CONSUMER_KEY'), env('TWITTER_CONSUMER_SECRET'), '', $this->accessToken);
        $status = $twitter->get("account/verify_credentials");

        $tokens = array();

        /* Get Twitter Access Token */
        $access_token = $twitter->oauth("oauth/access_token", ["oauth_token" => $params['oauth_token'] , "oauth_verifier" => $params['oauth_verifier']]);

        $tokens['user_access_token'] = $access_token['oauth_token'];
        $tokens['page_access_token'] = $access_token['oauth_token_secret'];

        /* Store these values to session for later use. */
        $_SESSION['TWITTER_USER_ID'] = $access_token['user_id'];
        $_SESSION['TWITTER_USERNAME'] = $access_token['screen_name'];

        /* Get Twitter OAuth2 Bearer Token */
        $bearer = $twitter->oauth2("oauth2/token", ["grant_type" => 'client_credentials']);
        $tokens['long_lived_access_token'] = $bearer->access_token;

        /* Twitter Tokens never gets Expired Explicitly */
        $tokens['expires_in'] = '5184000';
        return $tokens;
    }

    public function getUserTweets() {
        $status = $this->twitter->get("account/verify_credentials");
        if (!empty($status)) {
            return $this->twitter->get('statuses/user_timeline', ["count" => 10, "exclude_replies" => true]);
        } else {
            echo "Sorry! We Couldn't Verify this User.";
        }
    }
}
