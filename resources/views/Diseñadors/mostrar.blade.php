@extends('plantilla')

@section('titulo', 'Detalles del diseñador')

@section('contenido')
    <div class="card">
        <div class="card-body">
            <p class="card-title"><strong>Nombre: </strong>{{ $diseñador->nombre }}</p>
            <p class="card-text"><strong>Email:</strong> {{ $diseñador->email }}</p>
            <p class="card-text"><strong>Telefono:</strong> {{ $diseñador->telefono }}</p>
            <p class="card-text"><strong>Fecha de nacimiento:</strong> {{ $diseñador->fechaNac }}</p>
        </div>
    </div>

    <a href="{{ route('diseñadors.index') }}" class="btn btn-secondary mt-3">Volver</a>
@endsection
