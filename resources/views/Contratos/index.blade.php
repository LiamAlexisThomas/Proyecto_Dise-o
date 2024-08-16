@extends('plantilla')

@section('titulo')
    Contratos
@endsection

@section('contenido')
    <header>
        <h1>Gestión de contratos</h1>
    </header>
    <nav>
        <a href="{{url('/clientes/index')}}">Clientes</a>
        <a href="{{url('/diseñadors/index')}}">Diseñadores</a>
        <a href="{{url('/materials/index')}}">Materiales</a>
        <a href="{{url('/pagos/index')}}">Pagos</a>
        <a href="{{url('/proyectos/index')}}">Proyectos</a>
        <a href="{{url('/')}}">Principal</a>
        @guest
            <a class="nav-link {{ request()->routeIs('registro') ? 'active' : '' }}" aria-current="page" href="{{ route('registro') }}">Registro</a>
            <a class="nav-link {{ request()->routeIs('login') ? 'active' : '' }}" href="{{ route('login') }}">Login</a>
        @endguest
        @auth
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button style="margin-top: 4px; width: 100px; background-color: #a67c52; font-weight: bold; font-family: 'Roboto', Arial, sans-serif; color: #f5f5dc">LogOut</button>
            </form>
        @endauth
    </nav>
    <main>
        <h2>Lista de contratos</h2>
        <a href="{{url('/contratos/crear')}}" class="btn btn-primary"><button style="margin-left: 1022px; width: 150px">Agregar contrato</button></a>
        <table>
            <thead>
                <tr>
                    <th>ID CLIENTE</th>
                    <th>ID DISEÑADOR</th>
                    <th>ID PROYECTO</th>
                    <th>ACCIONES</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contratos as $contrato)
                    <tr>
                        <td>{{ $contrato->cliente_id}}</td>
                        <td>{{ $contrato->diseñador_id}}</td>
                        <td>{{ $contrato->proyecto_id}}</td>
                        <td class="action-buttons">
                            <form action="{{route('contratos.eliminar', $contrato->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button style="width: 127px">Eliminar</button>
                            </form>
                            <a href="{{route('contratos.mostrar', $contrato->id)}}" class="btn btn-primary"><button>Ver</button></a>
                            <a href="{{route('contratos.editar', $contrato->id)}}" class="btn btn-primary"><button>Editar</button></a>
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