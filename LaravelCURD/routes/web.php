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
/**
 * Liệt kê danh sách
 */
Route::get('/', 'Category@index');
Route::get('/product', 'Product@index');
Route::get('/comment','Comment@index');
/*Route::get('/tour', 'Tour@index');*/
/**
 * View Thêm
 */
Route::get('/category/create', 'Category@create');
Route::get('/product/create', 'Product@create');
Route::get('/comment/create', 'Comment@create');
/**
 * View Sửa
 */
Route::get('/category/{id}/edit', 'Category@edit');
Route::get('/product/{id}/edit', 'Product@edit');
Route::get('/comment/{id}/edit','Comment@edit');
/**
 * Lưu trữ dữ liệu khi tạo mới
 */
Route::post('/category', 'Category@store');
Route::post('/product', 'Product@store');
Route::post('/comment', 'Comment@store');
/**
 * Lưu trữ dữ liệu khi update
 */
Route::post('/category/{id}', 'Category@update');
Route::post('/product/{id}', 'Product@update');
Route::post('/comment/{id}', 'Comment@update');
/**
 * View xóa
 */
Route::get('/category/{id}/delete', 'Category@delete');
Route::get('/product/{id}/delete', 'Product@delete');
Route::get('/comment/{id}/delete', 'Comment@delete');
/**
 * Xóa
 */
Route::post('/category/destroy/{id}', 'Category@destroy');
Route::post('/product/destroy/{id}', 'Product@destroy');
Route::post('/comment/destroy/{id}', 'Comment@destroy');
/**
 * shoppycart
 */
Route::post('/productcart/{id}','Product@addtocart');
Route::get('cart/{id}/delete','Product@deleteCart');
Route::post('/editcart/{id}','Product@editCart');
//{} biến