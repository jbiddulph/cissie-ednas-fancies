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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/test', 'HomeController@test');

Route::prefix('admin/posts')->group(function(){
   Route::get('create', 'PostsController@create')->name('post.create');
   Route::post('create', 'PostsController@store')->name('post.store');
   Route::get('/', 'PostsController@index')->name('post.list');
   Route::get('{id}/edit', 'PostsController@edit')->name('post.edit');
   Route::post('{id}/store', 'PostsController@update')->name('post.update');
   Route::get('{id}/show', 'PostsController@show')->name('post.show');
   Route::post('{id}/delete', 'PostsController@destroy')->name('post.delete');
});



Route::get('/users',function() {
    return view('home');
});
