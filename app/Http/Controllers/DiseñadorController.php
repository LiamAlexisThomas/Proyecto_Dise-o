<?php

namespace App\Http\Controllers;

use App\Models\diseñador;
use Illuminate\Http\Request;

class DiseñadorController extends Controller
{
    public function index(){
        $diseñadors = diseñador::all();

        return view('diseñadors.index', ['diseñadors' => $diseñadors]);
    }

    public function crear(){
        return view('diseñadors.crear');
    }

    public function grabar(Request $request){
        $request->validate([
            'nombre' =>'required|string|min:5',
            'email' =>'required|string|min:8',
            'telefono' =>'required|integer|min:9',
            'fechaNac' =>'required|date',
        ]);

        $diseñador = new diseñador();

        $diseñador->nombre = $request->nombre;
        $diseñador->email = $request->email;
        $diseñador->telefono = $request->telefono;
        $diseñador->fechaNac = $request->fechaNac;

        $diseñador->save();

        return to_route('diseñadors.index')->with('mensaje','Diseñador grabado correctamente.');
    }

    public function editar(diseñador $diseñador){
        return view('diseñadors.editar', compact('diseñador'));
    }

    public function actualizar(Request $request, diseñador $diseñador){
        $diseñador->nombre = $request->nombre;
        $diseñador->email = $request->email;
        $diseñador->telefono = $request->telefono;
        $diseñador->fechaNac = $request->fechaNac;

        $diseñador->update();
        return redirect()->route('diseñadors.index')->with('mensaje', 'Diseñador actualizado correctamente');
    }
    
    public function eliminar($id){
        $diseñador = diseñador::findOrFail($id);
        $diseñador->contratos()->delete();
        $diseñador->delete();
        return redirect()->route('diseñadors.index')->with('success', 'diseñador eliminado correctamente');
    }

    public function mostrar(diseñador $diseñador){
        return view('diseñadors.mostrar', compact('diseñador'));
    }
}
