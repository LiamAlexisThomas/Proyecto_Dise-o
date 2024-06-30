@extends('plantilla')

@section('titulo', 'Detalles del diseñador')

@section('contenido')
    <header>
        <h1>Gestión de diseñadores</h1>
    </header>
    <nav>
        <a href="{{url('/diseñadors/index')}}">Volver</a>
    </nav>
    <main>
        <h2>Detalles del diseñador</h2>
        <div class="card">
            <div class="card-body">
                <p class="card-title"><strong>Nombre: </strong>{{ $diseñador->nombre }}</p>
                <p class="card-text"><strong>Email:</strong> {{ $diseñador->email }}</p>
                <p class="card-text"><strong>Telefono:</strong> {{ $diseñador->telefono }}</p>
                <p class="card-text"><strong>Fecha de nacimiento:</strong> {{ $diseñador->fechaNac }}</p>
            </div>
        </div>
    </main>
    <footer>
        <p>liamthomas@epet12smandes.edu.ar &copy; Todos los derechos reservados.</p>
    </footer>
@endsection
