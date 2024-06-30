@extends('plantilla')

@section('titulo', 'Detalles del contrato')

@section('contenido')
    <header>
        <h1>Gestión de contratos</h1>
    </header>
    <nav>
        <a href="{{url('/contratos/index')}}">Volver</a>
    </nav>
    <main>
        <h2>Detalles del contrato</h2>
        <div class="card">
            <div class="card-body">
                <p class="card-title"><strong>ID Contrato:</strong> {{ $contrato->id }} </p>
                <p class="card-text"><strong>ID Cliente:</strong> {{ $contrato->cliente_id }}</p>
                <p class="card-text"><strong>ID Diseñador:</strong> {{ $contrato->diseñador_id }}</p>
                <p class="card-text"><strong>ID Proyecto:</strong> {{ $contrato->proyecto_id }}</p>
            </div>
        </div>
    </main>
    <footer>
        <p>liamthomas@epet12smandes.edu.ar &copy; Todos los derechos reservados.</p>
    </footer>
@endsection
