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
// dopo aver installato tramite riga di comando la Classe HomeController nei Controller di Laravel la richiamno nella route
Route::get('/', 'HomeController@Index');
