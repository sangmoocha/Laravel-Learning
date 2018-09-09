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

//Auth::routes();

// 추가
Auth::routes(['verify' => true]);
Route::get('profile', function () {
    // Only verified users may enter...
    return "profile ...";
})->middleware('verified');

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
