@extends('plantilla')

@section('titulo', 'Crear nuevo diseñador')

@section('contenido')
    <header>
        <h1>Gestión de diseñadores</h1>
    </header>
    <nav>
        <a href="{{url('/diseñadors/index')}}">Volver</a>
    </nav>
    <main>
        <h2>Crear nuevo diseñador</h2>
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
                <input type="text" name="telefono" id="telefono" class="form-control" value="{{ old('telefono', isset($diseñador) ? $diseñador->telefono : '') }}" required>
            </div>
        
            <div class="form-group">
                <label for="fechaNac">Fecha de nacimiento</label>
                <input type="date" name="fechaNac" id="fechaNac" class="form-control" value="{{ old('fechaNac', isset($diseñador) ? $diseñador->fechaNac : '') }}" required>
            </div>
            
            <button type="submit" class="btn btn-primary" style="margin-top: 20px">Guardar</button>
        </form>
    </main>
    <footer>
        <p>liamthomas@epet12smandes.edu.ar &copy; Todos los derechos reservados.</p>
    </footer>
@endsection




    
