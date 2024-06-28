@extends('plantilla')

@section('titulo')
    Proyectos
@endsection

@section('contenido')
    <h3>Listado de proyectos</h3>

    @if (session('mensaje'))
        <div>{{session('mensaje')}}</div>
        <br>
    @endif

    <a href="{{url('/proyectos/crear')}}" class="btn btn-primary">Agregar proyecto</a>
    <br><br>

    <table border="1">
        <tr>
            <th>ID MATERIAL</th>
            <th>ID DISEÑADOR</th>
            <th>CONFIRMACION</th>
            <th>FECHA</th>
            <th>LUGAR</th>
            <th>ACCIONES</th>
        </tr>
        @foreach ($proyectos as $proyecto)
            <tr>
                <td>{{$proyecto->material_id}}</td>
                <td>{{$proyecto->diseñador_id}}</td>
                @if ($proyecto->confirmacion == 1)
                    <td>Si</td>
                @else
                    <td>No</td>
                @endif
                <td>{{$proyecto->fechaProy}}</td>
                <td>{{$proyecto->lugar}}</td>
                <td><a href="{{route('proyectos.editar', $proyecto)}}" class="btn btn-primary">Editar</a></td>
            </tr>
        @endforeach
    </table>
    
    <br>
    <a href="{{url('/')}}" class="btn btn-primary">Principal</a>
@endsection