@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <form action="/clase" method="POST">
            @csrf
                <div class="form-group">
                    <label for="id_clase">Id de Clase</label>
                    <input type="text" class="form-control" name="id_clase" placeholder="Ingrese Id de Clase">
                </div>

                <div class="form-group">
                    <label for="nombre">Nombre de la Clase</label>
                    <input type="text" class="form-control" name="nombre_clase" placeholder="Ingrese la clase">
                </div>
                
                <button type="submit" class="btn btn-primary">Registrar</button>
                <button type="reset" class="btn btn-danger">Cancelar</button>
            </form>
        </div>
    </div>

</div>

@endsection