@extends('plantilla')

@section('titulo' , 'Clientes')

@section('contenido')
    <header>
        <h1>Gestión de clientes</h1>
    </header>
    <nav>
        <a href="{{url('/contratos/index')}}">Contratos</a>
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
        <h2>Lista de clientes</h2>
        <a href="{{url('/clientes/crear')}}" class="btn btn-primary"><button style="margin-left: 1022px; width: 150px">Agregar cliente</button></a>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>DNI</th>
                    <th>Direccion</th>
                    <th>Telefono</th>
                    <th>Fecha de nacimiento</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clientes as $cliente)
                    <tr>
                        <td>{{$cliente->id}}</td>
                        <td>{{$cliente->nombre}}</td>
                        <td>{{$cliente->dni}}</td>
                        <td>{{$cliente->direccion}}</td>
                        <td>{{$cliente->telefono}}</td>
                        <td>{{$cliente->fechaNac}}</td>
                        <td class="action-buttons">
                            <form action="{{route('clientes.eliminar', $cliente->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button style="width: 127px">Eliminar</button>
                            </form>
                            <a href="{{route('clientes.mostrar', $cliente->id)}}" class="btn btn-primary"><button>Ver</button></a>
                            <a href="{{route('clientes.editar', $cliente->id)}}" class="btn btn-primary"><button>Editar</button></a>
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