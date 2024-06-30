@extends('plantilla')

@section('titulo', 'Detalles del pago')

@section('contenido')
    <header>
        <h1>Gestión de pagos</h1>
    </header>
    <nav>
        <a href="{{url('/pagos/index')}}">Volver</a>
    </nav>
    <main>
        <h2>Detalles del pago</h2>
        <div class="card">
            <div class="card-body">
                <p class="card-title">{{ $pago->nombre }}</p>
                <p class="card-text"><strong>Cuenta de pago:</strong> {{ $pago->cuentaPago }}</p>
                <p class="card-text"><strong>Fecha limite:</strong> {{ $pago->fechaLim }}</p>
                <p class="card-text"><strong>Monto:</strong> {{ $pago->monto }}</p>
                <p class="card-text"><strong>Tipo:</strong> {{ $pago->tipo }}</p>
            </div>
        </div>
    </main>
    <footer>
        <p>liamthomas@epet12smandes.edu.ar &copy; Todos los derechos reservados.</p>
    </footer>
@endsection
