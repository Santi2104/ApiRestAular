@extends('layouts.base')

@section('title', 'Pagina del administrador')
    
@section('head')  

@endsection

@section('subtitulo')
    <h1 class="m-0 text-dark">Editar carrera</h1>
@endsection

@section('contenido') 
<div class="row">
    <div class="col-md-8">
        <div class="card card-primary">
            <div class="card-header"></div>
            <form role="form" method="POST" action="{{route('career.update', $carrera->id)}}">
                @csrf
                @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label>Nombre de la carrera</label>
                  <input type="text" class="form-control" id="name" name="name" value="{{$carrera->name}}">
                  </div>
                  <div class="form-group">
                    <label>Codigo de carrera</label>
                  <input type="text" class="form-control" id="code" name="code" value="{{$carrera->code}}">
                  </div>
                  <div class="form-group">
                    <label>Codigo de carrera</label>
                    <select name="department_id" id="department_id" class="form-control">
                        <option selected value="">{{$carrera->department->name}}</option>
                        @foreach ($departamentos as $departamento)
                          <option value="{{$departamento->id}}">{{$departamento->name}}</option>
                        @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Descripcion</label>
                    <textarea class="form-control" name="description" id="description" cols="20" rows="5">{{$carrera->description}}</textarea>
                  </div>
                </div>
                <div class="card-footer">
                    <a href="{{route('career.index')}}" class="btn btn-primary">Volver</a>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
              </form>
        </div>
    </div>
</div>
@endsection

@section('foot') 
@endsection