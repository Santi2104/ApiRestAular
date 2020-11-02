<?php

namespace App\Http\Controllers\Exactas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExactasController extends Controller
{
    public function dashboard(){

        return view('layouts.pages.bedel-exactas.dashboard');
    } 
}
