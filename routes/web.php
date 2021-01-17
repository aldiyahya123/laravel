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
Auth::routes();

Route::get('/', 'ArticleController@index')->name("home");
Route::get('/home', function() {
    return redirect("/");
});

Route::resource('articles', 'ArticleController');

Route::get("logout", "ArticleController@logout")->name("articles.logout");

// email

Route::get("/kirimEmail", 'EmailController@index');
