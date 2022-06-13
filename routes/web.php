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
    return view('signup');
});

Route::get('/signup', 'App\Http\Controllers\SignupController@index');
Route::post('/signup', 'App\Http\Controllers\SignupController@signup');
Route::get('/signup/username/{q}', 'App\Http\Controllers\SignupController@checkUsername');
Route::get('/signup/email/{q}', 'App\Http\Controllers\SignupController@checkEmail');

Route::get("/login", "App\Http\Controllers\LoginController@index");
Route::post("/login", "App\Http\Controllers\LoginController@checkLogin");
Route::get("/logout", "App\Http\Controllers\LoginController@logout");

Route::get('/home', "App\Http\Controllers\HomeController@index");
Route::get('/home/fetchRecipes/{q}', "App\Http\Controllers\HomeController@fetchRecipes");
Route::get('/home/searchRecipe/{q}', "App\Http\Controllers\HomeController@searchRecipe");
Route::get('/home/spotifyApi', "App\Http\Controllers\HomeController@spotifyApi");

Route::get('/my_recipes', "App\Http\Controllers\FavoriteController@index");
Route::get('/my_recipes/fetchFavorites', "App\Http\Controllers\FavoriteController@fetchFavorites");

Route::post('/star/uploadStar', "App\Http\Controllers\StarController@uploadStar");
Route::post('/star/starRecipe', "App\Http\Controllers\StarController@starRecipe");
Route::post('/star/unstarRecipe', "App\Http\Controllers\StarController@unstarRecipe");