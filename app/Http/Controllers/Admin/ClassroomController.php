<?php

namespace App\Http\Controllers\Admin;

use App\Building;
use App\Classroom;
use App\ClassRoomType;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClassroomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aulas = Classroom::with(['building', 'classRoomType'])->get();
        return view('layouts.pages.admin.classroom.index',compact('aulas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $edificios = Building::all();
        $tipos = ClassRoomType::all();
        return view('layouts.pages.admin.classroom.create',compact('edificios', 'tipos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Classroom::create([
            'building_id' => $request->building_id,
            'class_room_type_id' => $request->class_room_type_id,
            'name' => $request->name,
            'volume' => $request->volume,
            'equipment' => $request->equipment,
        ]);

        return redirect('admin/classrooms')->with('status', 'El aula fue creada de manera satisfactoria');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $aula = Classroom::find($id);
        return view('layouts.pages.admin.classroom.show',compact('aula'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $aula = Classroom::find($id);
        $edificios = Building::all();
        $tipos = ClassRoomType::all();
        return view('layouts.pages.admin.classroom.edit',compact('aula','edificios', 'tipos'));
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
        $aula = Classroom::find($id);

        $aula->building_id = $request->building_id;
        $aula->class_room_type_id = $request->class_room_type_id;
        $aula->name = $request->name;
        $aula->volume = $request->volume;
        $aula->equipment = $request->equipment;
        $aula->save();

        return redirect('admin/classrooms')->with('status', 'El aula fue modificada de manera satisfactoria');

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
