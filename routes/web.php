<?php

use Illuminate\Support\Facades\Route;

use App\category;
use App\article;

Route::get('/','ArticleController@home')->name('index');

Route::get('/category/{id}','ArticleController@Article');

Route::get('/fullstory/{id}','ArticleController@fullstory');

Route::get('/bloguser','ArticleController@blog');
Route::get('/usernewblog','ArticleController@newblog');

Route::post('/pushBlog', 'ArticleController@pushBlog');

Route::delete('/bloguser/{id}', 'ArticleController@delete');

Route::get('/adminblog','ArticleController@adminblog');
Route::delete('/adminblog/{id}', 'ArticleController@deleteuser');

Route::get('/aboutus','ArticleController@aboutus');

Route::get('/profile','ArticleController@Profile');
Route::patch('/profile/{id}','ArticleController@UpdateProfile');

Route::get('/login', 'AuthController@getlogin');
Route::post('/login', 'AuthController@acclogin')->name('tourismlogin');
Route::get('/register', 'AuthController@getregis');
Route::post('/register', 'AuthController@accregis')->name('tourismregister');
Route::get('/logout', 'AuthController@Logout')->name('logout');