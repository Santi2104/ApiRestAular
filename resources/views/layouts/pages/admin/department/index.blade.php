@extends('layouts.base')

@section('title', 'Admin - Departamentos')
    
@section('head')  

@endsection

@section('subtitulo')
    <h1 class="m-0 text-dark">Listado de Unidades academicas</h1>
@endsection
@section('contenido') 
<div class="row">
    <div class="col-md-8">
        <a href="{{route('department.create')}}" class="btn btn-primary mb-2">Crear unidad academica</a>
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Nombre</th>
                            <th>Fecha de creación</th>
                            <th style="width: 40px">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($deptos as $depto)
                        <tr>
                            <td>{{$depto->id}}</td>
                            <td>{{$depto->display_name}}</td>
                            <td>{{$depto->created_at}}</td>
                            <td>
                                <a href="{{route('department.edit', $depto->id)}}" type="button"
                                    class="btn btn-block btn-outline-primary">Editar</a>
                                <form role="form" method="POST" action="{{route('department.destroy', $depto->id)}}">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-block btn-outline-danger mt-2">Eliminar</button>
                                </form>
                            </td>
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