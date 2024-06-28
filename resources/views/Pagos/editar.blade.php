@extends('plantilla')

@section('titulo')
    Editar Pago
@endsection

@section('contenido')
    <form action="{{route('pagos.actualizar', $pago)}}" method="POST">
        @method('PATCH')
        @csrf
        <label for="cuentaPago">Cuenta de pago
            <input name="cuentaPago" type="text" value="{{ old('cuentaPago', $pago->cuentaPago )}}"> <br>
             @error('cuentaPago')
                <small style="color: red">{{$message}}</small>
                <br>
            @enderror
        </label>
        <label for="fechaLim">Fecha limite
            <input name="fechaLim" type="text" value="{{ old('fechaLim', $pago->fechaLim )}}"> <br>
             @error('fechaLim')
                <small style="color: red">{{$message}}</small>
                <br>
            @enderror
        </label>
        <label for="monto">Monto
            <input name="monto" type="text" value="{{ old('monto', $pago->monto )}}"> <br>
             @error('monto')
                <small style="color: red">{{$message}}</small>
                <br>
            @enderror
        </label>
        <label for="tipo">Tipo
            <input name="tipo" type="text" value="{{ old('tipo', $pago->tipo )}}"> <br>
             @error('tipo')
                <small style="color: red">{{$message}}</small>
                <br>
            @enderror
        </label>
        <button type="submit">Grabar</button>
    </form>
@endsection