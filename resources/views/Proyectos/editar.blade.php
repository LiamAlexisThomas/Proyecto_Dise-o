@extends('plantilla')

@section('titulo')
    Editar Proyecto
@endsection

@section('contenido')
   <form action="{{route('proyectos.actualizar', $proyecto)}}" method="POST">
        @method('PATCH')
        @csrf
        <label for="material_id">ID Material
            <input name="material_id" type="text" value="{{ old('material_id', $proyecto->material_id )}}"> <br>
             @error('material_id')
                <small style="color: red">{{$message}}</small>
                <br>
            @enderror
        </label>
        <label for="diseñador_id">ID Diseñador
            <input name="diseñador_id" type="text" value="{{ old('diseñador_id', $proyecto->diseñador_id )}}"> <br>
             @error('diseñador_id')
                <small style="color: red">{{$message}}</small>
                <br>
            @enderror
        </label>
        <label for="confirmacion">Confirmacion (0/1)
            <input name="confirmacion" type="text" value="{{ old('confirmacion', $proyecto->confirmacion )}}"> <br>
             @error('confirmacion')
                <small style="color: red">{{$message}}</small>
                <br>
            @enderror
        </label>
        <label for="fechaProy">Fecha
            <input name="fechaProy" type="date" value="{{ old('fechaProy', $proyecto->fechaProy )}}"> <br>
             @error('fechaProy')
                <small style="color: red">{{$message}}</small>
                <br>
            @enderror
        </label>
        <label for="lugar">Lugar
            <input name="lugar" type="text" value="{{ old('lugar', $proyecto->lugar )}}"> <br>
             @error('lugar')
                <small style="color: red">{{$message}}</small>
                <br>
            @enderror
        </label>
        <button type="submit">Grabar</button>
    </form>
@endsection