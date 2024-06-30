@extends('plantilla')

@section('titulo')
    Materiales
@endsection

@section('contenido')
    <header>
        <h1>Gestión de materiales</h1>
    </header>
    <nav>
        <a href="{{url('/clientes/index')}}">Clientes</a>
        <a href="{{url('/contratos/index')}}">Contratos</a>
        <a href="{{url('/diseñadors/index')}}">Diseñadores</a>
        <a href="{{url('/pagos/index')}}">Pagos</a>
        <a href="{{url('/proyectos/index')}}">Proyectos</a>
        <a href="{{url('/')}}">Principal</a>
    </nav>
    <main>
        <h2>Lista de materiales</h2>
        <a href="{{url('/materials/crear')}}" class="btn btn-primary"><button style="margin-left: 1022px; width: 150px">Agregar material</button></a>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NOMBRE</th>
                    <th>DESCRIPCION</th>
                    <th>CANTIDAD</th>
                    <th>PRECIO DE UNIDAD</th>
                    <th>ACCIONES</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($materials as $material)
                    <tr>
                        <td>{{$material->id}}</td>
                        <td>{{$material->nombre}}</td>
                        <td>{{$material->descripcion}}</td>
                        <td>{{$material->cantidad}}</td>
                        <td>{{$material->precioUnid}}</td>
                        <td class="action-buttons">
                            <form action="{{route('materials.eliminar', $material->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button style="width: 127px">Eliminar</button>
                            </form>
                            <a href="{{route('materials.mostrar', $material->id)}}" class="btn btn-primary"><button>Ver</button></a>
                            <a href="{{route('materials.editar', $material->id)}}" class="btn btn-primary"><button>Editar</button></a>
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