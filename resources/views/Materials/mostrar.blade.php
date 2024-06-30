@extends('plantilla')

@section('titulo', 'Detalles del material')

@section('contenido')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $material->nombre }}</h5>
            <p class="card-text"><strong>Nombre:</strong> {{ $material->nombre }}</p>
            <p class="card-text"><strong>Descripcion:</strong> {{ $material->descripcion }}</p>
            <p class="card-text"><strong>Cantidad:</strong> {{ $material->cantidad }}</p>
            <p class="card-text"><strong>Precio unidad:</strong> {{ $material->precioUnid }}</p>
        </div>
    </div>

    <a href="{{ route('materials.index') }}" class="btn btn-secondary mt-3">Volver</a>
@endsection
