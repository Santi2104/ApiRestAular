@extends('layouts.base')

@section('title', 'Pagina del administrador')
    
@section('head')  

@endsection

@section('subtitulo')
    <h1 class="m-0 text-dark">Horarios de DACEFyN</h1>
@endsection

@section('contenido') 

   
        

    <last-schedule datos = "{{$datos}}"></last-schedule>
    {{url()->current()}}

<div class="row">
    <div class="col-md-12">
        <a href="#" class="btn btn-primary mb-2">Crear algo</a>
        <schedule-table data = "{{$horarios}}"
                        ruta = "{{env('APP_URL')}}"
        ></schedule-table>
    </div>
</div>

@endsection

@section('foot') 
@endsection