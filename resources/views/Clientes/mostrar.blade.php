@extends('plantilla')

@section('titulo', 'Detalles del Cliente')

@section('contenido')
    <header>
        <h1>Gestión de clientes</h1>
    </header>
    <nav>
        <a href="{{url('/clientes/index')}}">Volver</a>
    </nav>
    <main>
        <h2>Detalles del cliente</h2>
        <div class="card">
            <div class="card-body">
                <p class="card-title"><strong>Nombre: </strong>{{ $cliente->nombre }}</p>
                <p class="card-text"><strong>DNI:</strong> {{ $cliente->dni }}</p>
                <p class="card-text"><strong>Direccion:</strong> {{ $cliente->direccion }}</p>
                <p class="card-text"><strong>Teléfono:</strong> {{ $cliente->telefono }}</p>
                <p class="card-text"><strong>Fecha de nacimiento:</strong> {{ $cliente->fechaNac }}</p>
            </div>
        </div>
    </main>
    <footer>
        <p>liamthomas@epet12smandes.edu.ar &copy; Todos los derechos reservados.</p>
    </footer>
@endsection
