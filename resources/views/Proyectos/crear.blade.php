@extends('plantilla')

@section('titulo')
    Crear Proyecto
@endsection

@section('contenido')
    <form action="{{url('proyectos/grabar')}}" method="POST">
        @csrf
        <label for="material_id">ID Material
            <input name="material_id" type="text"> <br>
             @error('material_id')
                <small style="color: red">{{$message}}</small>
                <br>
            @enderror
        </label>
        <label for="diseñador_id">ID Diseñador
            <input name="diseñador_id" type="text"> <br>
             @error('diseñador_id')
                <small style="color: red">{{$message}}</small>
                <br>
            @enderror
        </label>
        <label for="confirmacion">Confirmacion (0/1)
            <input name="confirmacion" type="text"> <br>
             @error('confirmacion')
                <small style="color: red">{{$message}}</small>
                <br>
            @enderror
        </label>
        <label for="fechaProy">Fecha
            <input name="fechaProy" type="date"> <br>
             @error('fechaProy')
                <small style="color: red">{{$message}}</small>
                <br>
            @enderror
        </label>
        <label for="lugar">Lugar
            <input name="lugar" type="text"> <br>
             @error('lugar')
                <small style="color: red">{{$message}}</small>
                <br>
            @enderror
        </label>
        <button type="submit">Grabar</button>
    </form>
@endsection