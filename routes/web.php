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

Route::get('prueba', function () {
    return view('prueba');
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

    //Carreras
    Route::get('/careers', 'CareerController@index')->name('career.index');
    Route::get('/careers/create', 'CareerController@create')->name('career.create');
    Route::get('/careers/{id}', 'CareerController@show')->name('career.show');
    Route::post('/careers', 'CareerController@store')->name('career.store');
    Route::get('/careers/{id}/edit', 'CareerController@edit')->name('career.edit');
    Route::put('/careers/{id}', 'CareerController@update')->name('career.update');

    //Materias
    Route::get('/courses', 'CourseController@index')->name('course.index');
    Route::get('/courses/create', 'CourseController@create')->name('course.create');
    Route::post('/courses', 'CourseController@store')->name('course.store');
    Route::get('/courses/{id}/edit', 'CourseController@edit')->name('course.edit');
    Route::put('/courses/{id}', 'CourseController@update')->name('course.update');
});