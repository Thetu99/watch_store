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

  Route::get('admin/order/detail/{id}', 'DashboardController@detail')->name('order.detail');
  Route::get('admin/order/delete/{id}', 'DashboardController@delete')->name('order.delete');

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
  Route::get('admin/product/edit/{id}', 'AdminProductController@edit')->name('edit_product');
  Route::post('admin/product/update/{id}', 'AdminProductController@update')->name('update_product');
  Route::get('admin/product/delete/{id}', 'AdminProductController@delete')->name('delete_product');

  Route::get('admin/brand/list', 'BrandController@list');
  Route::get('admin/brand/add', 'BrandController@add');
  Route::post('admin/brand/store', 'BrandController@store');
  Route::get('admin/brand/edit/{id}', 'BrandController@edit')->name('brand.edit');
  Route::post('admin/brand/update/{id}', 'BrandController@update')->name('brand.update');
  Route::get('admin/brand/delete/{id}', 'BrandController@delete')->name('brand.delete');

  Route::get('admin/banner/list', 'BannerController@list');
  Route::get('admin/banner/add', 'BannerController@add');
  Route::post('admin/banner/store', 'BannerController@store');
  Route::get('admin/banner/edit/{id}', 'BannerController@edit')->name('banner.edit');
  Route::post('admin/banner/update/{id}', 'BannerController@update')->name('banner.update');
  Route::get('admin/banner/delete/{id}', 'BannerController@delete')->name('banner.delete');
});

Route::get('/', 'HomeController@show');
Route::view('about', 'theme/about');
Route::view('contact', 'theme/contact');

Route::get('search', 'SearchController@search');
Route::get('filter/{id}', 'SearchController@filter')->name('filter');

Route::get('brand/{name}', 'BrandController@show')->name('brand');

Route::get('cart', 'CartController@show');
Route::get('cart/add/{id}', 'CartController@add')->name('cart.add');
Route::get('cart/remove/{rowId}', 'CartController@remove')->name('cart.remove');
Route::post('cart/update', 'CartController@update');

Route::get('product/{name}', 'ProductController@show')->name('product.show');

Route::get('checkout', 'CheckOutController@show');
Route::post('checkout/order', 'CheckOutController@order');
Route::view('checkout/success', 'theme/success');
