<?php

namespace App\Http\Controllers\Admin;

use App\Building;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BuildingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $edificios = Building::all();
        return view('layouts.pages.admin.building.index', compact('edificios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.pages.admin.building.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Building::create([
            'name' => $request->name,
            'display_name' => $request->display_name,
            'description' => $request->description
        ]);

        return redirect('admin/buildings')->with('status', 'El edificio fue creado de manera satisfactoria');
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
        $edificio = Building::find($id);
        return view('layouts.pages.admin.building.edit', compact('edificio'));
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
        $edificio = Building::find($id);
        $edificio->name = $request->name;
        $edificio->display_name = $request->display_name;
        $edificio->description = $request->description;
        $edificio->save();

        return redirect('admin/buildings')->with('status', 'El edificio fue editado de manera satisfactoria');
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
