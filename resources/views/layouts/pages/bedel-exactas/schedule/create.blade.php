@extends('layouts.base')

@section('title', 'DACEfyN')
    
@section('head')  

@endsection

@section('subtitulo')
    <h1 class="m-0 text-dark">Horarios academicos</h1>
@endsection

@section('contenido') 
    <h1>Crear Horario</h1>

    <div class="row">
        <div class="col-md-8">
          <div class="card card-primary">
            <div class="card-header"></div>
            <form role="form" method="POST" action="{{route('exactas.schedule.store')}}">
                @csrf
                <exactas-schedule-create
                    periodo = "{{$periodos}}"
                    aula = "{{$aulas}}"
                    tipo_clase = "{{$tipoClases}}"
                    carrera = "{{$carreras}}"
                    >
                </exactas-schedule-create>
            <div class="card-footer">
                <a href="{{route('exactas.schedule.index')}}" class="btn btn-primary">Regresar</a>
                <button type="submit" class="btn btn-primary">Crear horario</button>
            </div>
            </form>
           </div>
        </div>
    </div>

@endsection

@section('foot')
@endsection

