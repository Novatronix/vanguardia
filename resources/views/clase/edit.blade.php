@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <h3>Editar Clase: {{$clases->id_clase}}</h3>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
 
            <form action="{{route('clase.update', $clases->id_clase)}}" method="POST">

            @method('PATCH')
            @csrf
                <div class="form-group">
                    <label for="id_clase">Id Clase</label>

                    <input type="text" class="form-control" name="id_clase" value="{{ $clases->id_clase}}" placeholder="Ingrese el ID">

                </div>

                <div class="form-group">
                    <label for="nombre_clase">Nombre de la Clase</label>

                    <input type="text" class="form-control" name="nombre_clase" value="{{ $clases->nombre_clase }}" placeholder="Ingrese el nombre de la Clase">

                </div>
        

              
                <button type="submit" class="btn btn-primary">Guardar cambios</button>
                <button type="reset" class="btn btn-danger">Cancelar</button>
            </form>
        </div>
    </div>

</div>

@endsection