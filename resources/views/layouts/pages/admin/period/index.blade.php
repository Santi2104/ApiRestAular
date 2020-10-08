@extends('layouts.base')

@section('title', 'Admin - Departamentos')
    
@section('head')  

@endsection

@section('subtitulo')
    <h1 class="m-0 text-dark">Periodos academicos</h1>
@endsection
@section('contenido') 
<div class="row">
    <div class="col-md-12">
        <a href="{{route('period.create')}}" class="btn btn-primary mb-2">Crear periodo</a>

        @if (session('status'))
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <p><i class="icon fas fa-check"></i> {{session('status')}}</p>   
        </div>
        @endif

        <div class="card">
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Inicio del periodo</th>
                            <th>Fin del periodo</th>
                            <th>Ultima actualizacion</th>
                            <th>Descripcion</th>
                            <th style="width: 40px">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($periodos as $periodo)
                        <tr>
                            <td>{{$periodo->display_name}}</td>
                            <td>{{$periodo->start->toDateString()}}</td>
                            <td>{{$periodo->end->toDateString()}}</td>
                            <td>{{$periodo->updated_at->toDateString()}}</td>
                            <td>{{$periodo->description}}</td>
                            <td>
                                <a href="{{route('period.edit', $periodo->id)}}" type="button"
                                    class="btn btn-block btn-outline-primary">Editar</a>
                                <form role="form" method="POST" action="#">
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