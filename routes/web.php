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
    return view('index');
});

Route::get('/subscriptions', function () {
        return view('subscriptions');     
});

Route::get('/privacy', function () {
    return view('privacy');
});

Auth::routes();

Route::get('/index', 'ContactController@index');

Route::get('/home', 'HomeController@index')->name('home');

