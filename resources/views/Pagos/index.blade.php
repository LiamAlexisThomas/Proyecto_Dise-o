@extends('plantilla')

@section('titulo')
    Pagos
@endsection

@section('contenido')
    @if (session('mensaje'))
        <div>{{session('mensaje')}}</div>
        <br>
    @endif

    <header>
        <h1>Gestión de pagos</h1>
    </header>
    <nav>
        <a href="{{url('/clientes/index')}}">Clientes</a>
        <a href="{{url('/contratos/index')}}">Contratos</a>
        <a href="{{url('/diseñadors/index')}}">Diseñadores</a>
        <a href="{{url('/materials/index')}}">Materiales</a>
        <a href="{{url('/proyectos/index')}}">Proyectos</a>
        <a href="{{url('/')}}">Principal</a>
    </nav>
    <main>
        <h2>Lista de pagos</h2>
        <a href="{{url('/pagos/crear')}}" class="btn btn-primary"><button style="margin-left: 1022px; width: 150px">Agregar pago</button></a>
        <table>
            <thead>
                <tr>
                    <th>CUENTA DE PAGO</th>
                    <th>FECHA LIMITE</th>
                    <th>MONTO</th>
                    <th>TIPO</th>
                    <th>ACCIONES</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pagos as $pago)
                    <tr>
                        <td>{{$pago->cuentaPago}}</td>
                        <td>{{$pago->fechaLim}}</td>
                        <td>{{$pago->monto}}</td>
                        <td>{{$pago->tipo}}</td>
                        <td class="action-buttons">
                            <form action="{{route('pagos.eliminar', $pago->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button style="width: 127px">Eliminar</button>
                            </form>
                            <a href="{{route('pagos.mostrar', $pago->id)}}" class="btn btn-primary"><button>Ver</button></a>
                            <a href="{{route('pagos.editar', $pago->id)}}" class="btn btn-primary"><button>Editar</button></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </main>
    <footer>
        <p>liamthomas@epet12smandes.edu.ar &copy; Todos los derechos reservados.</p>
    </footer>
@endsection