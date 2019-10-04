<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These`    
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','HomeController@index')->name('welcome');

Route::post("selectTownship","HomeController@selectTownship")->name("selectTownship");

Route::resource('abouts','AboutController');
Route::resource('customers','CustomerController');
Route::resource('banks','BankController');
Route::resource('stocks','StockController');
Route::resource('trainings','TrainingController');

Route::middleware(["auth"])->group(function(){    
    Route::resource('accounts','AccountController');
    Route::resource('contact','ContactController');
    Route::resource('shops','ShopController');
});

Auth::routes(['verify' => true]);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
