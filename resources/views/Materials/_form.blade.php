<form action="{{ isset($material) ? route('materials.actualizar', $material->id) : route('materials.grabar') }}" method="POST">
    @csrf
    @isset($material)
        @method('PATCH')
    @endisset
    <div class="form-group">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre" class="form-control" value="{{ old('nombre', isset($material) ? $material->nombre : '') }}" required>
    </div>  

    <div class="form-group">
        <label for="descripcion">Descripcion</label>
        <input type="text" name="descripcion" id="descripcion" class="form-control" value="{{ old('descripcion', isset($material) ? $material->descripcion : '') }}" required>
    </div>

    <div class="form-group">
        <label for="cantidad">Cantidad</label>
        <input type="text" name="cantidad" id="cantidad" class="form-control" value="{{ old('cantidad', isset($material) ? $material->cantidad : '') }}" required>
    </div>

    <div class="form-group">
        <label for="precioUnid">Precio unidad</label>
        <input type="text" name="precioUnid" id="precioUnid" class="form-control" value="{{ old('precioUnid', isset($material) ? $material->precioUnid : '') }}" required>
    </div>
    
    <button type="submit" class="btn btn-primary">Guardar</button>
</form>


    
