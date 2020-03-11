<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\UserFormRequest;
use App\Alumno;
use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;


class Alumnos extends Controller
{
    public function index()
    {
        $alumnos = Alumno::all();
        return view('alumno.indexa', ['alumnos'=> $alumnos]);
        //
    }
    public function create(){
        return view('alumno.create');
    }

    public function store(Request $request)
    {
        $alumnos = new Alumno();
        $alumnos-> id_alumno = request ('id_alumno');
        $alumnos-> nombre = request ('nombre');
        $alumnos-> apellidos = request ('apellidos');
        $alumnos-> fecha_ingreso = request ('fecha_ingreso');
        $alumnos-> genero = request ('genero');
        $alumnos-> telefono = request ('telefono');
        $alumnos-> estado = request ('estado');

        $alumnos->save();

        return redirect('/alumno');
        
        //
    }

  
    public function show($id_alumno)
    {
        return view('alumno.show', ['alumnos' => Alumno::findOrFail($id_alumno)]);

    }

   
    public function edit($id_alumno)
    {
        return view('alumno.edit', ['alumnos' => Alumno::findOrFail($id_alumno)]);

        //
    }

  
    public function update(UserFormRequest $request, $id_alumno)
    {
        $alumnos =  Alumno::findOrFail($id_alumno);
        $alumnos-> nombre = $request -> get('nombre');
        $alumnos-> apellidos = $request-> get ('apellidos');
        $alumnos-> fecha_ingreso = $request -> get('fecha_ingreso');
        $alumnos-> genero = $request-> get ('genero');
        $alumnos-> telefono = $request -> get('telefono');
        $alumnos-> estado = $request-> get ('estado');


        $alumnos->update();

        return redirect('/alumno');
        //
    }

    public function destroy($id)
    {
        $alumnos = Alumno::findOrFail($id);
        $alumnos->delete();

        return redirect('/alumno');
        //
    }
    public function import(Request $request){
        $file = $request->file('file');
        Excel::import(new UsersImport, $file);

        return back() -> with('message', 'Se importo los datos');
    }
}
