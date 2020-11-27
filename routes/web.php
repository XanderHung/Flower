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
    return view('layouts/app');
});
Route::get('/addcat', 'AdminController@addcategory');
Route::post('/addcat', 'AdminController@store')->name('addcategory');
Route::get('/delcat/{id}', 'AdminController@destroy');
Route::get('/editcat/{id}','AdminController@edit')->name('editcategory');
Route::get('/mancat','AdminController@managecat');
Route::get('/viewcat','AdminController@viewcategory');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
