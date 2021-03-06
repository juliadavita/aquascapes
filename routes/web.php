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

//Return resources as homepage
Route::resource('/', 'App\Http\Controllers\PostsController');

Route::get('/welcome', function () {
    return view('welcome');
});

//PostsController
Route::resource('posts', 'App\Http\Controllers\PostsController');


//Admin
Route::group(['middleware' => 'auth'], function(){
    Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'is_admin'], function(){
        Route::resource( 'pages', \App\Http\Controllers\Admin\PageController::class);
    });
});


Route::get('admin/home', [App\Http\Controllers\PostsController::class, 'adminDash'])->name('admin.home')->middleware('is_admin');

//Visibility Route
Auth::routes();
Route::patch('/home/visibility/{post}', 'App\Http\Controllers\PostsController@visibilityUpdate');

//Own Posts showing
Route::get('/home', [App\Http\Controllers\PostsController::class, 'ownPosts'])->name('home');

//Search
Route::get('/search', 'App\Http\Controllers\PostsController@search')->name('search');


