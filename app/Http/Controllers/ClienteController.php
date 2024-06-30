<?php

namespace App\Http\Controllers;

use App\Models\cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index(){
        $clientes = cliente::all();
        return view('clientes.index', ['clientes' => $clientes]);
    }

    public function crear(){
        return view('clientes.crear');
    }

    public function grabar(Request $request){
        $request->validate([
            'nombre' =>'required|string|max:200',
            'dni' =>'required|integer|min:8',
            'direccion' =>'required|string|min:5',
            'telefono' =>'required|string|min:9',
            'fechaNac' =>'required|date',
        ]);

        $cliente = new Cliente();

        $cliente->nombre = $request->nombre;
        $cliente->dni = $request->dni;
        $cliente->direccion = $request->direccion;
        $cliente->telefono = $request->telefono;
        $cliente->fechaNac = $request->fechaNac;

        $cliente->save();

        return to_route('clientes.index')->with('success','Cliente grabado correctamente.');
    }

    public function editar($id){
        $cliente = Cliente::findOrFail($id);
        return view('clientes.editar', compact('cliente'));
    }

    public function actualizar(Request $request, $id){
        $request->validate([
            'nombre' =>'required|string|max:200',
            'dni' =>'required|integer|min:8',
            'direccion' =>'required|string|min:5',
            'telefono' =>'required|string|min:9',
            'fechaNac' =>'required|date',
        ]);

        $cliente = Cliente::findOrFail($id);
        $cliente->nombre = $request->nombre;
        $cliente->dni = $request->dni;
        $cliente->direccion = $request->direccion;
        $cliente->telefono = $request->telefono;
        $cliente->fechaNac = $request->fechaNac;

        $cliente->update();
        return redirect()->route('clientes.index')->with('success', 'Cliente actualizado correctamente');
    }

    public function eliminar($id){
        $cliente = Cliente::findOrFail($id);
        $cliente->contratos()->delete();
        $cliente->delete();
        return redirect()->route('clientes.index')->with('success', 'Cliente eliminado correctamente');
    }

    public function mostrar($id){
        $cliente = Cliente::findOrFail($id);
        return view('clientes.mostrar', compact('cliente'));
    }
}
