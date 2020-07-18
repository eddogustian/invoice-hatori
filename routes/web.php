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

Route::group(['prefix' => 'product'], function() {
    Route::get('/', 'ProductController@index');
    Route::get('/new', 'ProductController@create');
    Route::post('/', 'ProductController@save');
    Route::get('/{id}', 'ProductController@edit');
    Route::put('/{id}', 'ProductController@update');
    Route::delete('/{id}', 'ProductController@destroy');
});
// Penjelasan: Agar lebih rapi, kita masukkan kedalam group sehingga apapun routing yang berada dalam group tersebut akan memiliki prefix atau awalan /product
Route::group(['prefix' => 'customer'], function() {
    Route::get('/', 'CustomerController@index');
    Route::get('/new', 'CustomerController@create');
    Route::post('/', 'CustomerController@save');
    Route::get('/{id}', 'CustomerController@edit');
    Route::put('/{id}', 'CustomerController@update');
    Route::delete('/{id}', 'CustomerController@destroy');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
