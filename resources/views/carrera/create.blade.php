@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <form action="/carrera" method="POST">
            @csrf
                <div class="form-group">
                    <label for="id_carrera">ID Carrera</label>
                    <input type="text" class="form-control" name="id_carrera" placeholder="Ingrese id de la carrera">
                </div>

                <div class="form-group">
                    <label for="nombre_carrera">Nombre de la Carrera</label>
                    <input type="text" class="form-control" name="nombre_carrera" placeholder="Ingrese nombre de la carrera">
                </div>

              

               
                
                <button type="submit" class="btn btn-primary">Registrar</button>
                <button type="reset" class="btn btn-danger">Cancelar</button>
            </form>
        </div>
    </div>

</div>

@endsection