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
Route::get('/', static function () {
    return view('frontend.index');
})->name('home');

Route::get('/about', static function () {
    return view('frontend.about');
})->name('about');

Route::get('/contact', static function () {
    return view('frontend.contact-us');
})->name('contact');

Route::get('/development', static function () {
    return view('frontend.development');
})->name('development');

Route::get('/development-pathway', static function () {
    return view('frontend.development-pathway');
})->name('development-pathway');

Route::get('/download', static function () {
    return view('frontend.download');
})->name('download');

Route::get('/emirati-development-program', static function () {
    return view('frontend.emirati-development-program');
})->name('emirati-development-program');

Route::get('/fan-club', static function () {
    return view('frontend.fan-club');
})->name('fan-club');

Route::get('/fixtures', static function () {
    return view('frontend.fixtures');
})->name('fixtures');

Route::get('/galleries', static function () {
    return view('frontend.galleries');
})->name('galleries');

Route::get('/gallery', static function () {
    return view('frontend.gallery');
})->name('gallery');

Route::get('/news', static function () {
    return view('frontend.news');
})->name('news');

Route::get('/payment', static function () {
    return view('frontend.payment');
})->name('payment');

Route::get('/player-registration', static function () {
    return view('frontend.player-registration');
})->name('player-registration');

Route::get('/sponsor', static function () {
    return view('frontend.sponsor');
})->name('sponsor');

Route::get('/team', static function () {
    return view('frontend.teams');
})->name('team');

Route::get('/tournament-registration', static function () {
    return view('frontend.tournament-registration');
})->name('tournament-registration');

Route::get('/uae-mens', static function () {
    return view('frontend.uae-mens');
})->name('uae-mens');

Route::get('/uae-womens', static function () {
    return view('frontend.uae-womens');
})->name('uae-womens');

Route::get('/under-19', static function () {
    return view('frontend.under-19');
})->name('under-19');


/*------------------------------------------------------------------*/
/*---------------------------ADMIN ROUTES---------------------------*/
/*------------------------------------------------------------------*/

Route::group(['prefix' => 'admin'], static function () {

    Auth::routes();

    Route::get('/dashboard', static function () {
        return view('backend.dashboard');
    })->name('dashboard');

    Route::get('/home', 'HomeController@index')->name('home');

});
