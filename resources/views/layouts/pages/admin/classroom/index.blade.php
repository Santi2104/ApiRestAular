@extends('layouts.base')

@section('title', 'Pagina del administrador')
    
@section('head')  

@endsection

@section('subtitulo')
    <h1 class="m-0 text-dark">Listado aulas</h1>
@endsection

@section('contenido')
    <a href="{{route('classroom.create')}}" class="btn btn-primary mb-2">Crear aula</a>
    
    @if (session('status'))
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <p><i class="icon fas fa-check"></i> {{session('status')}}</p>   
    </div>
    @endif
    
    <classroom-component data="{{$aulas}}"
                         ruta="{{env('APP_URL')}}">
    </classroom-component>
@endsection

@section('foot') 
@endsection