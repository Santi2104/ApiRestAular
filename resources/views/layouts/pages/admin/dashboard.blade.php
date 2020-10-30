@extends('layouts.base')

@section('title', 'Pagina del administrador')
    
@section('head')  

@endsection

@section('subtitulo')
        <h1>Bienvenido de nuevo {{Auth()->user()->name}}</h1>
@endsection

@section('contenido') 
        
        {{--Esto es una demo del buscador basico--}}
        {{--Es para probar, despues sera eliminada--}}
        <form action="{{route('api.course.search')}}">
                @csrf
                <input type="search" name="search" id="search">
                <button type="submit">Enviar</button>
        </form>

       
@endsection

@section('foot') 
@endsection