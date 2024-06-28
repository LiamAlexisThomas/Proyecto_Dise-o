@extends('plantilla')

@section('titulo')
    Crear Material
@endsection

@section('contenido')
    <form action="{{url('materials/grabar')}}" method="POST">
        @csrf
        <label for="nombre">Nombre
            <input name="nombre" type="text"> <br>
             @error('nombre')
                <small style="color: red">{{$message}}</small>
                <br>
            @enderror
        </label>
        <label for="descripcion">Descripcion
            <input name="descripcion" type="text"> <br>
             @error('descripcion')
                <small style="color: red">{{$message}}</small>
                <br>
            @enderror
        </label>
        <label for="cantidad">Cantidad
            <input name="cantidad" type="text"> <br>
             @error('cantidad')
                <small style="color: red">{{$message}}</small>
                <br>
            @enderror
        </label>
        <label for="precioUnid">Precio Unidad
            <input name="precioUnid" type="text"> <br>
             @error('precioUnid')
                <small style="color: red">{{$message}}</small>
                <br>
            @enderror
        </label>
        <button type="submit">Grabar</button>
    </form>
@endsection