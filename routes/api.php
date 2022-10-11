<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/House', 'HouseController@index');
Route::get('/House/{id}', 'HouseController@index2');
Route::get('/Houses/{id}', 'HouseController@index3');
Route::get('/Houses/{index3}', 'HouseController@index3');
Route::get('/price/{id}', 'HouseController@priceindex');

Route::get('/location', 'LocationController@index');

Route::get('/review/{id}', 'ReviewController@index');
Route::post('/review', 'ReviewController@store');

Route::get('/verification/{id}', 'MyhomeController@indexverification');
Route::get('/Myhome', 'MyhomeController@index');
Route::post('/Myhome', 'MyhomeController@store');
Route::delete('/Myhome/delete/{id}', 'MyhomeController@destory');
Route::delete('/Myhome/delete2/{id}', 'MyhomeController@destorytwo');

Route::get('/promotions', 'promotionController@index');
Route::get('/promotions/all', 'promotionController@indexall');
Route::get('/promotions/ing', 'promotionController@indexing');
Route::get('/promotions/end', 'promotionController@indexend');

Route::post('/search/{id}', 'SearchController@store');
