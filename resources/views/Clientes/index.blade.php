@extends('plantilla')

@section('titulo')
    Clientes
@endsection

@section('contenido')
    <h3>Listado de clientes</h3>

    @if (session('mensaje'))
        <div>{{session('mensaje')}}</div>
        <br>
    @endif

    <a href="{{url('/clientes/crear')}}" class="btn btn-primary">Agregar cliente</a>
    <br><br>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>NOMBRE</th>
            <th>DNI</th>
            <th>DIRECCION</th>
            <th>TELEFONO</th>
            <th>FECHA DE NACIMIENTO</th>
            <th>ACCIONES</th>
        </tr>
        @foreach ($clientes as $cliente)
            <tr>
                <td>{{$cliente->id}}</td>
                <td>{{$cliente->nombre}}</td>
                <td>{{$cliente->dni}}</td>
                <td>{{$cliente->direccion}}</td>
                <td>{{$cliente->telefono}}</td>
                <td>{{$cliente->fechaNac}}</td>
                <td>
                    <a href="{{route('clientes.editar', $cliente)}}" class="btn btn-primary">Editar</a>
                    <form action="{{route('clientes.eliminar', $cliente)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Borrar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    
    <br>
    <a href="{{url('/')}}" class="btn btn-primary">Principal</a>
@endsection