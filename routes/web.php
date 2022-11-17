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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return redirect('/');
});

// Users
Route::prefix('users')->group(function () {
    Route::get('/', 'UserRoleController@index')->name('users.index');
    Route::get('/{user}', 'App\Http\Controllers\UserController@index')->name('users.posts');
    Route::put('/{user}', 'UserRoleController@update')->name('users.update');
    Route::delete('/{user}','UserController@destroy')->name('users.destroy');

});

// Posts
Route::prefix('posts')->group(function () {
    Route::get('/', 'PostController@index')->name('posts.index');
    Route::get('/create', 'PostController@create')->name('posts.create');
    Route::get('/{post}', 'PostController@show')->name('posts.show');
    Route::post('/', 'PostController@store')->name('posts.store');
    Route::get('/{post}/edit', 'PostController@edit')->name('posts.edit');
    Route::put('/{post}', 'PostController@update')->name('posts.update');
    Route::delete('/{post}', 'PostController@destroy')->name('posts.destroy');
});
