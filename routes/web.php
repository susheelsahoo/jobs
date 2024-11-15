<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendEmail;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();


// Route::get('/', 'HomeController@index')->name('index');
Route::get('/login', 'HomeController@redirectAdmin')->name('login');
Route::resource('/', 'JobApplicantsController', ['names' => 'jobs']);

Route::get('send-mail', function () {
    $details = ['body' => 'This is for testing email using smtp', 'from' => 'jobs@vigilantindia.com', 'subject' => 'New Application for : Accountant'];
    Mail::to('ashwini.burgeon@gmail.com')->send(new SendEmail($details));
    dd("Email is Sent.");
});


// Route::resource('/', 'JobApplicantsController', ['names' => 'jobs']);
Route::get('/', 'JobApplicantsController@index', ['names' => 'index']);
Route::group(['prefix' => 'jalagum'], function () {
    Route::get('/', 'JobApplicantsController@intro')->name('jalagum.intro');
    Route::get('/landing', 'JobApplicantsController@landing')->name('jalagum.landing');
    // Route::get('/{prefix}/career/{job_name}', [CareerController::class, 'show'])->name('career.show');
    Route::get('/career', 'JobApplicantsController@career')->name('jalagum.career');
    Route::get('/rules/{job_id}', 'JobApplicantsController@rules')->name('jalagum.rules');
    Route::get('/apply-now/{job_id}', 'JobApplicantsController@applyNow')->name('jalagum.applyNow');
    Route::post('/store', 'JobApplicantsControlle   r@store')->name('jalagum.store');
    Route::get('/thank-you', 'JobApplicantsController@thankYou')->name('jalagum.thankYou');
    Route::get('/temp-down', 'JobApplicantsController@tempDown ')->name('jalagum.tempDown');
});
Route::group(['prefix' => 'nhm'], function () {
    Route::get('/', 'JobApplicantsController@intro')->name('nhm.intro');
    Route::get('/landing', 'JobApplicantsController@landing')->name('nhm.landing');
    Route::get('/career', 'JobApplicantsController@career')->name('nhm.career');
    Route::get('/rules/{job_id}', 'JobApplicantsController@rules')->name('nhm.rules');
    Route::get('/apply-now/{job_id}', 'JobApplicantsController@applyNow')->name('nhm.applyNow');
    Route::post('/store', 'JobApplicantsControlle   r@store')->name('nhm.store');
    Route::get('/thank-you', 'JobApplicantsController@thankYou')->name('nhm.thankYou');
    Route::get('/temp-down', 'JobApplicantsController@tempDown ')->name('nhm.tempDown');
});

/**
 * Admin routes
 */
Route::group(['prefix' => 'admin'], function () {
    Route::get('/', 'Backend\DashboardController@index')->name('admin.dashboard');
    Route::resource('roles', 'Backend\RolesController', ['names' => 'admin.roles']);
    Route::resource('users', 'Backend\UsersController', ['names' => 'admin.users']);
    Route::resource('careers', 'Backend\CareersController', ['names' => 'admin.careers']);
    Route::resource('admins', 'Backend\AdminsController', ['names' => 'admin.admins']);
    Route::resource('jobsapplication', 'Backend\JobApplicationController', ['names' => 'admin.jobsapplication']);
    // Route::post('jobsapplication', 'Backend\JobApplicationController@index', ['names' => 'admin.jobsapplication.list']);
    Route::any('/jobsapplication/download', 'Backend\JobApplicationController@download_jobApplicants')->name('admin.jobsapplication.download');


    // Login Routes
    Route::get('/login', 'Backend\Auth\LoginController@showLoginForm')->name('admin.login');
    Route::post('/login/submit', 'Backend\Auth\LoginController@login')->name('admin.login.submit');

    // Logout Routes
    Route::post('/logout/submit', 'Backend\Auth\LoginController@logout')->name('admin.logout.submit');

    // Forget Password Routes
    Route::get('/password/reset', 'Backend\Auth\ForgetPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('/password/reset/submit', 'Backend\Auth\ForgetPasswordController@reset')->name('admin.password.update');
});
