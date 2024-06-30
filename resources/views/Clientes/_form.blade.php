<form action="{{ isset($cliente) ? route('clientes.actualizar', $cliente->id) : route('clientes.grabar') }}" method="POST">
    @csrf
    @isset($cliente)
        @method('PATCH')
    @endisset
    <div class="form-group">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre" class="form-control" value="{{ old('nombre', isset($cliente) ? $cliente->nombre : '') }}" required>
    </div>  

    <div class="form-group">
        <label for="dni">DNI</label>
        <input type="text" name="dni" id="dni" class="form-control" value="{{ old('dni', isset($cliente) ? $cliente->dni : '') }}" required>
    </div>

    <div class="form-group">
        <label for="direccion">Direccion</label>
        <input type="direccion" name="direccion" id="direccion" class="form-control" value="{{ old('direccion', isset($cliente) ? $cliente->direccion : '') }}" required>
    </div>

    <div class="form-group">
        <label for="telefono">Teléfono</label>
        <input type="text" name="telefono" id="telefono" class="form-control" value="{{ old('telefono', isset($cliente) ? $cliente->telefono : '') }}" required>
    </div>

    <div class="form-group">
        <label for="fechaNac">Fecha de nacimiento</label>
        <input type="date" name="fechaNac" id="fechaNac" class="form-control" value="{{ old('fechaNac', isset($cliente) ? $cliente->fechaNac : '') }}" required>
    </div>
    
    <button type="submit" class="btn btn-primary">Guardar</button>
</form>


    
