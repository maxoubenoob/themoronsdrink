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

//Main routes
$main = "MainController";

Route::get('/', "$main@home")->name('home'); // Route to the main page
Route::get('/data/get', "$main@getQuestion")->name('data.get'); //Get the question


