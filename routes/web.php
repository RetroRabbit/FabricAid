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
Route::get('/admin/users/show',             'UserController@show')->name('admin-users-show');

Route::get('/admin/users/create',           'UserController@create')->name('admin-users-create');
Route::post('/admin/users/create',          'UserController@new'); 

Route::get('/admin/users/update/{user}',    'UserController@update')->name('admin-users-update');
Route::post('/admin/users/update/{user}',   'UserController@save'); 

Route::get('/admin/users/active/{user}',    'UserController@active')->name('admin-users-active'); 
// USERS

// ROLES
Route::get('/admin/roles/show',             'RoleController@show')->name('admin-roles-show');

Route::get('/admin/roles/create',           'RoleController@create')->name('admin-roles-create');
Route::post('/admin/roles/create',          'RoleController@new');

Route::get('/admin/roles/update/{role}',    'RoleController@update')->name('admin-roles-update');
Route::post('/admin/roles/update/{role}',   'RoleController@save');
// ROLES

// AREAS
Route::get('/admin/areas/show',             'AreaController@show')->name('admin-areas-show');

Route::get('/admin/areas/create',           'AreaController@create')->name('admin-areas-create');
Route::post('/admin/areas/create',          'AreaController@new');

Route::get('/admin/areas/update/{area}',    'AreaController@update')->name('admin-areas-update');
Route::post('/admin/areas/update/{area}',   'AreaController@save');
// AREAS

// MACHINES
Route::get('/admin/machines/show',              'MachineController@show')->name('admin-machines-show');

Route::get('/admin/machines/create',            'MachineController@create')->name('admin-machines-create');
Route::post('/admin/machines/create',           'MachineController@new');

Route::get('/admin/machines/update/{machine}',  'MachineController@update')->name('admin-machines-update');
Route::post('/admin/machines/update/{machine}', 'MachineController@save');
// MACHINES

// TOOLS
Route::get('/admin/tools/show',             'ToolController@show')->name('admin-tools-show');

Route::get('/admin/tools/create',           'ToolController@create')->name('admin-tools-create');
Route::post('/admin/tools/create',          'ToolController@new');

Route::get('/admin/tools/update/{tool}',    'ToolController@update')->name('admin-tools-update');
Route::post('/admin/tools/update/{tool}',   'ToolController@save');
// TOOLS

// COMPANIES
Route::get('/admin/companies/show',                 'CompanyController@show')->name('admin-companies-show');

Route::get('/admin/companies/create',               'CompanyController@create')->name('admin-companies-create');
Route::post('/admin/companies/create',              'CompanyController@new'); 

Route::get('/admin/companies/update/{company}',     'CompanyController@update')->name('admin-companies-update');
Route::post('/admin/companies/update/{company}',    'CompanyController@save'); 

Route::get('/admin/companies/active/{company}',     'CompanyController@active')->name('admin-companies-active'); 
// COMPANIES
// ADMIN ---------------------------------------------------------------------------------------------------------------

// SUPERVISOR -------------------------------------------------------------------------------------------------------------
Route::get('/supervisor/dashboard',              'SupervisorController@dashboard')->name('supervisor-dashboard');

Route::get('/supervisor/jobs/requests',          'SupervisorController@show_requests')->name('supervisor-requests-show');
Route::get('/supervisor/jobs/requests/{job}',    'SupervisorController@update_requests')->name('supervisor-requests-update');
// SUPERVISOR -------------------------------------------------------------------------------------------------------------

// ARTISAN -------------------------------------------------------------------------------------------------------------
Route::get('/artisan/dashboard',            'ArtisanController@dashboard')->name('artisan-dashboard');

Route::post('/artisan/jobs/api',            'JobController@populate')->name('artisan-jobs-api');

// ACTIVE JOBS
Route::get('/artisan/jobs/active',          'JobController@active')->name('artisan-jobs-active');

Route::get('/artisan/jobs/create',          'JobController@create')->name('artisan-jobs-create');
Route::post('/artisan/jobs/create',         'JobController@store');
// ACTIVE JOBS

// JOB REQUESTS
Route::get('/artisan/jobs/requests',        'JobController@requests')->name('artisan-jobs-requests');
Route::get('/artisan/jobs/update/{job}',    'JobController@update')->name('artisan-jobs-update');
Route::post('/artisan/jobs/update/{job}',   'JobController@save');
// JOB REQUESTS
// ARTISAN -------------------------------------------------------------------------------------------------------------

Route::post('/api/find', 'APIController@find')->name('vms-api-find');

// ERROR 404 -----------------------------------------------------------------------------------------------------------
Route::get('/{any}', 'HomeController@error404')->where('any', '.*')->name('home-error404');
// ERROR 404 -----------------------------------------------------------------------------------------------------------
