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
                <td><a href="{{route('materials.editar', $material)}}" class="btn btn-primary">Editar</a></td>
            </tr>
        @endforeach
    </table>
    
    <br>
    <a href="{{url('/')}}" class="btn btn-primary">Principal</a>
@endsection