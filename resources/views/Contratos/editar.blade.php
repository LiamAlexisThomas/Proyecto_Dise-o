@extends('plantilla')

@section('titulo')
    Editar contrato
@endsection

@section('contenido')
    <form action="{{route('contratos.actualizar', $contrato)}}" method="POST">
        @method('PATCH')
        @csrf
        <label for="cliente_id">ID Cliente
            <input name="cliente_id" type="text" value="{{ old('cliente_id', $contrato->cliente_id )}}"> <br>
             @error('cliente_id')
                <small style="color: red">{{$message}}</small>
                <br>
            @enderror
        </label>
        <label for="diseñador_id">ID Diseñador
            <input name="diseñador_id" type="text" value="{{ old('diseñador_id', $contrato->diseñador_id )}}"> <br>
             @error('diseñador_id')
                <small style="color: red">{{$message}}</small>
                <br>
            @enderror
        </label>
        <label for="proyecto_id">ID Proyecto
            <input name="proyecto_id" type="text" value="{{ old('proyecto_id', $contrato->proyecto_id )}}"> <br>
             @error('proyecto_id')
                <small style="color: red">{{$message}}</small>
                <br>
            @enderror
        </label>
        <button type="submit">Grabar</button>
    </form>
@endsection