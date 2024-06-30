<?php

namespace App\Http\Controllers;

use App\Models\material;
use Illuminate\Http\Request;

class MaterialController extends Controller
{
    public function index(){
        $materials = material::all();

        return view('materials.index', ['materials' => $materials]);
    }

    public function crear(){
        return view('materials.crear');
    }

    public function grabar(Request $request){
        $request->validate([
            'nombre' =>'required|string|min:5',
            'descripcion' =>'required|string|min:5',
            'cantidad' =>'required|numeric',
            'precioUnid' =>'required|numeric'
        ]);

        $material = new material();

        $material->nombre = $request->nombre;
        $material->descripcion = $request->descripcion;
        $material->cantidad = $request->cantidad;
        $material->precioUnid = $request->precioUnid;

        $material->save();

        return to_route('materials.index')->with('success','Material grabado correctamente.');
    }

    public function editar($id){
        $material = material::findOrFail($id);
        return view('materials.editar', compact('material'));
    }

    public function actualizar(Request $request, $id){
        $request->validate([
            'nombre' =>'required|string|min:5',
            'descripcion' =>'required|string|min:5',
            'cantidad' =>'required|numeric',
            'precioUnid' =>'required|numeric'
        ]);

        $material = material::findOrFail($id);
        $material->nombre = $request->nombre;
        $material->descripcion = $request->descripcion;
        $material->cantidad = $request->cantidad;
        $material->precioUnid = $request->precioUnid;

        $material->update();
        return redirect()->route('materials.index')->with('success', 'Material actualizado correctamente');
    }

    public function eliminar($id){
        $material = material::findOrFail($id);
        $material->delete();
        return redirect()->route('materials.index')->with('success', 'Material eliminado correctamente');
    }

    public function mostrar($id){
        $material = material::findOrFail($id);
        return view('materials.mostrar', compact('material'));
    }
}
