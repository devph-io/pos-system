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

Route::post('login', 'UserController@login');

Route::post('register', 'UserController@register');

Route::get('transactions','TransactionsController@index');
Route::post('transactions/create','TransactionsController@store');
Route::put('transactions/update/{id}','TransactionsController@update');
Route::group(['middleware' => 'auth:api'], function(){
Route::post('register', 'UserController@register');
Route::get('details', 'UserController@details');
Route::post('logout', 'UserController@logout');
Route::post('add', 'ItemsController@store');
Route::get('items', 'ItemsController@index');
Route::post('show/{id}', 'ItemsController@show');
Route::post('delete/{id}', 'ItemsController@delete');
Route::put('update/{id}', 'ItemsController@update');

});