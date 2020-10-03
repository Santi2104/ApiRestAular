<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::namespace('Api')->group(function () {
    
    Route::get('buildings', 'BuildingController@index');
    Route::get('buildings/{id}', 'BuildingController@show');

    Route::get('classrooms', 'ClassroomController@index');
    Route::get('classrooms/{id}', 'ClassroomController@show');

    Route::get('schedules', 'ScheduleController@index');
    Route::get('schedules/{id}', 'ScheduleController@show');

    Route::get('careers/search', 'CareerController@search')->name('api.careers.search');
    Route::get('careers', 'CareerController@index');
    Route::get('careers/{id}', 'CareerController@show');


    //ruta para la busqueda de horarios por materia
    Route::get('course/search', 'CourseController@search')->name('api.course.search');



    Route::get('horarios', 'AcademicScheduleController@index');
    Route::get('horarios/aulas/{id}', 'AcademicScheduleController@classroomSchedule')->name('api.horarios.aula');
    Route::get('horarios/{id}', 'AcademicScheduleController@show');
;


});
