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

// Controller
Route::resource('posts', 'App\Http\Controllers\PostsController');

//Visibility Route
//Route::

//Admin
Route::group(['middleware' => 'auth'], function(){
    Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'is_admin'], function(){
        Route::resource( 'pages', \App\Http\Controllers\Admin\PageController::class);
    });
});





// OLD CODE

//Route::get('/', function () {
//    return view('posts');
//});

//Route::get('/posts/{post}', function ($slug) {
//    $post = file_get_contents(__DIR__ .  "/../resources/posts/{$slug}.html");
//
//    return view('post', [
//        'post' => $post
//    ]);
//});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
