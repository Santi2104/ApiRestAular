@extends('layouts.base')

@section('title', 'Pagina del administrador')
    
@section('head')  

@endsection

@section('subtitulo')
    <h1 class="m-0 text-dark">Crear Carrera</h1>
@endsection

@section('contenido') 
<div class="row">
    <div class="col-md-8">
        <div class="card card-primary">
            <div class="card-header"></div>
            <form role="form" method="POST" action="{{route('career.store')}}">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label>Nombre de la carrera</label>
                    <input type="text" class="form-control" id="name" name="name">
                  </div>
                  <div class="form-group">
                    <label>Codigo de carrera</label>
                    <input type="text" class="form-control" id="code" name="code">
                  </div>
                  <div class="form-group">
                    <label>Codigo de carrera</label>
                    <select name="department_id" id="department_id" class="form-control">
                        <option selected value="">Seleccione un departamento</option>
                        @foreach ($departamentos as $departamento)
                          <option value="{{$departamento->id}}">{{$departamento->name}}</option>
                        @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Descripcion</label>
                    <textarea class="form-control" name="description" id="description" cols="20" rows="5"></textarea>
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