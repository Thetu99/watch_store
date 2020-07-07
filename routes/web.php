<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

/* Route::get('/', function () {
  return view('auth.login');
}); */

Auth::routes();
Route::get('home', 'HomeController@index')->name('home');

Route::middleware('auth')->group(function () {
  Route::get('dashboard', 'DashboardController@show');
  Route::get('admin', 'DashboardController@show');

  Route::get('admin/user/list', 'AdminUserController@list');
  Route::get('admin/user/add', 'AdminUserController@add');
  Route::post('admin/user/store', 'AdminUserController@store');
  Route::get('admin/user/delete/{id}', 'AdminUserController@delete')->name('delete_user');
  Route::get('admin/user/edit/{id}', 'AdminUserController@edit')->name('user.edit');
  Route::post('admin/user/update/{id}', 'AdminUserController@update')->name('user.update');
  Route::get('admin/user/action', 'AdminUserController@action');

  Route::get('admin/product/list', 'AdminProductController@list');
  Route::get('admin/product/action', 'AdminProductController@action');
  Route::get('admin/product/add', 'AdminProductController@add');
  Route::post('admin/product/store', 'AdminProductController@store');
  Route::get('admin/product/delete/{id}', 'AdminProductController@delete')->name('delete_product');
});

Route::get('/', 'HomeController@show');
Route::view('about', 'theme/about');
Route::get('brand/{name}', 'BrandController@show');
Route::get('cart', 'CartController@show');
Route::get('cart/add/{id}', 'CartController@add');
Route::get('product/{name}', 'ProductController@show');