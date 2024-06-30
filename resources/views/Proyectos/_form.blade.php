@extends('plantilla')

@section('titulo', 'Crear nuevo proyectos')

@section('contenido')
    <header>
        <h1>Gestión de proyectos</h1>
    </header>
    <nav>
        <a href="{{url('/proyectos/index')}}">Volver</a>
    </nav>
    <main>
        <h2>Crear nuevo proyectos</h2>
        <form action="{{ isset($proyecto) ? route('proyectos.actualizar', $proyecto->id) : route('proyectos.grabar') }}" method="POST">
            @csrf
            @isset($proyecto)
                @method('PATCH')
            @endisset
            <div class="form-group">
                <label for="confirmacion">Confirmacion (0/1)</label>
                <input type="text" name="confirmacion" id="confirmacion" class="form-control" value="{{ old('confirmacion', isset($proyecto) ? $proyecto->confirmacion : '') }}" required>
                @error('confirmacion')
                    <small style="color: red">{{$message}}</small>
                    <br>
                @enderror
            </div>
        
            <div class="form-group">
                <label for="fechaProy">Fecha</label>
                <input type="date" name="fechaProy" id="fechaProy" class="form-control" value="{{ old('fechaProy', isset($proyecto) ? $proyecto->fechaProy : '') }}" required>
                @error('fechaProy')
                    <small style="color: red">{{$message}}</small>
                    <br>
                @enderror
            </div>
        
            <div class="form-group">
                <label for="lugar">Lugar</label>
                <input type="address" name="lugar" id="lugar" class="form-control" value="{{ old('lugar', isset($proyecto) ? $proyecto->lugar : '') }}" required>
                @error('lugar')
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
   
