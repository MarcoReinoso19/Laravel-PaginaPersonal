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

Route::get('/', function () {
    return view('index');
});

Route::get('/home', function () {
    return view('index');
});

Route::get('/work', function () {
    return view('work.work');
});

Route::get('/biography', function () {
    return view('biography.biography');
});

Route::get('/about', function () {
    return view('about.about');
});

Route::get('/contact', function () {
    return view('contact.contact');
});

/* Crear rutas sin implemnentar Eloquent
Route::resource('/roles', 'RolesController');

Route::resource('/consultas',  'TablasController');*/


Route::get('/dashboard', function () {
  return view('dashboard');
});


Route::get('/tables', function () {
  return view('tables.tables');
});

Route::get('/tables', 'UserController@index');

Route::get('/tableUsers', function () {
  return view('tableUsers');
});

Route::get('/tableUsers', 'UserController@index');


Route::get('/tableRoles', function () {
  return view('tableRoles');
});

Route::get('/tableRoles', 'RoleController@index');

Route::get('/tableModules', function () {
  return view('tableModules');
});

Route::get('/tableModules', 'ModuleController@index');

Route::get('/tableCompanies', function () {
  return view('tableCompanies');
});

Route::get('/tableCompanies', 'CompanyController@index');

Route::get('/tableUsersRoles', function () {
  return view('tableUsersRoles');
});

Route::get('/tableUsersRoles', 'UserRoleController@index');

Route::get('/tableRolesModules', function () {
  return view('tableRolesModules');
});

Route::get('/tableRolesModules', 'RoleModuleController@index');

Route::get('/tableCompaniesUsers', function () {
  return view('tableCompaniesUsers');
});

Route::get('/tableCompaniesUsers', 'CompanyUserController@index');


Route::get('/table', function() {
  return view('table');
});


//Rutas para Tabla de Pruebas
Route::get('/table', 'TableController@create');

Route::post('/table', 'TableController@store');

Route::post('/table/{id}', 'TableController@destroy');

Route::resource('/table', 'TableController');


//Rutas para User
Route::post('/tableUsers/{id}', 'UserController@destroy');
Route::resource('/tableUsers', 'UserController');

//Rutas para Company
Route::post('/tableCompanies/{id}', 'CompanyController@destroy');
Route::resource('/tableCompanies', 'CompanyController');

//Rutas para Module
Route::post('/tableModules/{id}', 'ModuleController@destroy');
Route::resource('/tableModules', 'ModuleController');

//Rutas para Role
Route::post('/tableRoles/{id}', 'RoleController@destroy');
Route::resource('/tableRoles', 'RoleController');

//Rutas para UserRole
Route::post('/tableUsersRoles/{id}', 'UserRoleController@destroy');
Route::resource('/tableUsersRoles', 'UserRoleController');

//Rutas para RoleModule
Route::post('/tableRolesModules/{id}', 'RoleModuleController@destroy');
Route::resource('/tableRolesModules', 'RoleModuleController');

//Rutas para CompanyUser
Route::post('/tableCompaniesUsers/{id}', 'CompanyUserController@destroy');
Route::resource('/tableCompaniesUsers', 'CompanyUserController');



Route::get('/tableUsers/{id}', 'UserController@show')
    ->name('users.show');


Route::resource('/tableAddRoles', 'AddRolesController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/logout', function()
	{
		Auth::logout();
	Session::flush();
		return Redirect::to('/home');
	});
