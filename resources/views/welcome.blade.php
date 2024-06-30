@extends('plantilla')

@section('titulo')
    Bienvenidos
@endsection

@section('contenido')
    <header>
        <h1>Interior Bliss</h1>
    </header>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="https://img.icons8.com/?size=100&id=2797&format=png&color=000000" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
                Bootstrap
              </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Features</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true">Disabled</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

   
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