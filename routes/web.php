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


// ADMIN
Route::get('/admin/users/show', 'AdminController@users_show')->name('admin-users-show');

Route::get('/admin/users/create', 'AdminController@users_create')->name('admin-users-create');
Route::post('/admin/users/create', 'AdminController@users_new');

Route::get('/admin/users/update/{user}', 'AdminController@users_update')->name('admin-users-update');
Route::get('/admin/users/update/{user}', 'AdminController@users_save');

Route::get('/admin/users/delete/{user}', 'AdminController@users_delete')->name('admin-users-delete');
// ADMIN