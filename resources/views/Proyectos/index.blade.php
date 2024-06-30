@extends('plantilla')

@section('titulo')
    Proyectos
@endsection

@section('contenido')
    <header>
        <h1>Gestión de proyectos</h1>
    </header>
    <nav>
        <a href="{{url('/clientes/index')}}">Clientes</a>
        <a href="{{url('/contratos/index')}}">Contratos</a>
        <a href="{{url('/diseñadors/index')}}">Diseñadores</a>
        <a href="{{url('/materials/index')}}">Materiales</a>
        <a href="{{url('/pagos/index')}}">Pagos</a>
        <a href="{{url('/')}}">Principal</a>
    </nav>
    <main>
        <h2>Lista de proyectos</h2>
        <a href="{{url('/proyectos/crear')}}" class="btn btn-primary"><button style="margin-left: 1022px; width: 150px">Agregar proyecto</button></a>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>CONFIRMACION</th>
                    <th>FECHA</th>
                    <th>LUGAR</th>
                    <th>ACCIONES</th>
                </tr>
            </thead>
            <tbody>
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
                        <td class="action-buttons">
                            <form action="{{route('proyectos.eliminar', $proyecto->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button style="width: 127px">Eliminar</button>
                            </form>
                            <a href="{{route('proyectos.mostrar', $proyecto->id)}}" class="btn btn-primary"><button>Ver</button></a>
                            <a href="{{route('proyectos.editar', $proyecto->id)}}" class="btn btn-primary"><button>Editar</button></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </main>
    <footer>
        <p>liamthomas@epet12smandes.edu.ar &copy; Todos los derechos reservados.</p>
    </footer>
@endsection