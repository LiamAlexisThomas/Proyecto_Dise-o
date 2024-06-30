<?php

namespace App\Http\Controllers;

use App\Models\pago;
use Illuminate\Http\Request;

class PagoController extends Controller
{
    public function index(){
        $pagos = pago::all();

        return view('pagos.index', ['pagos' => $pagos]);
    }

    public function crear(){
        return view('pagos.crear');
    }

    public function grabar(Request $request){
        $request->validate([
            'cuentaPago' =>'required|string|min:5',
            'fechaLim' =>'required|date',
            'monto' =>'required|numeric',
            'tipo' =>'required|string|min:5'
        ]);

        $pago = new pago();

        $pago->cuentaPago = $request->cuentaPago;
        $pago->fechaLim = $request->fechaLim;
        $pago->monto = $request->monto;
        $pago->tipo = $request->tipo;

        $pago->save();

        return to_route('pagos.index')->with('mensaje','Pago grabado correctamente.');
    }

    public function editar(pago $pago){
        return view('pagos.editar', compact('pago'));
    }

    public function actualizar(Request $request, pago $pago){
        $pago->cuentaPago = $request->cuentaPago;
        $pago->fechaLim = $request->fechaLim;
        $pago->monto = $request->monto;
        $pago->tipo = $request->tipo;

        $pago->update();
        return redirect()->route('pagos.index')->with('mensaje', 'Pago actualizado correctamente');
    }

    public function eliminar(pago $pago){
        $pago->delete();
        return redirect()->route('pagos.index')->with('success', 'pago eliminado correctamente');
    }

    public function mostrar(pago $pago){
        return view('pagos.mostrar', compact('pago'));
    }
}
