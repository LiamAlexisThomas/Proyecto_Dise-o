<?php

namespace App\Http\Controllers;

use App\Models\cliente;
use App\Models\contrato;
use App\Models\diseñador;
use App\Models\proyecto;
use Illuminate\Http\Request;

class ContratoController extends Controller
{
    public function index(){
        $contratos = contrato::all();
        return view('contratos.index', ['contratos' => $contratos,]);
    }

    public function crear(){
        $clientes = cliente::all();
        $diseñadors = diseñador::all();
        $proyectos = proyecto::all();

        return view('contratos.crear', compact('clientes', 'diseñadors', 'proyectos'));
    }

    public function grabar(Request $request){
        $request->validate([
            'cliente_id' =>'required|exists:contratos,id',
            'diseñador_id' =>'required|exists:contratos,id',
            'proyecto_id' =>'required|exists:contratos,id',
        ]);

        $contrato = new contrato();

        $contrato->cliente_id = $request->cliente_id;
        $contrato->diseñador_id = $request->diseñador_id;
        $contrato->proyecto_id = $request->proyecto_id;
        
        $contrato->save();

        return to_route('contratos.index')->with('mensaje','Contrato grabado correctamente.');
    }

    public function editar(contrato $contrato){
        return view('contratos.editar', compact('contrato'));
    }

    public function actualizar(Request $request, contrato $contrato){
        $contrato->cliente_id = $request->cliente_id;
        $contrato->diseñador_id = $request->diseñador_id;
        $contrato->proyecto_id = $request->proyecto_id;
        
        $contrato->update();

        return redirect()->route('contratos.index')->with('mensaje','Contrato actualizado correctamente.');
    }

    public function eliminar($id){
        $contrato = contrato::findOrFail($id);
        $contrato->delete();
        return redirect()->route('contratos.index')->with('success', 'contrato eliminado correctamente');
    }

    public function mostrar(contrato $contrato){
        return view('contratos.mostrar', compact('contrato'));
    }
}