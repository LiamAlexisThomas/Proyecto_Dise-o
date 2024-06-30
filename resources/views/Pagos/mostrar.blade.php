@extends('plantilla')

@section('titulo', 'Detalles del pago')

@section('contenido')
    <div class="card">
        <div class="card-body">
            <p class="card-title">{{ $pago->nombre }}</p>
            <p class="card-text"><strong>Cuenta de pago:</strong> {{ $pago->cuentaPago }}</p>
            <p class="card-text"><strong>Fecha limite:</strong> {{ $pago->fechaLim }}</p>
            <p class="card-text"><strong>Monto:</strong> {{ $pago->monto }}</p>
            <p class="card-text"><strong>Tipo:</strong> {{ $pago->tipo }}</p>
        </div>
    </div>

    <a href="{{ route('pagos.index') }}" class="btn btn-secondary mt-3">Volver</a>
@endsection
