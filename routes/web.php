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

Route::get('/', function () {
    return view('frontend.index');
})->name('home');

Route::get('/about', function () {
    return view('frontend.about');
})->name('about');

Route::get('/contact', function () {
    return view('frontend.contact-us');
})->name('contact');

Route::get('/development', function () {
    return view('frontend.development');
})->name('development');

Route::get('/development-pathway', function () {
    return view('frontend.development-pathway');
})->name('development-pathway');

Route::get('/download', function () {
    return view('frontend.download');
})->name('download');

Route::get('/emirati-development-program', function () {
    return view('frontend.emirati-development-program');
})->name('emirati-development-program');

Route::get('/fan-club', function () {
    return view('frontend.fan-club');
})->name('fan-club');

Route::get('/fixtures', function () {
    return view('frontend.fixtures');
})->name('fixtures');

Route::get('/galleries', function () {
    return view('frontend.galleries');
})->name('galleries');

Route::get('/gallery', function () {
    return view('frontend.gallery');
})->name('gallery');

Route::get('/news', function () {
    return view('frontend.news');
})->name('news');

Route::get('/payment', function () {
    return view('frontend.payment');
})->name('payment');

Route::get('/player-registration', function () {
    return view('frontend.player-registration');
})->name('player-registration');

Route::get('/sponsor', function () {
    return view('frontend.sponsor');
})->name('sponsor');

Route::get('/team', function () {
    return view('frontend.teams');
})->name('team');

Route::get('/tournament-registration', function () {
    return view('frontend.tournament-registration');
})->name('tournament-registration');

Route::get('/uae-mens', function () {
    return view('frontend.uae-mens');
})->name('uae-mens');

Route::get('/uae-womens', function () {
    return view('frontend.uae-womens');
})->name('uae-womens');

Route::get('/under-19', function () {
    return view('frontend.under-19');
})->name('under-19');
