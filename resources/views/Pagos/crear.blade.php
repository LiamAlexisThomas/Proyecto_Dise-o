@extends('plantilla')

@section('titulo')
    Crear Pago
@endsection

@section('contenido')
    <form action="{{url('pagos/grabar')}}" method="POST">
        @csrf
        <label for="cuentaPago">Cuenta de pago
            <input name="cuentaPago" type="text"> <br>
             @error('cuentaPago')
                <small style="color: red">{{$message}}</small>
                <br>
            @enderror
        </label>
        <label for="fechaLim">Fecha Limite
            <input name="fechaLim" type="date"> <br>
             @error('fechaLim')
                <small style="color: red">{{$message}}</small>
                <br>
            @enderror
        </label>
        <label for="monto">Monto
            <input name="monto" type="text"> <br>
             @error('monto')
                <small style="color: red">{{$message}}</small>
                <br>
            @enderror
        </label>
        <label for="tipo">Tipo
            <input name="tipo" type="text"> <br>
             @error('tipo')
                <small style="color: red">{{$message}}</small>
                <br>
            @enderror
        </label>
        <button type="submit">Grabar</button>
    </form>
@endsection