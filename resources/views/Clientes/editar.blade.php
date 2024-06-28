@extends('plantilla')

@section('titulo')
    Editar Cliente 
@endsection

@section('contenido')
    <form action="{{route('clientes.actualizar', $cliente)}}" method="POST">
        @method('PATCH')
        @csrf
        <label for="nombre">Nombre
            <input name="nombre" type="text" value="{{ old('nombre', $cliente->nombre )}}"> <br>
             @error('nombre')
                <small style="color: red">{{$message}}</small>
                <br>
            @enderror
        </label>
        <label for="dni">DNI
            <input name="dni" type="text" value="{{ old('dni', $cliente->dni )}}"> <br>
             @error('dni')
                <small style="color: red">{{$message}}</small>
                <br>
            @enderror
        </label>
        <label for="direccion">Direccion
            <input name="direccion" type="text" value="{{ old('direccion', $cliente->direccion )}}"> <br>
             @error('direccion')
                <small style="color: red">{{$message}}</small>
                <br>
            @enderror
        </label>
        <label for="telefono">Telefono
            <input name="telefono" type="text" value="{{ old('telefono', $cliente->telefono )}}"> <br>
             @error('telefono')
                <small style="color: red">{{$message}}</small>
                <br>
            @enderror
        </label>
        <label for="fechaNac">Fecha de nacimiento
            <input name="fechaNac" type="date" value="{{ old('fechaNac', $cliente->fechaNac )}}"> <br>
             @error('fechaNac')
                <small style="color: red">{{$message}}</small>
                <br>
            @enderror
        </label>
        <button type="submit">Grabar</button>
    </form>
@endsection