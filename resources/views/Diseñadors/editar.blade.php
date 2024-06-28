@extends('plantilla')

@section('titulo')
    Editar Diseñador
@endsection

@section('contenido')
    <form action="{{route('diseñadors.actualizar', $diseñador)}}" method="POST">
        @method('PATCH')
        @csrf
        <label for="nombre">Nombre
            <input name="nombre" type="text" value="{{ old('nombre', $diseñador->nombre )}}"> <br>
             @error('nombre')
                <small style="color: red">{{$message}}</small>
                <br>
            @enderror
        </label>
        <label for="email">E-mail
            <input name="email" type="text" value="{{ old('email', $diseñador->email )}}"> <br>
             @error('email')
                <small style="color: red">{{$message}}</small>
                <br>
            @enderror
        </label>
        <label for="telefono">Telefono
            <input name="telefono" type="text" value="{{ old('telefono', $diseñador->telefono )}}"> <br>
             @error('telefono')
                <small style="color: red">{{$message}}</small>
                <br>
            @enderror
        </label>
        <label for="fechaNac">Fecha de nacimiento
            <input name="fechaNac" type="date" value="{{ old('fechaNac', $diseñador->fechaNac )}}"> <br>
             @error('fechaNac')
                <small style="color: red">{{$message}}</small>
                <br>
            @enderror
        </label>
        <button type="submit">Grabar</button>
    </form>
@endsection