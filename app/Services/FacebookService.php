<?php


namespace App\Services;


use App\SocialAccount;
use Facebook\Exceptions\FacebookResponseException;
use Facebook\Exceptions\FacebookSDKException;
use Facebook\Facebook;
use Illuminate\Support\Facades\Log;

class FacebookService
{
    public $facebook;
    public $accessToken;
    public $social_account_service;

    public function __construct()
    {
        $this->social_account_service = new SocialAccountService();
        $facebook_tokens = $this->getDbTokens();
        $this->accessToken = $facebook_tokens->long_lived_access_token;
        $this->facebook = new Facebook();
    }

    public function getDBTokens()
    {
        return $this->social_account_service->findByType(SocialAccount::$Facebook);
    }

    public function facebookLogin()
    {
        $helper = $this->facebook->getRedirectLoginHelper();

        $permissions = ['email', 'pages_show_list', 'pages_read_engagement', 'pages_read_user_content', 'pages_manage_posts', 'pages_manage_engagement']; // Optional permissions
        return $helper->getLoginUrl(route('facebook.callback'), $permissions);
    }

    public function facebookCallback()
    {
        $tokens = array();
        $helper = $this->facebook->getRedirectLoginHelper();

        try {
            $accessToken = $helper->getAccessToken();
            Log::alert('Access Token: ');
            Log::alert($accessToken);

        } catch (FacebookResponseException $e) {
            // When Graph returns an error
            echo 'Graph returned an error: ' . $e->getMessage();
            exit;
        } catch (FacebookSDKException $e) {
            // When validation fails or other local issues
            echo 'Facebook SDK returned an error: ' . $e->getMessage();
            exit;
        }

        if (!isset($accessToken)) {
            if ($helper->getError()) {
                header('HTTP/1.0 401 Unauthorized');
                echo "Error: " . $helper->getError() . "\n";
                echo "Error Code: " . $helper->getErrorCode() . "\n";
                echo "Error Reason: " . $helper->getErrorReason() . "\n";
                echo "Error Description: " . $helper->getErrorDescription() . "\n";
            } else {
                header('HTTP/1.0 400 Bad Request');
                echo 'Bad request';
            }
            exit;
        }

        // Logged in
        Log::alert('Access Token Value: ');
        Log::alert($accessToken->getValue());
        $tokens['page_access_token'] = $accessToken->getValue();

        // The OAuth 2.0 client handler helps us manage access tokens
        $oAuth2Client = $this->facebook->getOAuth2Client();

        // Get the access token metadata from /debug_token
        $tokenMetadata = $oAuth2Client->debugToken($accessToken);

        Log::alert('Metadata: ');
        Log::alert($tokenMetadata);

        // Validation (these will throw FacebookSDKException's when they fail)
        $tokenMetadata->validateAppId(env('FACEBOOK_APP_ID'));

        // If you know the user ID this access token belongs to, you can validate it here
        //$tokenMetadata->validateUserId('123');
        $tokenMetadata->validateExpiration();

        if (!$accessToken->isLongLived()) {

            // Exchanges a short-lived access token for a long-lived one
            try {
                $longLivedAccessToken = $oAuth2Client->getLongLivedAccessToken($accessToken);
            } catch (FacebookSDKException $e) {
                echo "<p>Error getting long-lived access token: " . $e->getMessage() . "</p>\n\n";
                exit;
            }

            $tokens['long_lived_access_token'] = $longLivedAccessToken->getValue();

            Log::alert('Long Lived Access Token Value: ');
            Log::alert($longLivedAccessToken->getValue());
        }

        $_SESSION['fb_access_token'] = (string)$longLivedAccessToken;
        return $tokens;
    }

    public function getPostsFromPage()
    {
        $postData = "";
        try {
            $userPosts = $this->facebook->get("/" . env('FACEBOOK_PAGE_ID') . "/posts?fields=id,message,created_time,full_picture,permalink_url,attachments{media}&limit=10", $this->accessToken);
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
}
