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
            <th>ID</th>
            <th>CONFIRMACION</th>
            <th>FECHA</th>
            <th>LUGAR</th>
            <th>ACCIONES</th>
        </tr>
        @foreach ($proyectos as $proyecto)
            <tr>
                <td>{{$proyecto->id}}</td>
                @if ($proyecto->confirmacion == 1)
                    <td>Si</td>
                @else
                    <td>No</td>
                @endif
                <td>{{$proyecto->fechaProy}}</td>
                <td>{{$proyecto->lugar}}</td>
                <td>
                    <a href="{{ route('proyectos.mostrar', $proyecto->id) }}" class="btn btn-info">Ver</a>
                    <a href="{{route('proyectos.editar', $proyecto->id)}}" class="btn btn-primary">Editar</a>
                    <form action="{{ route('proyectos.eliminar', $proyecto->id) }}" method="POST" style="display: inline-block;">
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