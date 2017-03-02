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



// USER
Route::get('/artisan/dashboard',    'ArtisanController@dashboard')->name('artisan-dashboard');
Route::get('/artisan/requests',     'ArtisanController@requests')->name('artisan-requests');
Route::get('/artisan/jobs',         'ArtisanController@jobs')->name('artisan-jobs');
Route::get('/artisan/history',      'ArtisanController@history')->name('artisan-history');
// USER

//ADMIN
Route::get('/admin/dashboard',              'AdminController@dashboard')->name('admin-dashboard');

Route::get('/admin/roles/show',             'AdminController@roles_show')->name('admin-roles-show');
Route::post('/admin/roles/update/{role}',   'AdminController@roles_update')->name('admin-roles-update');
Route::get('/admin/roles/delete/{role}',    'AdminController@roles_delete')->name('admin-roles-delete');
Route::post('/admin/roles/create',          'AdminController@roles_create')->name('admin-roles-create');
//ADMIN

// ERROR 404
Route::get('/{any}',    'HomeController@error404')->where('any', '.*')->name('home-error404');
// ERROR 404