<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Period;
use Illuminate\Http\Request;

class PeriodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $periodos = Period::all();
        return view('layouts.pages.admin.period.index', compact('periodos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.pages.admin.period.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Period::create([
            'name' => $request->name,
            'display_name' => $request->display_name,
            'start' => $request->start,
            'end' => $request->end,
            'description' => $request->description
        ]);

        return redirect('admin/periods')->with('status', 'El periodo fue creado de manera satisfactoria');

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
        $periodo = Period::find($id);
        return view('layouts.pages.admin.period.edit', compact('periodo'));

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
        $periodo = Period::find($id);

        $periodo->name = $request->name;
        $periodo->display_name = $request->display_name;
        $periodo->start = $request->start;
        $periodo->end = $request->end;
        $periodo->description = $request->description;

        $periodo->save();

        return redirect('admin/periods')->with('status', 'El periodo fue actualizado de manera satisfactoria');

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
