<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Periodo;
use App\Http\Requests\UserFormRequest;
use App\Imports\UsersImport;

class Periodos extends Controller
{
    public function index()
    {
        $periodos = Periodo::all();
        return view('periodo.index', ['periodos'=> $periodos]);
        //
    }
    public function create(){
        return view('periodo.create');
    }

    public function store(Request $request)
    {
        $periodos = new Periodo();
        $periodos-> id_periodo = request ('id_periodo');
        $periodos-> num_periodo = request ('num_periodo');
        $periodos-> semestre = request ('semestre');
        $periodos-> año = request ('año');
        $periodos-> descripcion = request ('descripcion');
        
        $periodos->save();

        return redirect('/periodo');
        
        //
    }

  
    public function show($id_periodo)
    {
        return view('periodo.show', ['periodos' => Periodo::findOrFail($id_periodo)]);

    }

   
    public function edit($id_periodo)
    {
        return view('periodo.edit', ['periodos' => Periodo::findOrFail($id_periodo)]);

        //
    }

  
    public function update(UserFormRequest $request, $id_periodo)
    {
        $periodos =  Periodos::findOrFail($id_periodo);
        $periodos-> num_periodo = $request -> get('num_periodo');
     
    
        $carreras->update();

        return redirect('/periodo');
        //
    }

    public function destroy($id)
    {
        $periodos = Periodo::findOrFail($id_periodo);
        $periodos->delete();

        return redirect('/periodo');
        //
    }
    public function import(Request $request){
        $file = $request->file('file');
        Excel::import(new UsersImport, $file);

        return back() -> with('message', 'Se importo los datos');
    }
}
