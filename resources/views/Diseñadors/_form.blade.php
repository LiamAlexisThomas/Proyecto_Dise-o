<form action="{{ isset($diseñador) ? route('diseñadors.actualizar', $diseñador->id) : route('diseñadors.grabar') }}" method="POST">
    @csrf
    @isset($diseñador)
        @method('PATCH')
    @endisset
    <div class="form-group">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre" class="form-control" value="{{ old('nombre', isset($diseñador) ? $diseñador->nombre : '') }}" required>
    </div>  

    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" name="email" id="email" class="form-control" value="{{ old('email', isset($diseñador) ? $diseñador->email : '') }}" required>
    </div>

    <div class="form-group">
        <label for="telefono">Telefono</label>
        <input type="telefono" name="telefono" id="telefono" class="form-control" value="{{ old('telefono', isset($diseñador) ? $diseñador->telefono : '') }}" required>
    </div>

    <div class="form-group">
        <label for="fechaNac">Fecha de nacimiento</label>
        <input type="date" name="fechaNac" id="fechaNac" class="form-control" value="{{ old('fechaNac', isset($diseñador) ? $diseñador->fechaNac : '') }}" required>
    </div>
    
    <button type="submit" class="btn btn-primary">Guardar</button>
</form>


    
