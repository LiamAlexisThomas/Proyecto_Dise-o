@extends('plantilla')

@section('titulo')
    Pagos
@endsection

@section('contenido')
    <h3>Listado de pagos</h3>

    @if (session('mensaje'))
        <div>{{session('mensaje')}}</div>
        <br>
    @endif

    <a href="{{url('/pagos/crear')}}" class="btn btn-primary">Agregar pago</a>
    <br><br>

    <table border="1">
        <tr>
            <th>CUENTA DE PAGO</th>
            <th>FECHA LIMITE</th>
            <th>MONTO</th>
            <th>TIPO</th>
            <th>ACCIONES</th>
        </tr>
        @foreach ($pagos as $pago)
            <tr>
                <td>{{$pago->cuentaPago}}</td>
                <td>{{$pago->fechaLim}}</td>
                <td>{{$pago->monto}}</td>
                <td>{{$pago->tipo}}</td>
                <td><a href="{{route('pagos.editar', $pago)}}" class="btn btn-primary">Editar</a></td>
            </tr>
        @endforeach
    </table>
    
    <br>
    <a href="{{url('/')}}" class="btn btn-primary">Principal</a>
@endsection