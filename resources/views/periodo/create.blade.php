@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <form action="/carrera" method="POST">
            @csrf
                <div class="form-group">
                    <label for="id_periodo">ID Periodo</label>
                    <input type="text" class="form-control" name="periodo" placeholder="Ingrese id del periodo">
                </div>

                <div class="form-group">
                    <label for="num_periodo">Numero periodo</label>
                    <input type="text" class="form-control" name="nombre_carrera" placeholder="Ingrese el numero del periodo">
                </div>
                <div class="form-group">
                    <label for="semestre">Semestre</label>
                    <input type="text" class="form-control" name="nombre_carrera" placeholder="Ingrese el semestre">
                </div>
                <div class="form-group">
                    <label for="año">Año</label>
                    <input type="text" class="form-control" name="nombre_carrera" placeholder="Ingrese el año">
                </div>
                <div class="form-group">
                    <label for="descripcion">Descripcion</label>
                    <input type="text" class="form-control" name="nombre_carrera" placeholder="Ingrese una descripcion">
                </div>


              

               
                
                <button type="submit" class="btn btn-primary">Registrar</button>
                <button type="reset" class="btn btn-danger">Cancelar</button>
            </form>
        </div>
    </div>

</div>

@endsection