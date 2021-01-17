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

Route::get("article", 'API\ArticleController@index');
Route::post("article/{id}/update", 'API\ArticleController@update');
Route::get("article/{id}/show", 'API\ArticleController@show');
Route::post("article", 'API\ArticleController@store');
Route::delete("article/{id}", 'API\ArticleController@destroy');
