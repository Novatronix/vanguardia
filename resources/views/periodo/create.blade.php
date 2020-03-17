@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <form action="/periodo" method="POST">
            @csrf
                
                <div class="form-group">
                    <label for="num_periodo">Numero periodo</label>
                    <input type="text" class="form-control" name="num_periodo" placeholder="Ingrese el numero del periodo">
                </div>
                <div class="form-group">
                    <label for="semestre">Semestre</label>
                    <input type="text" class="form-control" name="semestre" placeholder="Ingrese el semestre">
                </div>
                <div class="form-group">
                    <label for="año">Año</label>
                    <input type="text" class="form-control" name="año" placeholder="Ingrese el año">
                </div>
                <div class="form-group">
                    <label for="descripcion">Descripcion</label>
                    <input type="text" class="form-control" name="descripcion" placeholder="Ingrese una descripcion">
                </div>


              

               
                
                <button type="submit" class="btn btn-primary">Registrar</button>
                <button type="reset" class="btn btn-danger">Cancelar</button>
            </form>
        </div>
    </div>

</div>

@endsection