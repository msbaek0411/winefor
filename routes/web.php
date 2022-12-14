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
    return view('welcome');
});

Route::get('/myhome', function () {
    return view('myhome');
});

Route::get('/where', function () {
    return view('where');
});

Route::get('/promotion', function () {
    return view('promotions');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/house/{id}', 'HouseController@show');

Route::get('/home/kakao/{id}', 'HouseController@kakaoshow');


Route::get('/search', 'SearchController@index');