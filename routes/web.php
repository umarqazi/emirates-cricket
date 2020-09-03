<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*------------------------------------------------------------------*/
/*---------------------------FRONTEND ROUTES------------------------*/
/*------------------------------------------------------------------*/
Route::get('/', 'HomeController@index')->name('home');

Route::get('/about', static function () {
    return view('frontend.about');
})->name('about');

Route::get('/contact', 'ContactController@createContact')->name('contact');
Route::post('/contact', 'ContactController@storeContact')->name('submit-contact-form');

/* Development Routes */
Route::get('/development', 'DevelopmentController@frontendMainDevelopmentPage')->name('development');
Route::get('/development-pathway', 'DevelopmentController@frontendDevelopmentPathwayPage')->name('development-pathway');
Route::get('/emirati-development-program', 'DevelopmentController@frontendEmiratiDevelopmentPage')->name('emirati-development-program');

Route::get('/download', static function () {
    return view('frontend.download');
})->name('download');


Route::get('/fan-club', 'SocialAccountController@fanClub')->name('fan-club');

Route::get('/fixtures', static function () {
    return view('frontend.fixtures');
})->name('fixtures');

Route::get('/galleries', 'GalleryController@frontendGalleries')->name('galleries');

Route::get('/gallery', static function () {
    return view('frontend.gallery');
})->name('gallery');

Route::get('/news', 'NewsController@frontendNews')->name('news');

Route::get('/payment', static function () {
    return view('frontend.payment');
})->name('payment');

Route::get('/player-registration', 'PlayerController@createPlayerRegistration')->name('player-registration');
Route::post('/player-registration', 'PlayerController@storePlayerRegistration')->name('submit-player-registration');
Route::post('/upload-player-headshot-photo', 'PlayerController@uploadHeadShotPhoto')->name('upload-player-headshot-photo');

/* Tournament Registration */
Route::get('/tournament-registration', 'TournamentController@createTournamentRegistration')->name('tournament-registration');
Route::post('/tournament-registration', 'TournamentController@storeTournamentRegistration')->name('submit-tournament-registration');


Route::get('/sponsor', 'SponsorController@frontendSponsors')->name('sponsor');

Route::get('/team', static function () {
    return view('frontend.teams');
})->name('team');

Route::get('/uae-men', 'TeamController@uaeMens')->name('uae-men');
Route::get('/uae-women', 'TeamController@uaeWomens')->name('uae-women');
Route::get('/under-19', 'TeamController@under19')->name('under-19');

/*------------------------------------------------------------------*/
/*---------------------------ADMIN ROUTES---------------------------*/
/*------------------------------------------------------------------*/

Route::group(['prefix' => 'admin'], static function () {

    Route::redirect('/', '/admin/login');
    Auth::routes();

    Route::group(['middleware' => ['web', 'auth']], static function () {

        Route::get('/dashboard', static function () {
            return view('backend.dashboard');
        })->name('dashboard');

        Route::get('/calendar', static function () {
            return view('backend.calendar');
        })->name('calendar');

        Route::resource('contact', 'ContactController');

        /* Player Registration Request */
        Route::get('/player/export', 'PlayerController@export')->name('player.export');
        Route::resource('/player', 'PlayerController');
        Route::get('/player/approve-request/{id}', 'PlayerController@approveRequest')->name('approve-player');
        Route::get('/player/decline-request/{id}', 'PlayerController@declineRequest')->name('decline-player');

        /* Tournament Registration Request */
        Route::get('/tournament/export', 'TournamentController@export')->name('tournament.export');
        Route::resource('/tournament', 'TournamentController');
        Route::get('/tournament/approve-request/{id}', 'TournamentController@approveRequest')->name('approve-tournament');
        Route::get('/tournament/decline-request/{id}', 'TournamentController@declineRequest')->name('decline-tournament');
        Route::get('/tournament/file/{id}/{name}', 'TournamentController@openFile')->name('tournament.file');

        Route::resource('/news', 'NewsController');
        Route::resource('/update', 'UpdateController');
        Route::resource('/sponsor', 'SponsorController');

        /* Gallery Related Routes in here... */
        Route::resource('/gallery', 'GalleryController');
        Route::post('/gallery-images', 'GalleryController@uploadGalleryImages')->name('gallery.images');

        /* Social Account Routes */
        Route::resource('/social-accounts', 'SocialAccountController');

        /* Facebook */
        Route::get('facebook/callback','SocialAccountController@facebookCallback')->name('facebook.callback');
        Route::get('get/facebook/posts','SocialAccountController@getLatestFacebookPosts')->name('facebook.get.posts');

        /* Instagram */
        Route::get('instagram/callback','SocialAccountController@instagramCallback')->name('instagram.callback');
        Route::get('get/instagram/posts','SocialAccountController@getLatestInstagramPosts')->name('instagram.get.posts');

        /* Twitter */
        Route::get('twitter/callback','SocialAccountController@twitterCallback')->name('twitter.callback');
        Route::get('get/twitter/posts','SocialAccountController@getLatestTwitterPosts')->name('twitter.get.posts');

        /* All Teams Routes in here... */
        Route::resource('/team', 'TeamController');

        /* All Team Player Routes */
        Route::resource('/team-player', 'TeamPlayerController');

        /* App Setting Routes */
        Route::resource('/setting', 'SettingController');
        Route::post('/homepage-slider', 'SettingController@uploadSliderImages')->name('slider.images');

        /* Dropzone JS Image Upload and Delete Routes */
        Route::post('/image/upload', 'ImageController@uploadImage')->name('image.upload');
        Route::post('image/delete','ImageController@deleteImage')->name('image.delete');

        /* User Management */
        Route::resource('/user', 'UserController');
        Route::resource('/role', 'RoleController');
        Route::resource('/permission', 'PermissionController');

        /* Development Routes */
        Route::resource('/development', 'DevelopmentController');
    });
});

/* Set User Password Routes */
Route::get('/user/set/password/{token}', 'UserController@setPassword')->name('setPassword');
Route::post('/store/password', 'UserController@storePassword')->name('storePassword');
