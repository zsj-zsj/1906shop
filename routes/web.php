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

Route::get('info', function () {
    phpinfo();
});

Route::prefix('/test')->group(function(){
    Route::get('/redis1','TestController@redis1');
    Route::get('/redis2','TestController@redis2');
    Route::get('/mysql1','TestController@mysql1');
    Route::get('/mysql2','TestController@mysql2');
    Route::get('/mongodb','TestController@mongodb');
    Route::get('/mongodbins','TestController@mongodbins'); 
    Route::get('/mongodbdel','TestController@mongodbdel');
    Route::get('/mongodbupd','TestController@mongodbupd');
    
          
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
