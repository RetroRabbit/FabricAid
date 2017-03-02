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
Route::get('/admin/companies/show',                 'AdminController@companies_show')->name('admin-companies-show');

Route::get('/admin/companies/create',               'AdminController@companies_create')->name('admin-companies-create');
Route::post('/admin/companies/create',              'AdminController@companies_new'); 

Route::get('/admin/companies/update/{company}',     'AdminController@companies_update')->name('admin-companies-update');
Route::post('/admin/companies/update/{company}',    'AdminController@companies_save'); 

Route::get('/admin/companies/delete/{company}',     'AdminController@companies_delete')->name('admin-companies-delete'); 
// ADMIN