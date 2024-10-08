@extends('plantilla')

@section('titulo')
    Diseñadores
@endsection

@section('contenido')
    <header>
        <h1>Gestión de diseñadores</h1>
    </header>
    <nav>
        <a href="{{url('/clientes/index')}}">Clientes</a>
        <a href="{{url('/contratos/index')}}">Contratos</a>
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
        <h2>Lista de diseñadores</h2>
        <a href="{{url('/diseñadors/crear')}}" class="btn btn-primary"><button style="margin-left: 1022px; width: 150px">Agregar diseñador</button></a>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NOMBRE</th>
                    <th>EMAIL</th>
                    <th>TELEFONO</th>
                    <th>FECHA DE NACIMIENTO</th>
                    <th>ACCIONES</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($diseñadors as $diseñador)
                    <tr>
                        <td>{{$diseñador->id}}</td>
                        <td>{{$diseñador->nombre}}</td>
                        <td>{{$diseñador->email}}</td>
                        <td>{{$diseñador->telefono}}</td>
                        <td>{{$diseñador->fechaNac}}</td>
                        <td class="action-buttons">
                            <form action="{{route('diseñadors.eliminar', $diseñador->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button style="width: 127px">Eliminar</button>
                            </form>
                            <a href="{{route('diseñadors.mostrar', $diseñador->id)}}" class="btn btn-primary"><button>Ver</button></a>
                            <a href="{{route('diseñadors.editar', $diseñador->id)}}" class="btn btn-primary"><button>Editar</button></a>
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