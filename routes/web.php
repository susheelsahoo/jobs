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
Route::get('/', 'JobApplicantsController@intro', ['names' => 'intro']);
Route::get('/landing', 'JobApplicantsController@landing')->name('jobs.landing');
Route::get('/career', 'JobApplicantsController@career')->name('jobs.career');
Route::get('/rules/{job_id}', 'JobApplicantsController@rules')->name('jobs.rules');
// Route::get('/termsCondition', 'JobApplicantsController@termsCondition')->name('jobs.rules');
Route::get('/apply-now/{job_id}', 'JobApplicantsController@applyNow')->name('jobs.applyNow');
Route::post('/store', 'JobApplicantsController@store')->name('jobs.store');
Route::get('/thank-you', 'JobApplicantsController@thankYou')->name('jobs.thankYou');
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


    // Login Routes
    Route::get('/login', 'Backend\Auth\LoginController@showLoginForm')->name('admin.login');
    Route::post('/login/submit', 'Backend\Auth\LoginController@login')->name('admin.login.submit');

    // Logout Routes
    Route::post('/logout/submit', 'Backend\Auth\LoginController@logout')->name('admin.logout.submit');

    // Forget Password Routes
    Route::get('/password/reset', 'Backend\Auth\ForgetPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('/password/reset/submit', 'Backend\Auth\ForgetPasswordController@reset')->name('admin.password.update');
});
