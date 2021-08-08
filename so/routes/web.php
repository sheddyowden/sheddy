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

/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/','HomeController@index');

Route::get('/projects','HomeController@Projects');

Route::get('/contacts','HomeController@contacts');

Route::get('/about_me','HomeController@about_me');

Route::get('/services','HomeController@services');

//Default routes without controllers
/*
Route::get('/projects', function () {
    return view('projects');
});

Route::get('/contacts', function () {
    return view('contacts');
});

Route::get('/about-me', function () {
    return view('about-me');
});
*/