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
    // return $request->user();
    return response()->json(['user' => $request->user()]);
});

Route::group(['prefix' => 'auth', 'namespace' => 'Api'], function () {
    Route::post('login', 'AuthController@login');
    Route::post('signup', 'AuthController@signup');
    Route::get('signup/activate/{token}', 'AuthController@signupActivate');
  
    Route::group(['middleware' => 'auth:api'], function() {
        Route::get('logout', 'AuthController@logout');
        Route::get('user', 'AuthController@user');
        Route::post('user/email', 'AuthController@checkEmail');
        Route::post('user/name/{id}', 'AuthController@setName');
    });

    Route::get('user/resetemail/{token}', 'AuthController@resetEmail');
});

Route::group([    
    'namespace' => 'Auth',    
        
    'prefix' => 'password'
], function () {    
    Route::post('create', 'PasswordResetController@create');
    Route::get('find/{token}', 'PasswordResetController@find');
    Route::post('reset', 'PasswordResetController@reset');
    Route::get('reset/{token}', 'PasswordResetController@succes');
});

Route::namespace('Api')->group(function () {
    //Las rutas comentadas serán eliminadas en la proxima revisión
   // Route::get('buildings', 'BuildingController@index');
   // Route::get('buildings/{id}', 'BuildingController@show');

   // Route::get('classrooms', 'ClassroomController@index');
   // Route::get('classrooms/{id}', 'ClassroomController@show');

   // Route::get('schedules', 'ScheduleController@index');
   // Route::get('schedules/{id}', 'ScheduleController@show');

   // Route::get('careers/search', 'CareerController@search')->name('api.careers.search');
   // Route::get('careers', 'CareerController@index');
   // Route::get('careers/{id}', 'CareerController@show');


    //ruta para la busqueda de horarios por materia
   // Route::get('search/course', 'StudentController@search_course')->name('api.search.course');
   // Route::get('course/schedule/{id}', 'StudentController@course_schedule')->name('api.course.schedule');



   // Route::get('horarios', 'AcademicScheduleController@index');
    //En la proxima revisión, esta ruta se elimina
    Route::get('horarios/aulas/{id}', 'AcademicScheduleController@classroomSchedule')->name('api.horarios.aula');
    //esta ruta tambien se elimina
    Route::get('horarios/{id}', 'AcademicScheduleController@show');

    Route::get('students', 'StudentController@index');//Con esta ruta obtenes los horarios para el calendario (mandas solo el id del usuario)
    Route::post('students', 'StudentController@store');//Con esta ruta cargas los horarios (mandas id de usuario y arreglo de horarios)
    Route::delete('students', 'StudentController@destroy');

    

});

//Rutas api auxiliares (Esto tambien se va)
    Route::group(['prefix' => 'bedel-exactas', 'namespace' => 'Exactas',], function () {
        Route::get('schedule-search/{id}', 'ExactasController@searchCourse');
    });
