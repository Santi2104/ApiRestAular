@extends('layouts.base')

@section('title', 'Pagina del administrador')
    
@section('head')  

@endsection

@section('subtitulo')
    <h1 class="m-0 text-dark">Crear Materia</h1>
@endsection

@section('contenido') 
<div class="row">
    <div class="col-md-8">
        <div class="card card-primary">
            <div class="card-header"></div>
            <form role="form" method="POST" action="{{route('course.store')}}">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label>Nombre de la materia</label>
                    <input type="text" class="form-control" id="title" name="title">
                  </div>
                    <select-career data="{{$carreras}}"></select-career>
                  <div class="form-group">
                    <label>Descripcion</label>
                    <textarea class="form-control" name="description" id="description" cols="20" rows="5"></textarea>
                  </div>
                  <div class="form-group">
                    <label>Periodo</label>
                    <input type="text" class="form-control" id="period" name="period">
                  </div>
                  <div class="form-group">
                    <label>Año</label>
                    <input type="text" class="form-control" id="year" name="year">
                  </div>
                </div>
                <div class="card-footer">
                    <a href="{{route('career.index')}}" class="btn btn-primary">Volver</a>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
        </div>
    </div>
</div>
@endsection

@section('foot') 
@endsection