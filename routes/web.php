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

// HOME
Route::get('/',         'HomeController@index')->name('home-index');
Route::get('/signin',   'HomeController@signin')->name('home-signin');
Route::get('/signup',   'HomeController@signup')->name('home-signup');
Route::get('/signout',  'HomeController@signout')->name('home-signout');

// ADMIN
Route::get('/admin/companies/show',                 'AdminController@companies_show')->name('admin-companies-show');

Route::get('/admin/companies/create',               'AdminController@companies_create')->name('admin-companies-create');
Route::post('/admin/companies/create',              'AdminController@companies_new'); 

Route::get('/admin/companies/update/{company}',     'AdminController@companies_update')->name('admin-companies-update');
Route::post('/admin/companies/update/{company}',    'AdminController@companies_save'); 

Route::get('/admin/companies/delete/{company}',     'AdminController@companies_delete')->name('admin-companies-delete'); 
// ADMIN
Route::post('/signin',  'HomeController@fetch');
Route::post('/signup',  'HomeController@create');
// HOME

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
Route::post('/admin/roles/create',          'AdminController@roles_create')->name('admin-roles-create');
//ADMIN

// ERROR 404
Route::get('/{any}',    'HomeController@error404')->where('any', '.*')->name('home-error404');
// ERROR 404
