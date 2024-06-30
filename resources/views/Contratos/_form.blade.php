@extends('plantilla')

@section('titulo', 'Crear nuevo contrato')

@section('contenido')
    <header>
        <h1>Gestión de contratos</h1>
    </header>
    <nav>
        <a href="{{url('/contratos/index')}}">Volver</a>
    </nav>
    <main>
        <h2>Crear nuevo contrato</h2>
        <form action="{{ isset($contrato) ? route('contratos.actualizar', $contrato->id) : route('contratos.grabar') }}" method="POST">
            @csrf
            @isset($contrato)
                @method('PATCH')
            @endisset
            <div class="form-group">
                <label for="cliente_id">ID Cliente</label>
                <input type="text" name="cliente_id" id="cliente_id" class="form-control" value="{{ old('cliente_id', isset($contrato) ? $contrato->cliente_id : '') }}" required>
            </div>  
        
            <div class="form-group">
                <label for="diseñador_id">ID Diseñador</label>
                <input type="text" name="diseñador_id" id="diseñador_id" class="form-control" value="{{ old('diseñador_id', isset($contrato) ? $contrato->diseñador_id : '') }}" required>
            </div>
        
            <div class="form-group">
                <label for="proyecto_id">ID Proyecto</label>
                <input type="text" name="proyecto_id" id="proyecto_id" class="form-control" value="{{ old('proyecto_id', isset($contrato) ? $contrato->proyecto_id : '') }}" required>
            </div>
            
            <button type="submit" class="btn btn-primary" style="margin-top: 20px">Guardar</button>
        </form>
    </main>
    <footer>
        <p>liamthomas@epet12smandes.edu.ar &copy; Todos los derechos reservados.</p>
    </footer>
@endsection


    
