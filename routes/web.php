<?php
namespace App\Http\Middleware;
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

Route::get('/', 'App\Http\Controllers\UserController@index');

Route::get('/dashboard','App\Http\Controllers\UserController@index'
)->middleware(['auth'])->name('dashboard');
require __DIR__.'/auth.php';
Route::Resource('/user', 'App\Http\Controllers\UserController')->middleware('user');
Route::Resource('/admin', 'App\Http\Controllers\AdminController')->middleware('admin');
Route::Resource('/categories', 'App\Http\Controllers\CategoriesController')->middleware('admin');
Route::Resource('/topics', 'App\Http\Controllers\TopicController');
Route::Resource('/user-topics', 'App\Http\Controllers\UserTopicController')->middleware('user');
Route::get('/topic-posts/{id}', 'App\Http\Controllers\UserController@getTopicPosts');
Route::Resource('/post', 'App\Http\Controllers\PostController')->middleware('user');
route::get('/post-topics-api/{id}', 'App\Http\Controllers\UserController@getTopicPostsApi');




