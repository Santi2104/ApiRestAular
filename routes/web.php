<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
    Route::get('/', 'AdminController@dashboard')->name('admin.dashboard');

    //Departamentos
    Route::get('/departments', 'DepartmentController@index')->name('department.index');
    Route::get('/departments/create', 'DepartmentController@create')->name('department.create');
    Route::post('/departments', 'DepartmentController@store')->name('department.store');
    Route::get('/departments/{id}/edit', 'DepartmentController@edit')->name('department.edit');
    Route::put('/departments/{id}', 'DepartmentController@update')->name('department.update');
    Route::delete('/departments/{id}', 'DepartmentController@destroy')->name('department.destroy');
});