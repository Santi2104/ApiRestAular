@extends('layouts.base')

@section('title', 'Pagina del administrador')
    
@section('head')  

@endsection

@section('subtitulo')
    <h1 class="m-0 text-dark">Creación de periodo academico</h1>
@endsection

@section('contenido') 
        <div class="row">
            <div class="col-md-8">
                <div class="card card-primary">
                    <div class="card-header"></div>
                    <form role="form" method="POST" action="{{route('period.store')}}">
                        @csrf
                        <div class="card-body">
                          <div class="form-group">
                            <label for="exampleInputEmail1">Nombre corto</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Por ejemplo: Departamento de Exactas">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Nombre completo</label>
                            <input type="text" class="form-control" id="display_name" name="display_name">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Fecha de inicio</label>
                            <input type="date" class="form-control" id="start" name="start">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Fecha de fin</label>
                            <input type="date" class="form-control" id="end" name="end">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Descipcion</label>
                            <textarea name="description" id="description" cols="10" rows="5" class="form-control"></textarea>
                          </div>
                        </div>
                        <div class="card-footer">
                            <a href="{{route('period.index')}}" class="btn btn-primary">Volver</a>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                      </form>
                </div>
            </div>
        </div>
@endsection

@section('foot') 
@endsection