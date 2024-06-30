@extends('plantilla')

@section('titulo', 'Detalles del proyecto')

@section('contenido')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $proyecto->nombre }}</h5>
            <p class="card-text"><strong>ID Material:</strong> {{ $proyecto->material_id }}</p>
            <p class="card-text"><strong>ID Diseñador:</strong> {{ $proyecto->diseñador_id }}</p>
            <p class="card-text"><strong>Confirmacion:</strong> {{ $proyecto->confirmacion }}</p>
        </div>
    </div>

    <a href="{{ route('proyectos.index') }}" class="btn btn-secondary mt-3">Volver</a>
@endsection
