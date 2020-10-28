@extends('layouts.base')

@section('title', 'Pagina del administrador')
    
@section('head')  

@endsection

@section('subtitulo')
    <h1 class="m-0 text-dark">Detalle del aula</h1>
@endsection

@section('contenido')
<a href="{{route('classroom.index')}}" class="btn btn-primary mb-2">Volver al listado de aulas</a> 
<div class="row">
    <div class="col-md-6">
        <div class="card card-outline card-primary">
            <!-- /.card-header -->
            <div class="card-body">
              <div class="callout callout-danger">
                <h5>Codigo</h5>
    
                <p>{{$aula->name}}</p>
              </div>
              <div class="callout callout-info">
                <h5>Edificio</h5>
    
                <p>{{$aula->building->display_name}}</p>
              </div>
              <div class="callout callout-warning">
                <h5>Tipo de aula</h5>
    
                <p>{{$aula->classRoomType->name}}</p>
              </div>
              <div class="callout callout-success">
                <h5>Ultima actualizacion</h5>
    
                <p>{{$aula->updated_at}}</p>
              </div>
            </div>
            <!-- /.card-body -->
          </div>
      <!-- /.card -->
    </div>
    <!-- /.col -->

    <div class="col-md-6">
      <div class="card card-outline card-primary">
        <!-- /.card-header -->
        <div class="card-body">
          <div class="callout callout-danger">
            <h5>Capacidad</h5>

            <p>{{$aula->volume}}</p>
          </div>
          <div class="callout callout-info">
            <h5>Equipamiento</h5>

            <p>{{$aula->equipment}}</p>
          </div>
          <div class="callout callout-warning">
            <h5>Estado</h5>

            <p>{{$aula->status}}</p>
          </div>
          <div class="callout callout-success">
            <h5>Llave</h5>

            <p>{{$aula->key}}</p>
          </div>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!-- /.col -->
  </div>
  <h2>Horarios Asignados a esta aula</h2>
  <show-classroom-schedule aula="{{$aula->id}}"></show-classroom-schedule>
@endsection

@section('foot') 
@endsection