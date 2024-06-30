@extends('plantilla')

@section('titulo')
    Diseñadores
@endsection

@section('contenido')
    <h3>Listado de diseñadores</h3>

    @if (session('mensaje'))
        <div>{{session('mensaje')}}</div>
        <br>
    @endif

    <a href="{{url('/diseñadors/crear')}}" class="btn btn-primary">Agregar diseñador</a>
    <br><br>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>NOMBRE</th>
            <th>EMAIL</th>
            <th>TELEFONO</th>
            <th>FECHA DE NACIMIENTO</th>
            <th>ACCIONES</th>
        </tr>
        @foreach ($diseñadors as $diseñador)
            <tr>
                <td>{{$diseñador->id}}</td>
                <td>{{$diseñador->nombre}}</td>
                <td>{{$diseñador->email}}</td>
                <td>{{$diseñador->telefono}}</td>
                <td>{{$diseñador->fechaNac}}</td>
                <td>
                    <a href="{{ route('diseñadors.mostrar', $diseñador->id) }}" class="btn btn-info">Ver</a>
                    <a href="{{route('diseñadors.editar', $diseñador->id)}}" class="btn btn-primary">Editar</a>
                    <form action="{{ route('diseñadors.eliminar', $diseñador->id) }}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de eliminar este diseñador?')">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    
    <br>
    <a href="{{url('/')}}" class="btn btn-primary">Principal</a>
@endsection