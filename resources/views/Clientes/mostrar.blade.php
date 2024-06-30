@extends('plantilla')

@section('titulo', 'Detalles del Cliente')

@section('contenido')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $cliente->nombre }}</h5>
            <p class="card-text"><strong>DNI:</strong> {{ $cliente->dni }}</p>
            <p class="card-text"><strong>Direccion:</strong> {{ $cliente->direccion }}</p>
            <p class="card-text"><strong>Teléfono:</strong> {{ $cliente->telefono }}</p>
            <p class="card-text"><strong>Fecha de nacimiento:</strong> {{ $cliente->fechaNac }}</p>
        </div>
    </div>

    <a href="{{ route('clientes.index') }}" class="btn btn-secondary mt-3">Volver</a>
@endsection
