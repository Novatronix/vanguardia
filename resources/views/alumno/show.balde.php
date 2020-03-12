@extends('layouts.app')
@section('content')
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">{{ $alumno->id_alumno}}</h1>
            <p class="lead">{{$alumno->nombre}}</p>
            <p class="lead">{{$alumno->apellidos}}</p>
            <p class="lead">{{$alumno->fecha_ingreso}}</p>
            <p class="lead">{{$alumno->genero}}</p>
            <p class="lead">{{$alumno->telefono}}</p>
            <p class="lead">{{$alumno->estado}}</p>
        </div>
    </div>

@ednsection