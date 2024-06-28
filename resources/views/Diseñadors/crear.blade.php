@extends('plantilla')

@section('titulo')
    Crear Diseñador
@endsection

@section('contenido')
    <form action="{{url('diseñadors/grabar')}}" method="POST">
        @csrf
        <label for="nombre">Nombre
            <input name="nombre" type="text"> <br>
             @error('nombre')
                <small style="color: red">{{$message}}</small>
                <br>
            @enderror
        </label>
        <label for="email">E-mail
            <input name="email" type="text"> <br>
             @error('email')
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