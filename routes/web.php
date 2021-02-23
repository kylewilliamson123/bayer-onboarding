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

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::get('/onboard', 'OnboardController@index')->name('onboard');
