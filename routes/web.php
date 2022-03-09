<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DevelopmentController;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\InternationalNewsController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\SponsorController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TeamPlayerController;
use App\Http\Controllers\UpdateController;
use App\Http\Controllers\UserController;
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

Route::get('/about', 'AboutUsController@about')->name('about-us');
Route::get('/chairman-message', 'AboutUsController@chairmanMessage')->name('chairman-message');
Route::get('/education-and-downloads', 'AboutUsController@education')->name('education');
Route::get('/councils/{name}', 'AboutUsController@councils')->name('councils');

Route::get('/contact', 'ContactController@createContact')->name('contact');
Route::post('/contact', 'ContactController@storeContact')->name('submit-contact-form');

/* Development Routes */
Route::get('/development', 'DevelopmentController@frontendMainDevelopmentPage')->name('development');
Route::get('/developments/{type}', 'DevelopmentController@getDevelopment')->name('developments');

Route::get('/download', 'DownloadController@frontend_download_files')->name('download');

Route::get('/fixtures', 'FixtureController@fixtures')->name('fixtures');

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


//Route::get('/sponsor', 'SponsorController@frontendSponsors')->name('sponsor');


Route::get('/team', 'TeamController@teams')->name('team');

Route::get('/international-news-detail/{id}', 'HomeController@international_news_content')->name('international-news-detail');
Route::get('/news-detail/{id}', 'HomeController@news_content')->name('news-detail');

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

        Route::get('/contact', [ContactController::class, 'index'])->name('contact.index')->middleware('can:List Contact');
        Route::get('/contact/{contact}', [ContactController::class, 'show'])->name('contact.show')->middleware('can:Show Contact');
        Route::get('/contact/{contact}/edit', [ContactController::class, 'edit'])->name('contact.edit')->middleware('can:Edit Contact');
        Route::put('/contact/{contact}', [ContactController::class, 'update'])->name('contact.update')->middleware('can:Edit Contact');
        Route::delete('/contact/{contact}', [ContactController::class, 'destroy'])->name('contact.destroy')->middleware('can:Delete Contact');

        /* Player Registration Request */
        Route::get('/player/export', 'PlayerController@export')->name('player.export');
        Route::get('/player', [PlayerController::class, 'index'])->name('player.index')->middleware('can:List Player Registration');
        Route::get('/player/{player}', [PlayerController::class, 'show'])->name('player.show')->middleware('can:Show Player Registration');
        Route::put('/player/{player}', [PlayerController::class, 'update'])->name('player.update')->middleware('can:Edit Player Registration');
        Route::delete('/player/{player}', [PlayerController::class, 'destroy'])->name('player.destroy')->middleware('can:Delete Player Registration');

        Route::get('/player/approve-request/{id}', 'PlayerController@approveRequest')->name('approve-player');
        Route::get('/player/decline-request/{id}', 'PlayerController@declineRequest')->name('decline-player');
        Route::post('/players-bulk-action', 'PlayerController@bulkAction');

        Route::get('/news', [NewsController::class, 'index'])->name('news.index')->middleware('can:List News');
        Route::get('/news/create', [NewsController::class, 'create'])->name('news.create')->middleware('can:Create News');
        Route::post('/news/store', [NewsController::class, 'store'])->name('news.store')->middleware('can:Create News');
        Route::get('/news/{news}', [NewsController::class, 'show'])->name('news.show')->middleware('can:Show News');
        Route::get('/news/{news}/edit', [NewsController::class, 'edit'])->name('news.edit')->middleware('can:Edit News');
        Route::put('/news/{news}', [NewsController::class, 'update'])->name('news.update')->middleware('can:Edit News');
        Route::delete('/news/{news}', [NewsController::class, 'destroy'])->name('news.destroy')->middleware('can:Delete News');

        Route::get('/update', [UpdateController::class, 'index'])->name('update.index')->middleware('can:List Update');
        Route::get('/update/create', [UpdateController::class, 'create'])->name('update.create')->middleware('can:Create Update');
        Route::post('/update/store', [UpdateController::class, 'store'])->name('update.store')->middleware('can:Create Update');
        Route::get('/update/{update}', [UpdateController::class, 'show'])->name('update.show')->middleware('can:Show Update');
        Route::get('/update/{update}/edit', [UpdateController::class, 'edit'])->name('update.edit')->middleware('can:Edit Update');
        Route::put('/update/{update}', [UpdateController::class, 'update'])->name('update.update')->middleware('can:Edit Update');
        Route::delete('/update/{update}', [UpdateController::class, 'destroy'])->name('update.destroy')->middleware('can:Delete Update');

        Route::get('/sponsor', [SponsorController::class, 'index'])->name('sponsor.index')->middleware('can:List Sponsor');
        Route::get('/sponsor/create', [SponsorController::class, 'create'])->name('sponsor.create')->middleware('can:Create Sponsor');
        Route::post('/sponsor/store', [SponsorController::class, 'store'])->name('sponsor.store')->middleware('can:Create Sponsor');
        Route::get('/sponsor/{sponsor}', [SponsorController::class, 'show'])->name('sponsor.show')->middleware('can:Show Sponsor');
        Route::get('/sponsor/{sponsor}/edit', [SponsorController::class, 'edit'])->name('sponsor.edit')->middleware('can:Edit Sponsor');
        Route::put('/sponsor/{sponsor}', [SponsorController::class, 'update'])->name('sponsor.update')->middleware('can:Edit Sponsor');
        Route::delete('/sponsor/{sponsor}', [SponsorController::class, 'destroy'])->name('sponsor.destroy')->middleware('can:Delete Sponsor');

        Route::get('/about', [AboutUsController::class, 'index'])->name('about.index')->middleware('can:List About Pages');
        Route::get('/about/{about}', [AboutUsController::class, 'show'])->name('about.show')->middleware('can:Show About Pages');
        Route::get('/about/{about}/edit', [AboutUsController::class, 'edit'])->name('about.edit')->middleware('can:Edit About Pages');
        Route::put('/about/{about}', [AboutUsController::class, 'update'])->name('about.update')->middleware('can:Edit About Pages');

        //        Internation news
        Route::get('/international-news', [InternationalNewsController::class, 'index'])->name('international-news.index')->middleware('can:List International News');
        Route::get('/international-news/create', [InternationalNewsController::class, 'create'])->name('international-news.create')->middleware('can:Create International News');
        Route::post('/international-news/store', [InternationalNewsController::class, 'store'])->name('international-news.store')->middleware('can:Create International News');
        Route::get('/international-news/{internationalNews}', [InternationalNewsController::class, 'show'])->name('international-news.show')->middleware('can:Show International News');
        Route::get('/international-news/{internationalNews}/edit', [InternationalNewsController::class, 'edit'])->name('international-news.edit')->middleware('can:Edit International News');
        Route::put('/international-news/{internationalNews}', [InternationalNewsController::class, 'update'])->name('international-news.update')->middleware('can:Edit International News');
        Route::delete('/international-news/{internationalNews}', [InternationalNewsController::class, 'destroy'])->name('international-news.destroy')->middleware('can:Delete International News');

        /* All Teams Routes in here... */
        Route::get('/team', [TeamController::class, 'index'])->name('team.index')->middleware('can:List Team');
        Route::get('/team/{team}', [TeamController::class, 'show'])->name('team.show')->middleware('can:Show Team');
        Route::get('/team/{team}/edit', [TeamController::class, 'edit'])->name('team.edit')->middleware('can:Edit Team');
        Route::put('/team/{team}', [TeamController::class, 'update'])->name('team.update')->middleware('can:Edit Team');
        Route::delete('/team/{team}', [TeamController::class, 'destroy'])->name('team.destroy')->middleware('can:Delete Team');

        /* All Team Player Routes */
        Route::get('/team-player', [TeamPlayerController::class, 'index'])->name('team-player.index')->middleware('can:List Team Player');
        Route::get('/team-player/create', [TeamPlayerController::class, 'create'])->name('team-player.create')->middleware('can:Create Team Player');
        Route::post('/team-player/store', [TeamPlayerController::class, 'store'])->name('team-player.store')->middleware('can:Create Team Player');
        Route::get('/team-player/{teamPlayer}', [TeamPlayerController::class, 'show'])->name('team-player.show')->middleware('can:Show Team Player');
        Route::get('/team-player/{teamPlayer}/edit', [TeamPlayerController::class, 'edit'])->name('team-player.edit')->middleware('can:Edit Team Player');
        Route::put('/team-player/{teamPlayer}', [TeamPlayerController::class, 'update'])->name('team-player.update')->middleware('can:Edit Team Player');
        Route::delete('/team-player/{teamPlayer}', [TeamPlayerController::class, 'destroy'])->name('team-player.destroy')->middleware('can:Delete Team Player');

        /* App Setting Routes */
        Route::get('/setting/create', [SettingController::class, 'create'])->name('setting.create')->middleware('can:Create Setting');
        Route::post('/setting/store', [SettingController::class, 'store'])->name('setting.store')->middleware('can:Create Setting');
        Route::get('/setting/{setting}/edit', [SettingController::class, 'edit'])->name('setting.edit')->middleware('can:Edit Setting');
        Route::put('/setting/{setting}', [SettingController::class, 'update'])->name('setting.update')->middleware('can:Edit Setting');

        Route::post('/homepage-slider', 'SettingController@uploadSliderImages')->name('slider.images');

        /* Dropzone JS Image Upload and Delete Routes */
        Route::post('/image/upload', 'ImageController@uploadImage')->name('image.upload');
        Route::post('image/delete', 'ImageController@deleteImage')->name('image.delete');

        /* User Management */
        Route::get('/user', [UserController::class, 'index'])->name('user.index')->middleware('can:List User');
        Route::get('/user/create', [UserController::class, 'create'])->name('user.create')->middleware('can:Create User');
        Route::post('/user/store', [UserController::class, 'store'])->name('user.store')->middleware('can:Create User');
        Route::get('/user/{user}/edit', [UserController::class, 'edit'])->name('user.edit')->middleware('can:Edit User');
        Route::put('/user/{user}', [UserController::class, 'update'])->name('user.update')->middleware('can:Edit User');
        Route::delete('/user/{user}', [UserController::class, 'destroy'])->name('user.destroy')->middleware('can:Delete User');

        Route::get('/role', [RoleController::class, 'index'])->name('role.index')->middleware('can:List Role');
        Route::get('/role/create', [RoleController::class, 'create'])->name('role.create')->middleware('can:Create Role');
        Route::post('/role/store', [RoleController::class, 'store'])->name('role.store')->middleware('can:Create Role');
        Route::get('/role/{role}', [RoleController::class, 'show'])->name('role.show')->middleware('can:Show Role');
        Route::get('/role/{role}/edit', [RoleController::class, 'edit'])->name('role.edit')->middleware('can:Edit Role');
        Route::put('/role/{role}', [RoleController::class, 'update'])->name('role.update')->middleware('can:Edit Role');
        Route::delete('/role/{role}', [RoleController::class, 'destroy'])->name('role.destroy')->middleware('can:Delete Role');

        Route::get('/permission', [PermissionController::class, 'index'])->name('permission.index')->middleware('can:List Permission');
        Route::get('/permission/create', [PermissionController::class, 'create'])->name('permission.create')->middleware('can:Create Permission');
        Route::post('/permission/store', [PermissionController::class, 'store'])->name('permission.store')->middleware('can:Create Permission');
        Route::get('/permission/{permission}/edit', [PermissionController::class, 'edit'])->name('permission.edit')->middleware('can:Edit Permission');
        Route::put('/permission/{permission}', [PermissionController::class, 'update'])->name('permission.update')->middleware('can:Edit Permission');
        Route::delete('/permission/{permission}', [PermissionController::class, 'destroy'])->name('permission.destroy')->middleware('can:Delete Permission');

        //        employee Controller
        Route::get('/employee', [EmployeeController::class, 'index'])->name('employee.index')->middleware('can:List Employee');
        Route::get('/employee/create', [EmployeeController::class, 'create'])->name('employee.create')->middleware('can:Create Employee');
        Route::post('/employee/store', [EmployeeController::class, 'store'])->name('employee.store')->middleware('can:Create Employee');
        Route::get('/employee/{employee}/edit', [EmployeeController::class, 'edit'])->name('employee.edit')->middleware('can:Edit Employee');
        Route::put('/employee/{employee}', [EmployeeController::class, 'update'])->name('employee.update')->middleware('can:Edit Employee');
        Route::delete('/employee/{employee}', [EmployeeController::class, 'destroy'])->name('employee.destroy')->middleware('can:Delete Employee');

        //        download Controller
        Route::get('/download', [DownloadController::class, 'index'])->name('download.index');
        Route::get('/download/create', [DownloadController::class, 'create'])->name('download.create');
        Route::post('/download/store', [DownloadController::class, 'store'])->name('download.store');
        Route::get('/download/{download}/edit', [DownloadController::class, 'edit'])->name('download.edit');
        Route::put('/download/{download}', [DownloadController::class, 'update'])->name('download.update');
        Route::delete('/download/{download}', [DownloadController::class, 'destroy'])->name('download.destroy');

        /* Development Routes */
        Route::get('/development', [DevelopmentController::class, 'index'])->name('development.index')->middleware('can:List Development');
        Route::get('/development/create', [DevelopmentController::class, 'create'])->name('development.create');
        Route::post('/development/store', [DevelopmentController::class, 'store'])->name('development.store');
        Route::get('/development/{development}', [DevelopmentController::class, 'show'])->name('development.show')->middleware('can:Show Development');
        Route::get('/development/{development}/edit', [DevelopmentController::class, 'edit'])->name('development.edit')->middleware('can:Edit Development');
        Route::put('/development/{development}', [DevelopmentController::class, 'update'])->name('development.update')->middleware('can:Edit Development');
    });
});

/* Set User Password Routes */
Route::get('/user/set/password/{token}', 'UserController@setPassword')->name('setPassword');
Route::post('/store/password', 'UserController@storePassword')->name('storePassword');


Route::view('/404','exceptions.404');
Route::view('/403','exceptions.403');
Route::view('/500','exceptions.500');
Route::view('/401','exceptions.401');
