@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <form action="/alumno" method="POST">
            @csrf
                <div class="form-group">
                    <label for="id_alumno">Numero de Cuenta</label>
                    <input type="text" class="form-control" name="id_alumno" placeholder="Ingrese su numero de Cuenta">
                </div>

                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" name="nombre" placeholder="Ingrese su primer nombre">
                </div>

                <div class="form-group">
                    <label for="apellidos">Apellidos</label>
                    <input type="text" class="form-control" name="apellidos" placeholder="Ingrese sus apellidos">
                </div>

                <div class="form-group">
                    <label for="fecha_ingreso">Fecha Ingreso</label>
                    <input type="text" class="form-control" name="fecha_ingreso" placeholder="(YYYY-MM-DD)">
                </div>

                <div class="form-group">
                    <label for="genero">Genero</label>
                    <input type="text" class="form-control" name="genero" placeholder="(Masculino / Femenino)">
                </div>

                <div class="form-group">
                    <label for="telefono">Telefono</label>
                    <input type="text" class="form-control" name="telefono" placeholder="Ingrese su telefono">
                </div>

                <div class="form-group">
                    <label for="estado">Estado</label>
                    <input type="text" class="form-control" name="estado" placeholder="(Activo / Inactivo)">
                </div>

               
                
                <button type="submit" class="btn btn-primary">Registrar</button>
                <button type="reset" class="btn btn-danger">Cancelar</button>
            </form>
        </div>
    </div>

</div>

@endsection