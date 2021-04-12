<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

    if (Auth::check()) {
        // The user is already logged in, redirect to /onboards
        return redirect('/dashboard');
    }
    else {
        // User is not logged in, show login view
        return view('auth/login');
    }
    
});

Auth::routes();

// Dashboard
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

// Onboard routes
Route::get('/onboard/{id}', 'OnboardController@index')->name('onboard');
Route::post('/onboardUpdate/{id}', 'OnboardSubmitController@update')->name('onboardUpdate');
Route::post('/onboardDelete/{id}', 'OnboardSubmitController@delete')->name('onboardDelete');

// Form routes
Route::get('/form', 'FormController@index')->name('form');
Route::post('/formSubmit', 'SubmitController@insert')->name('formSubmit');

// Finished onboard routes
Route::get('/finished', 'FinishedController@index')->name('finished');
Route::get('/finished', 'FinishedController@search')->name('finished');