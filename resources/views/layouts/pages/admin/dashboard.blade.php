@extends('layouts.base')

@section('title', 'Pagina del administrador')
    
@section('head')  

@endsection

@section('contenido') 
        <h1>Hola desde el Dashboard del administrador</h1>
        {{--Esto es una demo del buscador basico--}}
        {{--Es para probar, despues sera eliminada--}}
        <form action="{{route('api.course.search')}}">
                @csrf
                <input type="search" name="search" id="search">
                <button type="submit">Enviar</button>
        </form>

        <example-component></example-component>
@endsection

@section('foot') 
@endsection