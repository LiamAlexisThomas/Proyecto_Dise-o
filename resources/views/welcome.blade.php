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