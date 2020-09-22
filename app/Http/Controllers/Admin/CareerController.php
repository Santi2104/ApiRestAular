<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Career;
use App\Department;

class CareerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carreras = Career::withTrashed()->with('department')->get();
        return view('layouts.pages.admin.career.index', compact('carreras'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departamentos = Department::all();
        return view('layouts.pages.admin.career.create', compact('departamentos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Career::create([
            'name' => $request->name,
            'code' => $request->code,
            'description' => $request->description,
            'department_id' => $request->department_id
        ]);

        return redirect('admin/careers')->with('status', 'La carrera fue creada de manera satisfactoria');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $carrera = Career::findOrFail($id);
        return $carrera;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $carrera = Career::findOrFail($id);
        $departamentos = Department::all();
        return view('layouts.pages.admin.career.edit', compact('carrera','departamentos'));

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
        $carrera = Career::find($id);

        $carrera->department_id = $request->department_id;
        $carrera->name = $request->name;
        $carrera->code = $request->code;
        $carrera->description = $request->description;

        $carrera->save();

        return redirect('admin/careers')->with('status', 'La carrera fue editada de manera satisfactoria');
        
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
