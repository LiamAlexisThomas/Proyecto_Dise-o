@extends('plantilla')

@section('titulo')
    Materiales
@endsection

@section('contenido')
    <h3>Listado de Materiales</h3>

    @if (session('mensaje'))
        <div>{{session('mensaje')}}</div>
        <br>
    @endif

    <a href="{{url('/materials/crear')}}" class="btn btn-primary">Agregar material</a>
    <br><br>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>NOMBRE</th>
            <th>DESCRIPCION</th>
            <th>CANTIDAD</th>
            <th>PRECIO DE UNIDAD</th>
            <th>ACCIONES</th>
        </tr>
        @foreach ($materials as $material)
            <tr>
                <td>{{$material->id}}</td>
                <td>{{$material->nombre}}</td>
                <td>{{$material->descripcion}}</td>
                <td>{{$material->cantidad}}</td>
                <td>{{$material->precioUnid}}</td>
                <td>
                    <a href="{{ route('materials.mostrar', $material->id) }}" class="btn btn-info">Ver</a>
                    <a href="{{route('materials.editar', $material->id)}}" class="btn btn-primary">Editar</a>
                    <form action="{{ route('materials.eliminar', $material->id) }}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de eliminar este material?')">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    
    <br>
    <a href="{{url('/')}}" class="btn btn-primary">Principal</a>
@endsection