@extends('layouts.base')

@section('title', 'Pagina del administrador')
    
@section('head')  

@endsection

@section('subtitulo')
    <h1 class="m-0 text-dark">Creación de unidad academica</h1>
@endsection

@section('contenido') 
        <div class="row">
            <div class="col-md-8">
                <div class="card card-primary">
                    <div class="card-header"></div>
                    <form role="form" method="POST" action="{{route('department.store')}}">
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
                        </div>
                        <div class="card-footer">
                          <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                      </form>
                </div>
            </div>
        </div>
@endsection

@section('foot') 
@endsection