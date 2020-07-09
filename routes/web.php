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
    Route::get("/categories/{id}", "HomeController@article")->name("article");

});
Route::post('/comments', "CommentsController@store")->name('comments.store');
Route::get('/comments/{uid}', "CommentsController@show")->name('comments.show');

Route::group(['namespace'=>"\App\Http\Controllers\Admin", "prefix"=>"admin", 'middleware'=>["auth","admin"]], function(){
    Route::get("/", "DashboardController@index")->name("admin.dashboard");
    Route::resource('categories', 'CategoriesController');
    Route::resource('mediaTypes', 'MediaTypesController');
    Route::resource('statuses', 'StatusController');
});
Route::group(['namespace'=>"\App\Http\Controllers\Editor", "prefix"=>"editor", 'middleware'=>["auth"]], function(){
    Route::resource('articles', 'ArticleController');
    Route::put("article/{id}/set-status", "ArticleController@setStatus")->name("articles.set-status");
    Route::resource('media', 'MediaController');

//    Route::resource('frontend.categories.result', 'ArticleController');
});


Auth::routes();

Route::get('/home', 'HomeController@index');

