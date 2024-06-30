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
                <td>
                    <a href="{{ route('contratos.mostrar', $contrato->id) }}" class="btn btn-info">Ver</a>
                    <a href="{{route('contratos.editar', $contrato->id)}}" class="btn btn-primary">Editar</a>
                    <form action="{{ route('contratos.eliminar', $contrato->id) }}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de eliminar este contrato?')">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    
    <br>
    <a href="{{url('/')}}" class="btn btn-primary">Principal</a>
@endsection