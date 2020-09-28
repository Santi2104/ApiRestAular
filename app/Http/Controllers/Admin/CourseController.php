<?php

namespace App\Http\Controllers\Admin;

use App\Career;
use App\Course;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materias = Course::withTrashed()->with('career')->get();

        return view('layouts.pages.admin.course.index', compact('materias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $carreras = Career::all();
        return view('layouts.pages.admin.course.create', compact('carreras'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $carreraID = Career::where('code', $request->code)->pluck('id');

        Course::create([
            'career_id' => $carreraID[0],
            'code' => $request->code . $request->number,
            'title' => $request->title,
            'period' => $request->period,
            'description' => $request->description,
            'year' => $request->year
        ]);

        return redirect('admin/courses')->with('status', 'La materia fue creada de manera satisfactoria');
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
        $materia = Course::find($id);
        $carreras = Career::all();
        return view('layouts.pages.admin.course.edit', compact('materia', 'carreras'));
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
        $carreraID = Career::where('code', $request->code)->pluck('id');
        $materia = Course::find($id);

        $materia->career_id = $carreraID[0];
        $materia->code = $request->code . $request->number;
        $materia->title = $request->title;
        $materia->description = $request->descrption;
        $materia->period = $request->period;
        $materia->year = $request->year;

        $materia->save();

        return redirect('admin/courses')->with('status', 'La materia fue actualizada de manera satisfactoria');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
