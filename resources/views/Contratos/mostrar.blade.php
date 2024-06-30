@extends('plantilla')

@section('titulo', 'Detalles del contrato')

@section('contenido')
    <div class="card">
        <div class="card-body">
            <p class="card-title"><strong>ID Contrato:</strong> {{ $contrato->id }} </p>
            <p class="card-text"><strong>ID Cliente:</strong> {{ $contrato->cliente_id }}</p>
            <p class="card-text"><strong>ID Diseñador:</strong> {{ $contrato->diseñador_id }}</p>
            <p class="card-text"><strong>ID Proyecto:</strong> {{ $contrato->proyecto_id }}</p>
        </div>
    </div>

    <a href="{{ route('contratos.index') }}" class="btn btn-secondary mt-3">Volver</a>
@endsection
