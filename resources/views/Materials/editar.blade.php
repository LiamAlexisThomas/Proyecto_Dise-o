@extends('plantilla')

@section('titulo')
    Editar Material
@endsection

@section('contenido')
    <form action="{{route('materials.actualizar', $material)}}" method="POST">
        @method('PATCH')
        @csrf
        <label for="nombre">Nombre
            <input name="nombre" type="text" value="{{ old('nombre', $material->nombre )}}"> <br>
             @error('nombre')
                <small style="color: red">{{$message}}</small>
                <br>
            @enderror
        </label>
        <label for="descripcion">Descripcion
            <input name="descripcion" type="text" value="{{ old('descripcion', $material->descripcion )}}"> <br>
             @error('descripcion')
                <small style="color: red">{{$message}}</small>
                <br>
            @enderror
        </label>
        <label for="cantidad">Cantidad
            <input name="cantidad" type="text" value="{{ old('cantidad', $material->cantidad )}}"> <br>
             @error('cantidad')
                <small style="color: red">{{$message}}</small>
                <br>
            @enderror
        </label>
        <label for="precioUnid">Precio Unidad
            <input name="precioUnid" type="text" value="{{ old('precioUnid', $material->precioUnid )}}"> <br>
             @error('precioUnid')
                <small style="color: red">{{$message}}</small>
                <br>
            @enderror
        </label>
        <button type="submit">Grabar</button>
    </form>
@endsection