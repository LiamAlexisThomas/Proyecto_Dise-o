<?php

namespace App\Http\Controllers;

use App\Models\proyecto;
use Illuminate\Http\Request;

class ProyectoController extends Controller
{
    public function index(){
        $proyectos = proyecto::all();
        return view('proyectos.index', ['proyectos' => $proyectos]);
    }

    public function crear(){
        return view('proyectos.crear');
    }

    public function grabar(Request $request){
        $request->validate([
            'material_id' =>'required|exists:contratos,id',
            'diseñador_id' =>'required|exists:contratos,id',
            'confirmacion' =>'required|boolean',
            'fechaProy' =>'required|date',
            'lugar' =>'required|string|min:5'
        ]);

        $proyecto = new proyecto();

        $proyecto->material_id = $request->material_id;
        $proyecto->diseñador_id = $request->diseñador_id;
        $proyecto->confirmacion = $request->confirmacion;
        $proyecto->fechaProy = $request->fechaProy;
        $proyecto->lugar = $request->lugar;

        $proyecto->save();

        return to_route('proyectos.index')->with('mensaje','Proyecto grabado correctamente.');
    }

    public function editar(proyecto $proyecto){
        return view('proyectos.editar', compact('proyecto'));
    }

    public function actualizar(Request $request, proyecto $proyecto){
        $proyecto->material_id = $request->material_id;
        $proyecto->diseñador_id = $request->diseñador_id;
        $proyecto->confirmacion = $request->confirmacion;
        $proyecto->fechaProy = $request->fechaProy;
        $proyecto->lugar = $request->lugar;

        $proyecto->update();
        return redirect()->route('proyectos.index')->with('mensaje', 'Proyecto actualizado correctamente');
    }

    public function eliminar($id){
        $proyecto = proyecto::findOrFail($id);
        $proyecto->contratos()->delete();
        $proyecto->delete();
        return redirect()->route('proyectos.index')->with('success', 'proyecto eliminado correctamente');
    }

    public function mostrar(proyecto $proyecto){
        return view('proyectos.mostrar', compact('proyecto'));
    }
}
