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

Route::get('/', 'SiteController@index');

Route::get('/admins', 'Admin\\CategoryController@index')->name('dashboard');
Route::get('/admins/category/create', 'Admin\\CategoryController@create')
    ->name('admin_create_category');
Route::post('/admins/category/create', 'Admin\\CategoryController@store')
    ->name('admin_category_store');
Route::get('/admins/category/{id}/create', 'Admin\\CategoryController@edit')
    ->name('admin_category_edit');
Route::put('/admins/category/{id}/update', 'Admin\\CategoryController@update')
    ->name('admin_category_update');
Route::delete('/admins/category/{id}/update', 'Admin\\CategoryController@destroy')
    ->name('admin_category_destroy');

Route::get('/admins/product/', 'Admin\\ProductController@index')->name('products');
Route::get('/admins/product/create', 'Admin\\ProductController@create')
    ->name('admin_create_product');
Route::post('/admins/product/create', 'Admin\\ProductController@store')
    ->name('admin_product_store');
Route::get('/admins/product/{id}/create', 'Admin\\ProductController@edit')
    ->name('admin_product_edit');
Route::put('/admins/product/{id}/update', 'Admin\\ProductController@update')
    ->name('admin_product_update');
Route::delete('/admins/product/{id}/update', 'Admin\\ProductController@destroy')
    ->name('admin_product_destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
