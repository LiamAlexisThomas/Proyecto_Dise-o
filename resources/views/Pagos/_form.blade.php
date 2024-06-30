<form action="{{ isset($pago) ? route('pagos.actualizar', $pago->id) : route('pagos.grabar') }}" method="POST">
    @csrf
    @isset($pago)
        @method('PATCH')
    @endisset
    <div class="form-group">
        <label for="cuentaPago">Cuenta de pago</label>
        <input type="text" name="cuentaPago" id="cuentaPago" class="form-control" value="{{ old('cuentaPago', isset($pago) ? $pago->cuentaPago : '') }}" required>
    </div>  

    <div class="form-group">
        <label for="fechaLim">Fecha limite</label>
        <input type="date" name="fechaLim" id="fechaLim" class="form-control" value="{{ old('fechaLim', isset($pago) ? $pago->fechaLim : '') }}" required>
    </div>

    <div class="form-group">
        <label for="monto">Monto</label>
        <input type="monto" name="monto" id="monto" class="form-control" value="{{ old('monto', isset($pago) ? $pago->monto : '') }}" required>
    </div>

    <div class="form-group">
        <label for="tipo">Tipo</label>
        <input type="text" name="tipo" id="tipo" class="form-control" value="{{ old('tipo', isset($pago) ? $pago->tipo : '') }}" required>
    </div>
    
    <button type="submit" class="btn btn-primary">Guardar</button>
</form>


    
