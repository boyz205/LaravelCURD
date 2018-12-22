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

/**
 * View Thêm
 */
Route::get('/category/create', 'Category@create');
Route::get('/product/create', 'Product@create');

/**
 * View Sửa
 */
Route::get('/category/{id}/edit', 'Category@edit');
Route::get('/product/{id}/edit', 'Product@edit');

/**
 * Lưu trữ dữ liệu khi tạo mới
 */
Route::post('/category', 'Category@store');
Route::post('/product', 'Product@store');

/**
 * Lưu trữ dữ liệu khi update
 */
Route::post('/category/{id}', 'Category@update');
Route::post('/product/{id}', 'Product@update');

/**
 * View xóa
 */
Route::get('/category/{id}/delete', 'Category@delete');
Route::get('/product/{id}/delete', 'Product@delete');

/**
 * Xóa
 */
Route::post('/category/destroy/{id}', 'Category@destroy');
Route::post('/product/destroy/{id}', 'Product@destroy');

//{} biến