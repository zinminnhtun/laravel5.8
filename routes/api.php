<?php

use Illuminate\Http\Request;

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
Route::get('/todos','TodoApiController@index');
Route::get('/todo/{id}','TodoApiController@show');

Route::get('/items','ItemApiController@index');
Route::get('/item/{id}','ItemApiController@show');
Route::post('/item','ItemApiController@store');

Route::apiResource('/photo','PhotoApiController');
