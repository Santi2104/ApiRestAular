<?php

namespace App\Http\Controllers\Api;

use App\AcademicSchedule;
use App\Course;
use App\Http\Controllers\Controller;
use App\Http\Resources\AcademicScheduleResource;
use App\Http\Resources\Student\StudentAcademicSchedules;
use App\Student;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $alumno = Student::find($request->input('usuario_id'));
        $horarios = AcademicScheduleResource::collection($alumno->studentSchedules);
        return $horarios;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $alumno = Student::find($request->input('usuario_id'));
        $horario = $request->input('horario_id');

        $alumno->studentSchedules()->attach($horario);

        return $alumno;

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $alumno = Student::find($request->input('usuario_id'));
        $horario = $request->input('horario_id');

        $alumno->studentSchedules()->detach($horario);

        return $alumno;
    }

    public function search_course(Request $request)
    {
        $busqueda = $request->input('search');
        $materias = Course::where('title', 'like', '%'.$busqueda.'%')->get();

        return response()->json(['data' => $materias]);
    }

    public function course_schedule($id)
    {
        $horario = AcademicSchedule::where('course_id', $id)->get();
        
        return response()->json(['data' => StudentAcademicSchedules::collection($horario)]);
    }
}
