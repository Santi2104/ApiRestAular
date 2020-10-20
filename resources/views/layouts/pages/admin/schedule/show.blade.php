@extends('layouts.base')

@section('title', 'Pagina del administrador')
    
@section('head')  

@endsection

@section('subtitulo')
    <h1 class="m-0 text-dark">Detalle de la materia</h1>
@endsection

@section('contenido') 
    <div class="row">
        <div class="col-md-12">
            <show-schedule data = "{{$a}}"></show-schedule>
        </div>
    </div>
       
@endsection

@section('foot') 
@endsection