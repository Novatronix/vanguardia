<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



use App\Carrera;
use App\Http\Requests\UserFormRequest;
use App\Imports\UsersImport;

class Carreras extends Controller
{
    public function index()
    {
        if(!\Auth::check())
        {
            return redirect('/login');
        }
        $carreras = Carrera::all();
        return view('carrera.index', ['carreras'=> $carreras]);
        //
    }
    public function create(){
        if(!\Auth::check())
        {
            return redirect('/login');
        }
        return view('carrera.create');
    }

    public function store(Request $request)
    {
       
        if(!\Auth::check())
        {
            return redirect('/login');
        }        $carreras = new Carrera();
        $carreras-> id_carrera = request ('id_carrera');
        $carreras-> nombre_carrera = request ('nombre_carrera');
        
        $carreras->save();

        if(!\Auth::check())
        {
            return redirect('/login');
        }
        return redirect('/carrera');
        
        //
    }

  
    public function show($id_carrera)
    {
        if(!\Auth::check())
        {
            return redirect('/login');
        }
        return view('carrera.show', ['carreras' => Carrera::findOrFail($id_carrera)]);

    }

   
    public function edit($id_carrera)
    {
        if(!\Auth::check())
        {
            return redirect('/login');
        }
        return view('carrera.edit', ['carreras' => Carrera::findOrFail($id_carrera)]);

        //
    }

  
    public function update(UserFormRequest $request, $id_carrera)
    {
        if(!\Auth::check())
        {
            return redirect('/login');
        }
        $carreras = Carrera::findOrFail($id_carrera);
        $carreras-> id_carrera = $request -> get('id_carrera');
        $carreras-> nombre_carrera = $request-> get ('nombre_carrera');
        $carreras->update();

        return redirect('/carrera');
        //
    }

    public function destroy($id_carrera)
    {
        if(!\Auth::check())
        {
            return redirect('/login');
        }
        $carreras = Carrera::findOrFail($id_carrera);
        $carreras->delete();

        return redirect('/carrera');
        //
    }
    public function import(Request $request){
        if(!\Auth::check())
        {
            return redirect('/login');
        }
        $file = $request->file('file');
        Excel::import(new UsersImport, $file);

        return back() -> with('message', 'Se importo los datos');
    }
}
