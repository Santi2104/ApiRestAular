@extends('layouts.base')

@section('title', 'Pagina del administrador')
    
@section('head')  

@endsection

@section('subtitulo')
    <h1 class="m-0 text-dark">Detalle de los horarios</h1>
@endsection

@section('contenido') 
<div class="row">
    <div class="col-md-8">
        <div class="card card-primary">
            <div class="card-header"></div>
            <form role="form" method="POST" action="{{route('schedule.store')}}">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Periodo</label>
                    <select name="period_id" id="period_id" class="form-control">
                        @foreach ($periodos as $periodo)
                            <option value="{{$periodo->id}}">{{$periodo->display_name}}</option>
                        @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Dia</label>
                    <select name="day" id="day" class="form-control">
                      <option value="0">Lunes</option>
                      <option value="1">Martes</option>
                      <option value="2">Miercoles</option>
                      <option value="3">Jueves</option>
                      <option value="4">Viernes</option>
                      <option value="5">Sabado</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Aula</label>
                    <select name="classroom_id" id="classroom_id" class="form-control">

                     @foreach ($aulas as $aula)
                        <option value="{{$aula->id}}">{{$aula->name}}</option>
                     @endforeach

                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Materia</label>
                    <select name="course_id" id="course_id" class="form-control">

                     @foreach ($materias as $materia)
                        <option value="{{$materia->id}}">{{$materia->title}}</option>
                     @endforeach

                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tipo de clase</label>
                    <select name="class_type_id" id="class_type_id" class="form-control">

                     @foreach ($tipoClases as $tipoClase)
                        <option value="{{$tipoClase->id}}">{{$tipoClase->name}}</option>
                     @endforeach

                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Color</label>
                    <input type="color" class="form-control" id="color" name="color">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">hora</label>
                    <input type="time" class="form-control" id="start1" name="start1">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">hora</label>
                    <input type="time" class="form-control" id="end1" name="end1">
                  </div>
                </div>
                <div class="card-footer">
                    <a href="{{route('period.index')}}" class="btn btn-primary">Volver</a>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
        </div>
    </div>
</div>
@endsection

@section('foot') 
@endsection