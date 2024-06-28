@extends('plantilla')

@section('titulo')
    Crear Contrato
@endsection

@section('contenido')
    <form action="{{url('contratos/grabar')}}" method="POST">
        @csrf
        <label for="cliente_id">ID Cliente
            <input name="cliente_id" type="text"> <br>
             @error('cliente_id')
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
        <label for="proyecto_id">ID Proyecto
            <input name="proyecto_id" type="text"> <br>
             @error('proyecto_id')
                <small style="color: red">{{$message}}</small>
                <br>
            @enderror
        </label>
        <button type="submit">Grabar</button>
    </form>
@endsection