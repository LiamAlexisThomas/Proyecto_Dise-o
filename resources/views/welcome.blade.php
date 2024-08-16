@extends('plantilla')

@section('titulo')
    Bienvenidos
@endsection

@section('contenido')
    <header>
        <h1>Interior Bliss</h1>
    </header>
    <nav>
        <a href="{{route('clientes.index')}}">Clientes</a>
        <a href="{{url('/contratos/index')}}">Contratos</a>
        <a href="{{url('/diseñadors/index')}}">Diseñadores</a>
        <a href="{{url('/materials/index')}}">Materiales</a>
        <a href="{{url('/pagos/index')}}">Pagos</a>
        <a href="{{url('/proyectos/index')}}">Proyectos</a>
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
        <h2>Bienvenido a la base de datos de Interior Bliss</h2>        
        <div class="card">
            <img src="{{ asset('') }}" alt="">
        </div>        
        <table>
            <tr>
                <th>En esta base de datos podras encontrar:</th>
            </tr>
            <tr><td>Datos de los clientes que se han logeado en esta pagina.</td></tr>
            <tr><td>Datos sobre los diseñadores con los que trabajamos.</td></tr>
            <tr><td>Los distintos contratos que hemos realizado durante los años.</td></tr>
            <tr><td>La informacion de los materiales con los que trabajamos.</td></tr>
            <tr><td>El modo en el que se han realizado los pagos de cada proyecto.</td></tr>
            <tr><td>Los detalles sobre los proyectos que se han realizado o se van a realizar.</td></tr>
        </table>
    </main>
    <footer>
        <p>liamthomas@epet12smandes.edu.ar &copy; Todos los derechos reservados.</p>
    </footer>
@endsection