@extends('plantilla')

@section('titulo')
    Contratos
@endsection

@section('contenido')
    <h3>Listado de contratos</h3>

    @if (session('mensaje'))
        <div>{{session('mensaje')}}</div>
        <br>
    @endif

    <a href="{{url('/contratos/crear')}}" class="btn btn-primary">Agregar contrato</a>
    <br><br>

    <table border="1">
        <tr>
            <th>CLIENTE ID</th>
            <th>DISEÑADOR ID</th>
            <th>PROYECTO ID</th>
            <th>ACCIONES</th>
        </tr>
        @foreach ($contratos as $contrato)
            <tr>
                <td>{{ $contrato->cliente_id}}</td>
                <td>{{ $contrato->diseñador_id}}</td>
                <td>{{ $contrato->proyecto_id}}</td>
                <td><a href="{{route('contratos.editar', $contrato)}}" class="btn btn-primary">Editar</a></td>
            </tr>
        @endforeach
    </table>
    
    <br>
    <a href="{{url('/')}}" class="btn btn-primary">Principal</a>
@endsection