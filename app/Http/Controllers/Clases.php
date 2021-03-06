<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clase;
use App\Http\Requests\UserFormRequest;
use App\Imports\UsersImport;


class Clases extends Controller
{
    public function index()
    {
        if(!\Auth::check())
        {
            return redirect('/login');
        }
        $clases = Clase::all();
        return view('clase.index', ['clases'=> $clases]);
        //
    }
    public function create(){
        return view('clase.create');
    }

    public function store(Request $request)
    {
        if(!\Auth::check())
        {
            return redirect('/login');
        }
        $clases = new Clase();
        $clases-> id_clase = request ('id_clase');
        $clases-> nombre_clase = request ('nombre_clase');
        

        $clases->save();

        return redirect('/clase');
        
        //
    }

  
    public function show($id_clase)
    {
        if(!\Auth::check())
        {
            return redirect('/login');
        }
        return view('clase.show', ['clases' => Clase::findOrFail($id_clase)]);

    }

   
    public function edit($id_clase)
    {
        if(!\Auth::check())
        {
            return redirect('/login');
        }
        return view('clase.edit', ['clases' => Clase::findOrFail($id_clase)]);
        //
    }

  
    public function update(UserFormRequest $request, $id_clase)
    {
        if(!\Auth::check())
        {
            return redirect('/login');
        }
        $clases =  Clase::findOrFail($id_clase);
        $clases-> id_clase = $request -> get('id_clase');
        $clases-> nombre_clase = $request -> get('nombre_clase');
        


        $clases->update();

        return redirect('/clase');
        //
    }

    public function destroy($id_clase)
    {
        if(!\Auth::check())
        {
            return redirect('/login');
        }
        $clases = Clase::findOrFail($id_clase);
        $clases->delete();

        return redirect('/clase');
        //
    }

}
