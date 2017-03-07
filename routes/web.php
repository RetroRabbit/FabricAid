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

// HOME ----------------------------------------------------------------------------------------------------------------
Route::get('/',         'HomeController@index')->name('home-index');

Route::get('/signin',   'HomeController@signin')->name('home-signin');
Route::post('/signin',  'HomeController@fetch');

Route::get('/signup',   'HomeController@signup')->name('home-signup');
Route::post('/signup',  'HomeController@create');

Route::get('/signout',  'HomeController@signout')->name('home-signout');
// HOME ----------------------------------------------------------------------------------------------------------------

// ADMIN ---------------------------------------------------------------------------------------------------------------
Route::get('/admin/dashboard',              'AdminController@dashboard')->name('admin-dashboard');

// USERS
Route::get('/admin/users/show',             'AdminController@users_show')->name('admin-users-show');

Route::get('/admin/users/create',           'AdminController@users_create')->name('admin-users-create');
Route::post('/admin/users/create',          'AdminController@users_new'); 

Route::get('/admin/users/update/{user}',    'AdminController@users_update')->name('admin-users-update');
Route::post('/admin/users/update/{user}',   'AdminController@users_save'); 

Route::get('/admin/users/active/{user}',    'AdminController@users_active')->name('admin-users-active'); 
// USERS

// ROLES
Route::get('/admin/roles/show',             'AdminController@roles_show')->name('admin-roles-show');

Route::get('/admin/roles/create',           'AdminController@roles_create')->name('admin-roles-create');
Route::post('/admin/roles/create',          'AdminController@roles_new');

Route::get('/admin/roles/update/{role}',    'AdminController@roles_update')->name('admin-roles-update');
Route::post('/admin/roles/update/{role}',   'AdminController@roles_save');
// ROLES

// COMAPNIES
Route::get('/admin/companies/show',                 'AdminController@companies_show')->name('admin-companies-show');

Route::get('/admin/companies/create',               'AdminController@companies_create')->name('admin-companies-create');
Route::post('/admin/companies/create',              'AdminController@companies_new'); 

Route::get('/admin/companies/update/{company}',     'AdminController@companies_update')->name('admin-companies-update');
Route::post('/admin/companies/update/{company}',    'AdminController@companies_save'); 

Route::get('/admin/companies/active/{company}',     'AdminController@companies_active')->name('admin-companies-active'); 
// COMAPNIES
// ADMIN ---------------------------------------------------------------------------------------------------------------

// ARTISAN -------------------------------------------------------------------------------------------------------------
Route::get('/artisan/dashboard',        'ArtisanController@dashboard')->name('artisan-dashboard');
Route::get('/artisan/requests/show',    'ArtisanController@requests')->name('artisan-requests');
Route::get('/artisan/jobs/show',        'ArtisanController@jobs')->name('artisan-jobs');
Route::get('/artisan/history/show',     'ArtisanController@history')->name('artisan-history');
// ARTISAN -------------------------------------------------------------------------------------------------------------

// ERROR 404 -----------------------------------------------------------------------------------------------------------
Route::get('/{any}',    'HomeController@error404')->where('any', '.*')->name('home-error404');
// ERROR 404 -----------------------------------------------------------------------------------------------------------
