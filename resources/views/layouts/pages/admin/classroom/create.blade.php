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
            <form role="form" method="POST" action="{{route('classroom.store')}}">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label>Nombre - codigo del aula</label>
                    <input type="text" class="form-control" id="name" name="name">
                  </div>
                  <div class="form-group">
                    <label>Edificio</label>
                    <select name="building_id" id="building_id" class="form-control">
                        <option selected value="">Seleccione un edificio</option>
                        @foreach ($edificios as $edificio)
                            <option value="{{$edificio->id}}">{{$edificio->display_name}}</option>
                        @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Tipo de espacio</label>
                    <select name="class_room_type_id" id="class_room_type_id" class="form-control">
                        <option selected value="">Seleccione una opcion</option>
                        @foreach ($tipos as $tipo)
                            <option value="{{$tipo->id}}">{{$tipo->name}}</option>
                        @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Capacidad</label>
                    <input type="text" class="form-control" id="volume" name="volume">
                  </div>
                  <div class="form-group">
                    <label>Equipamiento</label>
                    <textarea class="form-control" name="equipment" id="equipment" cols="20" rows="5"></textarea>
                  </div>
                </div>
                <div class="card-footer">
                    <a href="{{route('classroom.index')}}" class="btn btn-primary">Volver</a>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
        </div>
    </div>
</div>
@endsection

@section('foot') 
@endsection