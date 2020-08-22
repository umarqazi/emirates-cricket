<?php


namespace App\Services;


use Facebook\Exceptions\FacebookResponseException;
use Facebook\Exceptions\FacebookSDKException;
use Facebook\Facebook;

class FacebookService
{
    public $facebook;
    public $accessToken;

    public function __construct()
    {
        $this->accessToken = env('FACEBOOK_APP_ACCESS_TOKEN');
        $this->facebook = new Facebook();
    }
/*
    public function getAccessToken() {
        try {

        } catch () {

        }
    }*/

    public function getMe() {
        try {
            // Get the \Facebook\GraphNodes\GraphUser object for the current user.
            // If you provided a 'default_access_token', the '{access-token}' is optional.
            $response = $this->facebook->get('/me?fields=id,name', $this->accessToken);
        } catch(\Facebook\Exceptions\FacebookResponseException $e) {
            // When Graph returns an error
            echo 'Graph returned an error: ' . $e->getMessage();
            exit;
        } catch(\Facebook\Exceptions\FacebookSDKException $e) {
            // When validation fails or other local issues
            echo 'Facebook SDK returned an error: ' . $e->getMessage();
            exit;
        }

        return $response->getGraphUser();
    }

    public function getFeeds() {
        $postData = "";
        try {
            $userPosts = $this->facebook->get("/".env('FACEBOOK_USER_ID')."/feed", $this->accessToken);
            $postBody = $userPosts->getDecodedBody();
            $postData = $postBody["data"];
            return $postData;
        } catch (FacebookResponseException $e) {

            return $e->getMessage();
            exit();
        } catch (FacebookSDKException $e) {

            return $e->getMessage();
            exit();
        }
    }

    public function getPages() {
        $postData = "";
        try {
            $response = $this->facebook->get("/".env('FACEBOOK_USER_ID')."/accounts", $this->accessToken);
            return $response->getGraphEdge()->asArray();
        } catch (FacebookResponseException $e) {

            return $e->getMessage();
            exit();
        } catch (FacebookSDKException $e) {

            return $e->getMessage();
            exit();
        }
    }
}
