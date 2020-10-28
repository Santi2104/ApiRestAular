@extends('layouts.base')

@section('title', 'Pagina del administrador')
    
@section('head')  

@endsection

@section('subtitulo')
    <h1 class="m-0 text-dark">Detalle de los usuarios</h1>
@endsection

@section('contenido') 
        <admin-table-component data="{{$usuarios}}"></admin-table-component>
@endsection

@section('foot') 
@endsection