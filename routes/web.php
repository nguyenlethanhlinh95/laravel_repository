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

Route::get('/', 'PostsController@index')->name('post.index');
Route::group(['prefix' => 'admin'],
    function (){
        Route::resource('post', 'PostsController');
    });

Route::get('/index', 'HomeController@index')->name('home.index');

