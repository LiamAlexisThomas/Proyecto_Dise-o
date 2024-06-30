@extends('plantilla')

@section('titulo', 'Crear nuevo pago')

@section('contenido')
    <header>
        <h1>Gestión de pagos</h1>
    </header>
    <nav>
        <a href="{{url('/pagos/index')}}">Volver</a>
    </nav>
    <main>
        <h2>Crear nuevo pago</h2>
        <form action="{{ isset($pago) ? route('pagos.actualizar', $pago->id) : route('pagos.grabar') }}" method="POST">
            @csrf
            @isset($pago)
                @method('PATCH')
            @endisset
            <div class="form-group">
                <label for="cuentaPago">Cuenta de pago</label>
                <input type="text" name="cuentaPago" id="cuentaPago" class="form-control" value="{{ old('cuentaPago', isset($pago) ? $pago->cuentaPago : '') }}" required>
                @error('cuentaPago')
                    <small style="color: red">{{$message}}</small>
                    <br>
                @enderror
            </div>  
        
            <div class="form-group">
                <label for="fechaLim">Fecha limite</label>
                <input type="date" name="fechaLim" id="fechaLim" class="form-control" value="{{ old('fechaLim', isset($pago) ? $pago->fechaLim : '') }}" required>
                @error('fechaLim')
                    <small style="color: red">{{$message}}</small>
                    <br>
                @enderror
            </div>
        
            <div class="form-group">
                <label for="monto">Monto</label>
                <input type="text" name="monto" id="monto" class="form-control" value="{{ old('monto', isset($pago) ? $pago->monto : '') }}" required>
                @error('monto')
                    <small style="color: red">{{$message}}</small>
                    <br>
                @enderror
            </div>
        
            <div class="form-group">
                <label for="tipo">Tipo</label>
                <input type="text" name="tipo" id="tipo" class="form-control" value="{{ old('tipo', isset($pago) ? $pago->tipo : '') }}" required>
                @error('tipo')
                    <small style="color: red">{{$message}}</small>
                    <br>
                @enderror
            </div>
            
            <button type="submit" class="btn btn-primary" style="margin-top: 20px">Guardar</button>
        </form>
    </main>
    <footer>
        <p>liamthomas@epet12smandes.edu.ar &copy; Todos los derechos reservados.</p>
    </footer>
@endsection



    
