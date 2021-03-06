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

Route::get('/', 'PagesController@getIndex');
Route::get('about', 'PagesController@getAbout');

Auth::routes();

Route::get('pages/contact', 'PagesController@getContact');

Route::get('blog/{slug}', ['as' => 'blog.single', 'uses' => 'BlogController@getSingle']);

Route::get('blog', ['uses' => 'BlogController@getIndex', 'as' => 'blog.index']);

Route::resource('posts', 'PostController');

Route::post('comments/{post_id}', ['uses' => 'CommentsController@store', 'as' => 'comments.store']);

Route::resource('categories', 'CategoryController', ['except' => ['create']]);

Route::get('blog/home', 'HomeController@getHome');