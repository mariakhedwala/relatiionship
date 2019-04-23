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
    return view('welcome');
});

Route::get('roles', 'RoleController@showAll')->name('roles');
Route::get('role/create', 'RoleController@create')->name('role.create');
Route::get('/role/{role}', 'RoleController@show')->middleware('CheckRole');
Route::get('user/role/{role}', 'RoleController@removeUser')->name('user.role.delete');

// Route::get('/admin', 'AdminController@index');

// Route::get('/superadmin', 'SuperAdminController@index');