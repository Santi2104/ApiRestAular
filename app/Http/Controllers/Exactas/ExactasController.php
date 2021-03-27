<?php

namespace App\Http\Controllers\Exactas;

use App\Course;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExactasController extends Controller
{
    public function dashboard(){

        return view('layouts.pages.bedel-exactas.dashboard');
    }
    
    public function searchCourse($id){
        $materia = Course::where('career_id', $id)->get(['id', 'title']);
        return response()->json($materia);
    }
}
