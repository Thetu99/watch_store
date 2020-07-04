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
});

Route::get('/', 'HomeController@show');
Route::view('about', 'theme/about');
Route::view('brand', 'theme/brand');
Route::get('cart/add/{id}', 'CartController@add');
Route::get('product/{id}', 'ProductController@show');