<form action="{{ isset($proyecto) ? route('proyectos.actualizar', $proyecto->id) : route('proyectos.grabar') }}" method="POST">
    @csrf
    @isset($proyecto)
        @method('PATCH')
    @endisset
    <div class="form-group">
        <label for="material_id">ID Material</label>
        <input type="text" name="material_id" id="material_id" class="form-control" value="{{ old('material_id', isset($proyecto) ? $proyecto->material_id : '') }}" required>
    </div>  

    <div class="form-group">
        <label for="diseñador_id">ID Diseñador</label>
        <input type="text" name="diseñador_id" id="diseñador_id" class="form-control" value="{{ old('diseñador_id', isset($proyecto) ? $proyecto->diseñador_id : '') }}" required>
    </div>

    <div class="form-group">
        <label for="confirmacion">Confirmacion</label>
        <input type="confirmacion" name="confirmacion" id="confirmacion" class="form-control" value="{{ old('confirmacion', isset($proyecto) ? $proyecto->confirmacion : '') }}" required>
    </div>

    <div class="form-group">
        <label for="fecha">Fecha</label>
        <input type="text" name="fecha" id="fecha" class="form-control" value="{{ old('fecha', isset($proyecto) ? $proyecto->fecha : '') }}" required>
    </div>

    <div class="form-group">
        <label for="lugar">Lugar</label>
        <input type="date" name="lugar" id="lugar" class="form-control" value="{{ old('lugar', isset($proyecto) ? $proyecto->lugar : '') }}" required>
    </div>
    
    <button type="submit" class="btn btn-primary">Guardar</button>
</form>


    
