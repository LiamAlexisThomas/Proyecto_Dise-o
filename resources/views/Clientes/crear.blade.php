@extends('plantilla')

@section('titulo')
    Crear Cliente
@endsection

@section('contenido')
    <form action="{{url('clientes/grabar')}}" method="POST">
        @csrf
        <label for="nombre">Nombre
            <input name="nombre" type="text"> <br>
             @error('nombre')
                <small style="color: red">{{$message}}</small>
                <br>
            @enderror
        </label>
        <label for="dni">DNI
            <input name="dni" type="text"> <br>
             @error('dni')
                <small style="color: red">{{$message}}</small>
                <br>
            @enderror
        </label>
        <label for="direccion">Direccion
            <input name="direccion" type="text"> <br>
             @error('direccion')
                <small style="color: red">{{$message}}</small>
                <br>
            @enderror
        </label>
        <label for="telefono">Telefono
            <input name="telefono" type="text"> <br>
             @error('telefono')
                <small style="color: red">{{$message}}</small>
                <br>
            @enderror
        </label>
        <label for="fechaNac">Fecha de nacimiento
            <input name="fechaNac" type="date"> <br>
             @error('fechaNac')
                <small style="color: red">{{$message}}</small>
                <br>
            @enderror
        </label>
        <button type="submit">Grabar</button>
    </form>
@endsection