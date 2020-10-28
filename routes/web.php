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
    Route::get('/careers/{id}/courses', 'CourseController@coursesCareer')->name('career.course.index');

    //Materias
    Route::get('/courses', 'CourseController@index')->name('course.index');
    Route::get('/courses/create', 'CourseController@create')->name('course.create');
    Route::post('/courses', 'CourseController@store')->name('course.store');
    Route::get('/courses/{id}/edit', 'CourseController@edit')->name('course.edit');
    Route::put('/courses/{id}', 'CourseController@update')->name('course.update');

    //Edificios
    Route::get('/buildings', 'BuildingController@index')->name('building.index');
    Route::get('/buildings/create', 'BuildingController@create')->name('building.create');
    Route::post('/buildings', 'BuildingController@store')->name('building.store');
    Route::get('/buildings/{id}/edit', 'BuildingController@edit')->name('building.edit');
    Route::put('buildings/{id}', 'BuildingController@update')->name('building.update');

    //Aulas
    Route::get('/classrooms', 'ClassroomController@index')->name('classroom.index');
    Route::get('/classrooms/create', 'ClassroomController@create')->name('classroom.create');
    Route::post('/classrooms', 'ClassroomController@store')->name('classroom.store');
    Route::get('/classrooms/{id}', 'ClassroomController@show')->name('classroom.show');
    Route::get('/classrooms/{id}/edit', 'ClassroomController@edit')->name('classroom.edit');
    Route::put('/classrooms/{id}', 'ClassroomController@update')->name(('classroom.update'));

    //Periodos
    Route::get('/periods', 'PeriodController@index')->name('period.index');
    Route::get('/periods/create', 'PeriodController@create')->name('period.create');
    Route::post('/periods', 'PeriodController@store')->name('period.store');
    Route::get('/periods/{id}/edit', 'PeriodController@edit')->name('period.edit');
    Route::put('/periods/{id}', 'PeriodController@update')->name('period.update');

    //Horarios
    Route::get('/schedules', 'ScheduleController@index')->name('schedule.index');
    Route::post('/schedules', 'ScheduleController@store')->name('schedule.store');
   

    //Horarios del depto de exactas
    Route::get('/schedules/exactas', 'ScheduleController@exactas')->name('schedule.exactas.index');

    Route::get('/schedules/{id}', 'ScheduleController@show')->name('schedule.show');

    //Usuarios
    Route::get('/users-admin', 'UserController@index')->name('user.admin.index');
    Route::get('/users-student', 'UserController@index')->name('user.student.index');
    Route::get('/users-professor', 'UserController@index')->name('user.professor.index');
});