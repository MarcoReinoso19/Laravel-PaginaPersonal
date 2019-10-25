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

/*Route::get('/consultas', 'TablasController@index');*/

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

Route::get('/tableUsersRoles', 'UsersRolesController@index');

Route::get('/tableRolesModules', function () {
  return view('tableRolesModules');
});

Route::get('/tableRolesModules', 'RolesModulesController@index');

Route::get('/tableCompaniesUsers', function () {
  return view('tableCompaniesUsers');
});

Route::get('/tableCompaniesUsers', 'CompaniesUsersController@index');







Route::get('/table', function() {
  return view('table');
});

Route::get('/table', 'TableController@create');

Route::post('/table', 'TableController@store');

Route::post('/table/{id}', 'TableController@destroy');

//Route::get('/table/{id}', 'TableController@edit');

Route::resource('/table', 'TableController');


//Route::match(['get', 'put'], '/table/{id}', 'TableController@update' );
