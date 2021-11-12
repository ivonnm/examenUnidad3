<?php

namespace App\Http\Controllers;

use App\Models\personas;
use Illuminate\Http\Request;

class PersonasController extends Controller
{
    public function index(){
        $persona = personas::orderBy('id','asc')->paginate(10);
        return view('personas.index', compact('persona'));
    }

    public function store(Request $request){
        $personas = new personas();

        $personas->apellidoPaterno = $request->apellidoPaterno;
        $personas->apellidoMaterno = $request->apellidoMaterno;
        $personas->nombre = $request->nombre;
        $personas->fecha_n = $request->fecha_n;
        $personas->sexo = $request->sexo;
       $personas->save();
       return redirect()->route('personas.index');

    }
    public function create(){
        return view('personas.create');
    }

    /* ACTUALIZAR */
    public function actualizar(personas $persona){
        return view('personas.actualizar',compact('personas'));
    }
    public function update(Request $request, Personas $persona){
        $persona->apellido_paterno = $request->apellidoPaterno;
        $persona->apellido_materno = $request->apellidoMaterno;
        $persona->nombre = $request->nombre;
        $persona->fecha_n = $request->fecha_n;
        $persona->sexo = $request->sexo;

        $persona->save();
        return redirect()->route('personas.index', $persona);
    }
    /* METODO DE ELIMIRA */
    public function destroy(personas $persona){
        $persona->delete();
        return redirect()->route('personas.index');
    }

}
