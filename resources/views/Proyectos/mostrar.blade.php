@extends('plantilla')

@section('titulo', 'Detalles del proyecto')

@section('contenido')
    <div class="card">
        <div class="card-body">
            <p class="card-title"><strong>ID: </strong>{{ $proyecto->id }}</p>
            <p class="card-text"><strong>Confirmacion:</strong> {{ $proyecto->confirmacion }}</p>
            <p class="card-text"><strong>Fecha:</strong> {{ $proyecto->fechaProy }}</p>
            <p class="card-text"><strong>Lugar:</strong> {{ $proyecto->lugar }}</p>
        </div>
    </div>

    <a href="{{ route('proyectos.index') }}" class="btn btn-secondary mt-3">Volver</a>
@endsection
