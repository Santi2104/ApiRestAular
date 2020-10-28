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
        <example-component data="{{$edificios}}"></example-component>
    </div>
</div>
        
@endsection

@section('foot') 
@endsection