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

    Route::post('/user/{id}','indexController@getUser');
    Route::post('/test/login','indexController@loginVerify');
    Route::get('/home/info','BolgsInfoController@get_bolgs_info');
    Route::post('/blog/config','BolgsInfoController@set_blogs_content');
    Route::post('/blog/content','BolgsInfoController@blogs_content');


Route::middleware('auth_api')->group(function () {
    Route::get('/test/info','indexController@getUser');
    Route::get('/test/data','tabledata@alltable')->middleware('auth:api');
    });