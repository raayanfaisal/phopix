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


Route::get('/work', function () {
        return view('portfolio');     
});

Route::get('/privacy', function () {
    return view('privacy');
});

Route::get('/terms', function () {
    return view('terms');
});

Route::get('contact', [
    'uses' => 'ContactMessegeController@create'
]);

Route::post('contact', [
    'uses' => 'ContactMessegeController@store',
    'as' => 'contact.store'
]);

Route::get('/work1', function () {
    return view('w1');
});

Auth::routes();

Route::get('/index', 'ContactController@index');

Route::get('/home', 'HomeController@index')->name('home');
