@extends('plantilla')

@section('titulo', 'Detalles del material')

@section('contenido')
    <header>
        <h1>Gestión de materiales</h1>
    </header>
    <nav>
        <a href="{{url('/materials/index')}}">Volver</a>
    </nav>
    <main>
        <h2>Detalles del material</h2>
        <div class="card">
            <div class="card-body">
                <p class="card-text"><strong>Nombre:</strong> {{ $material->nombre }}</p>
                <p class="card-text"><strong>Descripcion:</strong> {{ $material->descripcion }}</p>
                <p class="card-text"><strong>Cantidad:</strong> {{ $material->cantidad }}</p>
                <p class="card-text"><strong>Precio unidad:</strong> {{ $material->precioUnid }}</p>
            </div>
        </div>
    </main>
    <footer>
        <p>liamthomas@epet12smandes.edu.ar &copy; Todos los derechos reservados.</p>
    </footer>
@endsection
