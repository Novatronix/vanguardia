@extends('layouts.app')
@section('content')
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">{{ $alumnos->id_alumno}}</h1>
            <p class="lead">{{$alumnos->nombre}}</p>
            <p class="lead">{{$alumnos->apellidos}}</p>
            <p class="lead">{{$alumnos->fecha_ingreso}}</p>
            <p class="lead">{{$alumnos->genero}}</p>
            <p class="lead">{{$alumnos->telefono}}</p>
            <p class="lead">{{$alumnos->estado}}</p>
        </div>
    </div>

@ednsection