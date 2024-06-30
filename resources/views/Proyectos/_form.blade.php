<form action="{{ isset($proyecto) ? route('proyectos.actualizar', $proyecto->id) : route('proyectos.grabar') }}" method="POST">
    @csrf
    @isset($proyecto)
        @method('PATCH')
    @endisset
    <div class="form-group">
        <label for="confirmacion">Confirmacion (0/1)</label>
        <input type="confirmacion" name="confirmacion" id="confirmacion" class="form-control" value="{{ old('confirmacion', isset($proyecto) ? $proyecto->confirmacion : '') }}" required>
    </div>

    <div class="form-group">
        <label for="fechaProy">Fecha</label>
        <input type="date" name="fechaProy" id="fechaProy" class="form-control" value="{{ old('fechaProy', isset($proyecto) ? $proyecto->fechaProy : '') }}" required>
    </div>

    <div class="form-group">
        <label for="lugar">Lugar</label>
        <input type="address" name="lugar" id="lugar" class="form-control" value="{{ old('lugar', isset($proyecto) ? $proyecto->lugar : '') }}" required>
    </div>
    
    <button type="submit" class="btn btn-primary">Guardar</button>
</form>


    
