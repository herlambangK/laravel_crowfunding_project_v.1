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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/route-1', function(){
    return 'Hallo, masuk ke route 1';
})->middleware(['auth', 'email_verified']);


Route::get('/route-2', function(){
    return 'Hallo Admin';
})->middleware(['auth', 'email_verified','admin']);

Route::get('/{any?}', function(){
    return view('app');
})->where('any','.*');