<?php
 use App\Product;
 use App\Http\Resources\ProductsCollection;
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

/* APIs */
Route::get('api/categoryproduct','CategoryController@apiCategoryProduct');
Route::get('/api/products','ProductController@apiIndex');
Route::get('/api/categories','CategoryController@apiIndex');
Route::get('/', 'IndexController@index');
<<<<<<< HEAD
=======

>>>>>>> bd9e9e52b27c325ae8c8f177c6445ebeb3a55fc4
Route::get('register','UserController@register');
Route::get('login','UserController@login');

Auth::routes(); //Manejador de rutas de Auth::

Route::get('preguntas-frecuentes', function(){
  return view('principal.preguntas');
});

Route::get('{name}','CategoryController@show');

Route::get('{name}/{id}','PurchaseController@show');
