@extends('plantilla')

@section('titulo', 'Detalles del proyecto')

@section('contenido')
    <header>
        <h1>Gestión de proyectos</h1>
    </header>
    <nav>
        <a href="{{url('/proyectos/index')}}">Volver</a>
    </nav>
    <main>
        <h2>Detalles del proyecto</h2>
        <div class="card">
            <div class="card-body">
                <p class="card-title"><strong>ID: </strong>{{ $proyecto->id }}</p>
                <p class="card-text"><strong>Confirmacion:</strong> {{ $proyecto->confirmacion }}</p>
                <p class="card-text"><strong>Fecha:</strong> {{ $proyecto->fechaProy }}</p>
                <p class="card-text"><strong>Lugar:</strong> {{ $proyecto->lugar }}</p>
            </div>
        </div>
    </main>
    <footer>
        <p>liamthomas@epet12smandes.edu.ar &copy; Todos los derechos reservados.</p>
    </footer>
@endsection
