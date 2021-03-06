<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\UserFormRequest;

class UserController extends Controller
{
    
    public function index()
    {
        if(!\Auth::check())
        {
            return redirect('/login');
        }
        $users = User::all();
        return view('usuarios.index', ['users'=> $users]);
        //
    }

   
    public function create()
    {
        if(!\Auth::check())
        {
            return redirect('/login');
        }
        return view('usuarios.create');
        //
    }

   
    public function store(Request $request)
    {
        if(!\Auth::check())
        {
            return redirect('/login');
        }
        $usuario = new User();
        $usuario-> name = request ('name');
        $usuario-> email = request ('email');
        $usuario-> password = request ('password');

        $usuario->save();

        return redirect('/usuarios');
        
        //
    }

  
    public function show($id)
    {
        if(!\Auth::check())
        {
            return redirect('/login');
        }
        return view('usuarios.show', ['user' => User::findOrFail($id)]);

    }

   
    public function edit($id)
    {
        if(!\Auth::check())
        {
            return redirect('/login');
        }
        return view('usuarios.edit', ['user' => User::findOrFail($id)]);
        //
    }

  
    public function update(UserFormRequest $request, $id)
    {
        if(!\Auth::check())
        {
            return redirect('/login');
        }
        $usuario =  User::findOrFail($id);
        $usuario-> name = $request -> get('name');
        $usuario-> email = $request-> get ('email');

        $usuario->update();

        return redirect('/usuarios');
        //
    }

    public function destroy($id)
    {
        $usuario = User::findOrFail($id);
        $usuario->delete();

        return redirect('/usuarios');
        //
    }
}
