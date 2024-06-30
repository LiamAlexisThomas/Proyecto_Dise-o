@extends('plantilla')

@section('titulo' , 'Clientes')

@section('contenido')
    @if (session('mensaje'))
        <div>{{session('mensaje')}}</div>
        <br>
    @endif

    <a href="{{url('/clientes/crear')}}" class="btn btn-primary">Agregar cliente</a>
    <br><br>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>DNI</th>
            <th>Direccion</th>
            <th>Telefono</th>
            <th>Fecha de nacimiento</th>
            <th>Acciones</th>
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
                    <a href="{{ route('clientes.mostrar', $cliente->id) }}" class="btn btn-info">Ver</a>
                    <a href="{{route('clientes.editar', $cliente->id)}}" class="btn btn-primary">Editar</a>
                    <form action="{{ route('clientes.eliminar', $cliente->id) }}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de eliminar este cliente?')">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    
    <br>
    <a href="{{url('/')}}" class="btn btn-primary">Principal</a>
@endsection