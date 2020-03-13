@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <h3>Editar Carrera: {{$carreras->id_carrera}}</h3>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
 
            <form action="{{route('carrera.update', $carreras->id_carrera)}}" method="POST">

            @method('PATCH')
            @csrf
                <div class="form-group">
                    <label for="id_carrera">Numero de cuenta</label>

                    <input type="text" class="form-control" name="id_carrera" value="{{ $carreras->id_carrera }}" placeholder="Ingrese su nombre">

                </div>

                <div class="form-group">
                    <label for="nombre_carrera">Nombre de la carrera</label>

                    <input type="text" class="form-control" name="nombre_carrrera" value="{{ $alumnos->nombre }}" placeholder="Ingrese su nombre">

                </div>

              
                <button type="submit" class="btn btn-primary">Guardar cambios</button>
                <button type="reset" class="btn btn-danger">Cancelar</button>
            </form>
        </div>
    </div>

</div>

@endsection