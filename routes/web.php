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


Auth::routes();

Route::get('/home', 'HomeController@universidades')->name('universidades');
Route::get('/', 'HomeController@home')->name('home');
Route::get('/hospitais', 'HomeController@hospitais')->name('hospitais');
Route::get('/materiais', 'HomeController@materiais')->name('materiais');
Route::get('/epis', 'HomeController@epis')->name('epis');
