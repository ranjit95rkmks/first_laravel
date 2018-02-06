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

//
//
Route::get('/','WelcomeController@index');
Route::get('/category','WelcomeController@category');
Route::get('/contact','WelcomeController@contact');
Route::get('/product-details','WelcomeCOntroller@producDetails');


Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('home');

/*Catagory route */
Route::get('/catagory-add', 'CatagoryController@createCatagory');
Route::post('/category-store', 'CatagoryController@storeCatagory');