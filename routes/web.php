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
Route::get('/admin/users/show',             'UserController@users_show')->name('admin-users-show');

Route::get('/admin/users/create',           'UserController@users_create')->name('admin-users-create');
Route::post('/admin/users/create',          'UserController@users_new'); 

Route::get('/admin/users/update/{user}',    'UserController@users_update')->name('admin-users-update');
Route::post('/admin/users/update/{user}',   'UserController@users_save'); 

Route::get('/admin/users/active/{user}',    'UserController@users_active')->name('admin-users-active'); 
// USERS

// ROLES
Route::get('/admin/roles/show',             'RoleController@roles_show')->name('admin-roles-show');

Route::get('/admin/roles/create',           'RoleController@roles_create')->name('admin-roles-create');
Route::post('/admin/roles/create',          'RoleController@roles_new');

Route::get('/admin/roles/update/{role}',    'RoleController@roles_update')->name('admin-roles-update');
Route::post('/admin/roles/update/{role}',   'RoleController@roles_save');
// ROLES

// AREAS
Route::get('/admin/areas/show',             'AreaController@areas_show')->name('admin-areas-show');

Route::get('/admin/areas/create',           'AreaController@areas_create')->name('admin-areas-create');
Route::post('/admin/areas/create',          'AreaController@areas_new');

Route::get('/admin/areas/update/{area}',    'AreaController@areas_update')->name('admin-areas-update');
Route::post('/admin/areas/update/{area}',   'AreaController@areas_save');
// AREAS

// MACHINES
Route::get('/admin/machines/show',             'MachineController@machines_show')->name('admin-machines-show');

Route::get('/admin/machines/create',           'MachineController@machines_create')->name('admin-machines-create');
Route::post('/admin/machines/create',          'MachineController@machines_new');

Route::get('/admin/machines/update/{machine}',    'MachineController@machines_update')->name('admin-machines-update');
Route::post('/admin/machines/update/{machine}',   'MachineController@machines_save');
// MACHINES

// TOOLS
Route::get('/admin/tools/show',             'ToolController@tools_show')->name('admin-tools-show');

Route::get('/admin/tools/create',           'ToolController@tools_create')->name('admin-tools-create');
Route::post('/admin/tools/create',          'ToolController@tools_new');

Route::get('/admin/tools/update/{tool}',    'ToolController@tools_update')->name('admin-tools-update');
Route::post('/admin/tools/update/{tool}',   'ToolController@tools_save');
// TOOLS

// COMAPNIES
Route::get('/admin/companies/show',                 'CompanyController@companies_show')->name('admin-companies-show');

Route::get('/admin/companies/create',               'CompanyController@companies_create')->name('admin-companies-create');
Route::post('/admin/companies/create',              'CompanyController@companies_new'); 

Route::get('/admin/companies/update/{company}',     'CompanyController@companies_update')->name('admin-companies-update');
Route::post('/admin/companies/update/{company}',    'CompanyController@companies_save'); 

Route::get('/admin/companies/active/{company}',     'CompanyController@companies_active')->name('admin-companies-active'); 
// COMAPNIES
// ADMIN ---------------------------------------------------------------------------------------------------------------

// ARTISAN -------------------------------------------------------------------------------------------------------------
Route::get('/artisan/dashboard',            'ArtisanController@dashboard')->name('artisan-dashboard');

// REUQEST
Route::get('/artisan/requests/create',      'RequestController@create')->name('artisan-requests-create');
Route::get('/artisan/requests/show',        'RequestController@show')->name('artisan-requests-show');

Route::post('/artisan/requests/create',      'RequestController@store')->name('artisan-requests-show');

// JOBS
Route::get('/artisan/jobs/show',            'JobController@show')->name('artisan-jobs-show');
Route::get('/artisan/jobs/update/{job}',    'JobController@update')->name('artisan-jobs-update');

// HISTORY
Route::get('/artisan/history/show',         'HistoryController@show')->name('artisan-history-show');
// ARTISAN -------------------------------------------------------------------------------------------------------------

// ERROR 404 -----------------------------------------------------------------------------------------------------------
Route::get('/{any}',    'HomeController@error404')->where('any', '.*')->name('home-error404');
// ERROR 404 -----------------------------------------------------------------------------------------------------------
