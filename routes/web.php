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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/projects','ProjectController@index');
Route::get('/projects/create','ProjectController@create');
Route::get('/projects/{project}/edit','ProjectController@edit');
Route::post('/projects/','ProjectController@store');
Route::delete('/projects/destall','ProjectController@destall');
Route::put('/projects/{project}', 'ProjectController@update');
Route::delete('/projects/{project}', 'ProjectController@destroy');
Route::get('/projects/{project}','ProjectController@show');

Route::get('/products','ProductController@index');
Route::get('/products/create','ProductController@create');
Route::get('/products/{product}/edit','ProductController@edit');
Route::post('/products/','ProductController@store');
Route::delete('/products/destall','ProductController@destall');
Route::put('/products/{product}', 'ProductController@update');
Route::delete('/products/{product}', 'ProductController@destroy');
Route::get('/products/{product}','ProductController@show');

Route::get('/categories','CategoryController@index');
Route::get('/categories/create','CategoryController@create');
Route::get('/categories/{category}/edit','CategoryController@edit');
Route::post('/categories/','CategoryController@store');
Route::delete('/categories/destall','CategoryController@destall');
Route::put('/categories/{category}', 'CategoryController@update');
Route::delete('/categories/{category}', 'CategoryController@destroy');
Route::get('/categories/{category}','CategoryController@show');

