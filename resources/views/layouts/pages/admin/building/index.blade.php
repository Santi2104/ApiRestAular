@extends('layouts.base')

@section('title', 'Pagina del administrador')
    
@section('head')  

@endsection

@section('subtitulo')
    <h1 class="m-0 text-dark">Listado de espacios aulicos</h1>
@endsection

@section('contenido') 
<div class="row">
    <div class="col-md-12">
        @if (session('status'))
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <p><i class="icon fas fa-check"></i> {{session('status')}}</p>   
        </div>
        @endif
        <a href="{{route('building.create')}}" class="btn btn-primary mb-2">Crear espacio aulico</a>
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Nombre</th>
                            <th>Fecha de creación</th>
                            <th>Fecha de creación</th>
                            <th style="width: 40px">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($edificios as $edificio)
                        <tr>
                            <td>{{$edificio->id}}</td>
                            <td>{{$edificio->display_name}}</td>
                            <td>{{$edificio->description}}</td>
                            <td>{{$edificio->created_at}}</td>
                            <td><a href="{{route('building.edit', $edificio->id)}}" type="button"
                                class="btn btn-block btn-outline-primary">Editar</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
        
@endsection

@section('foot') 
@endsection