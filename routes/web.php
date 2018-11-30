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

Route::get('','HomeController@index');

Route::get('home','HomeController@index');

Route::get('register','UserController@register');

Route::get('login','UserController@login');

Route::get('preguntas-frecuentes', function(){
  return view('principal.preguntas');
});

Route::get('{name}','CategoryController@show');

Route::get('{name}/{id}','PurchaseController@show');
