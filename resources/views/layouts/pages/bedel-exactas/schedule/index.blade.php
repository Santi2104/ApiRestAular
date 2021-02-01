@extends('layouts.base')

@section('title', 'DACEfyN')
    
@section('head')  

@endsection

@section('subtitulo')
    <h1 class="m-0 text-dark">Horarios academicos</h1>
@endsection

@section('contenido') 
        <a href="{{route('exactas.schedule.create')}}" class="btn btn-primary mb-2">Crear horario academico</a>
        <a href="#" class="btn btn-primary mb-2">Crear horaria para clase especial</a>
        <exactas-schedule-index
            data = "{{$horarios}}"
            ruta = "{{url()->current()}}"
        >
        </exactas-schedule-index>
@endsection

@section('foot') 
@endsection