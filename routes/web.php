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

Route::view('/', 'welcome');

Route::get('/users', 'UserController@index');
Route::get('/users/create', 'UserController@edit');
Route::post('/users', 'UserController@save');
Route::get('/users/{user}', 'UserController@show');
Route::get('/users/{user}/edit', 'UserController@edit');
Route::put('/users/{user}', 'UserController@save');
Route::delete('/users/{user}', 'UserController@delete');

Route::get('/restaurants', 'RestaurantController@index');
Route::get('/restaurants/create', 'RestaurantController@edit');
Route::post('/restaurants', 'RestaurantController@save');
Route::get('/restaurants/{restaurant}', 'RestaurantController@show');
Route::get('/restaurants/{restaurant}/edit', 'RestaurantController@edit');
Route::put('/restaurants/{restaurant}', 'RestaurantController@save');
Route::delete('/restaurants/{restaurant}', 'RestaurantController@delete');

Route::get('/posts', 'PostController@index');
Route::get('/posts/create', 'PostController@edit');
Route::post('/posts', 'PostController@save');
Route::get('/posts/{post}', 'PostController@show');
Route::get('/posts/{post}/edit', 'PostController@edit');
Route::put('/posts/{post}', 'PostController@save');
Route::delete('/posts/{post}', 'PostController@delete');

Route::get('/countries', 'CountryController@index');
Route::get('/countries/create', 'CountryController@edit');
Route::post('/countries', 'CountryController@save');
Route::get('/countries/{country}', 'CountryController@show');
Route::get('/countries/{country}/edit', 'CountryController@edit');
Route::put('/countries/{country}', 'CountryController@save');
Route::delete('/countries/{country}', 'CountryController@delete');

Route::get('/categories', 'CategoryController@index');
Route::get('/categories/create', 'CategoryController@edit');
Route::post('/categories', 'CategoryController@save');
Route::get('/categories/{category}', 'CategoryController@show');
Route::get('/categories/{category}/edit', 'CategoryController@edit');
Route::put('/categories/{category}', 'CategoryController@save');
Route::delete('/categories/{category}', 'CategoryController@delete');

Route::get('/comments', 'CommentController@index');
Route::get('/comments/create', 'CommentController@edit');
Route::post('/comments', 'CommentController@save');
Route::get('/comments/{comment}', 'CommentController@show');
Route::get('/comments/{comment}/edit', 'CommentController@edit');
Route::put('/comments/{comment}', 'CommentController@save');
Route::delete('/comments/{comment}', 'CommentController@delete');

Route::get('/roles', 'RoleController@index');
Route::get('/roles/create', 'RoleController@edit');
Route::post('/roles', 'RoleController@save');
Route::get('/roles/{role}', 'RoleController@show');
Route::get('/roles/{role}/edit', 'RoleController@edit');
Route::put('/roles/{role}', 'RoleController@save');
Route::delete('/roles/{role}', 'RoleController@delete');
