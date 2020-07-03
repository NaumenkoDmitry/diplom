<?php

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


Route::group(['namespace'=>"\App\Http\Controllers\Frontend"], function(){
    Route::get("/", "HomeController@index")->name("home");
    Route::get("/category/{id}", "HomeController@category")->name("category");
    Route::get("/article/{id}", "HomeController@article")->name("article");

});

Auth::routes();
Route::get('/home', 'HomeController@index');
Route::resource('statuses', 'StatusController');
Route::resource('articles', 'ArticleController');
Route::resource('media', 'MediaController');
Route::resource('categories', 'CategoriesController');
Route::resource('mediaTypes', 'MediaTypesController');
