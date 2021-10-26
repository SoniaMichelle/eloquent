<?php

namespace App\Http\Controllers;

use App\Models\Registro;
use Illuminate\Http\Request;

class RegistroControl extends Controller
{
    public function index(){
        return view('registro.index');
    }
    public function lista(){
        $registro = Registro::orderBy('id','desc')->paginate();

        //return $registo;
         
        return view('registro.lista', compact('registro'));
    }

    public function mostrar(Registro $registro){
        return view ('registro.mostrar', compact('registro'));
    }
    public function agregar(){
        return view('registro.agregar');
    }
    public function store(Request $request){
        $registros = new Registro();

        $registros->nombre = $request->nombre;
        $registros->apellido = $request->apellido;
        $registros->edad = $request->edad;
        $registros->email = $request->email;
        $registros->password = $request->password;

        $registros->save();
        return redirect()->route('registro.mostrar', $registros);
    }
    public function editar(Registro $registro){
       /*  $registros = Registro::find($registro); */
        return view('registro.editar',compact('registro'));
    }
    public function update(Request $request, Registro $registro ){
        $registro->nombre = $request->nombre;
        $registro->apellido = $request->apellido;
        $registro->edad = $request->edad;
        $registro->email = $request->email;
        $registro->password = $request->password;

        $registro->save();
        return redirect()->route('registro.mostrar', $registro);
    }
}
