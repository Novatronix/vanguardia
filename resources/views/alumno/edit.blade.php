@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <h3>Editar Alumno: {{$alumnos->id_alumno}}</h3>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
 
            <form action="{{route('alumno.update', $alumnos->id_alumno)}}" method="POST">

            @method('PATCH')
            @csrf
                <div class="form-group">
                    <label for="id_alumno">Numero de cuenta</label>

                    <input type="text" class="form-control" name="name" value="{{ $alumnos->id_alumno }}" placeholder="Ingrese su nombre">

                </div>

                <div class="form-group">
                    <label for="nombre">Nombre</label>

                    <input type="text" class="form-control" name="nombre" value="{{ $alumnos->nombre }}" placeholder="Ingrese su nombre">

                </div>

                <div class="form-group">
                    <label for="apellidos">Apellido</label>
                    <input type="text" class="form-control" name="apellidos" value="{{ $alumnos->apellidos }}" placeholder="Ingrese su nombre">

                </div>

                <div class="form-group">
                    <label for="fecha_ingreso">Fecha de Ingreso</label>

                    <input type="text" class="form-control" name="fecha_ingreso" value="{{ $alumnos->fecha_ingreso }}" placeholder="Ingrese su nombre">

                </div>

                <div class="form-group">
                    <label for="genero">Genero</label>
                    <input type="text" class="form-control" name="genero" value="{{ $alumnos->genero }}" placeholder="Ingrese su nombre">
                </div>

                <div class="form-group">
                    <label for="telefono">Telefono</label>

                    <input type="text" class="form-control" name="telefono" value="{{ $alumnos->telefono }}" placeholder="Ingrese su nombre">

                <div class="form-group">
                    <label for="estado">Estado</label>

                    <input type="text" class="form-control" name="estado" value="{{ $alumnos->estado }}" placeholder="Ingrese su nombre">

                </div>
               
                <button type="submit" class="btn btn-primary">Guardar cambios</button>
                <button type="reset" class="btn btn-danger">Cancelar</button>
            </form>
        </div>
    </div>

</div>

@endsection