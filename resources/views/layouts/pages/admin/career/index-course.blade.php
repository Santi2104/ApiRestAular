@extends('layouts.base')

@section('title', 'Pagina del administrador')
    
@section('head')  

@endsection

@section('subtitulo')
    <h1 class="m-0 text-dark">Listado de Materias</h1>
@endsection

@section('contenido')

    @if (session('status'))
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <p><i class="icon fas fa-check"></i> {{session('status')}}</p>   
    </div>
    @endif

    <a href="{{route('career.index')}}" class="btn btn-primary mb-2">Volver a las carreras</a>
    <course-component data = "{{$materias}}" 
                      ruta="{{env('APP_URL')}}">
    </course-component>
@endsection

@section('foot') 
@endsection