@extends('layouts.base')

@section('title', 'Pagina del administrador')
    
@section('head')  

@endsection

@section('subtitulo')
        <h1>Bienvenido de nuevo {{Auth()->user()->name}}</h1>
@endsection

@section('contenido') 
        
        <h1>Contenido</h1>

       
@endsection

@section('foot') 
@endsection