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

Route::any('db', 'AppController@db')->name('db');
Route::get('php', 'AppController@php')->name('php');
Route::get('home', 'AppController@home')->name('home');
Route::get('/', 'BaseController@root')->name('root');
