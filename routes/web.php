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

Route::get('/consultas', 'TablasController@index');
