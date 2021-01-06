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


Route::get('/redirect', 'HomeController@redirectToHome');

Route::get('/', 'HomeController@member');

Route::get('/admin', 'HomeController@admin')->middleware('adminOnly')->name('adminHome');

Route::get('/member/pizza/{id}', 'HomeController@detailPizza');

Route::get('/admin/user', 'HomeController@viewAllUser');

Route::get('/admin/transaction', 'HomeController@viewAllUserTransaction');

Route::get('/edit_pizza/{pizza_id}', 'HomeController@showUpdatePizza');

Route::get('/delete_pizza/{pizza_id}', 'HomeController@showDeletePizza');

Route::get('/add_pizza', 'HomeController@showAddPizza');

Route::post('/pizza/add', 'PizzaController@addPizza');

Route::post('/pizza/edit/{pizza_id}', 'PizzaController@updatePizza');

Route::any('/delete/{pizza_id}', 'PizzaController@deletePizza');


Route::middleware(['memberOnly'])->group(function () {

  Route::post('/cart/add', 'CartController@add');

  Route::get('/cart', 'CartController@index');
  
  Route::patch('/cart/update/{id}', 'CartController@update');
  
  Route::delete('/cart/delete/{id}', 'CartController@delete');

  Route::post('/checkout', 'CheckoutController@store');

  Route::get('/transaction/history/', 'TransactionController@index');

  Route::get('/transaction/detail/{id}', 'TransactionController@detail');

});


Auth::routes();






