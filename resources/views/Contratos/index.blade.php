@extends('plantilla')

@section('titulo')
    Contratos
@endsection

@section('contenido')
    @if (session('mensaje'))
        <div>{{session('mensaje')}}</div>
        <br>
    @endif

    <header>
        <h1>Gestión de contratos</h1>
    </header>
    <nav>
        <a href="{{url('/clientes/index')}}">Clientes</a>
        <a href="{{url('/diseñadors/index')}}">Diseñadores</a>
        <a href="{{url('/materials/index')}}">Materiales</a>
        <a href="{{url('/pagos/index')}}">Pagos</a>
        <a href="{{url('/proyectos/index')}}">Proyectos</a>
        <a href="{{url('/')}}">Principal</a>
    </nav>
    <main>
        <h2>Lista de contratos</h2>
        <a href="{{url('/contratos/crear')}}" class="btn btn-primary"><button style="margin-left: 1022px; width: 150px">Agregar contrato</button></a>
        <table>
            <thead>
                <tr>
                    <th>ID CLIENTE</th>
                    <th>ID DISEÑADOR</th>
                    <th>ID PROYECTO</th>
                    <th>ACCIONES</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contratos as $contrato)
                    <tr>
                        <td>{{ $contrato->cliente_id}}</td>
                        <td>{{ $contrato->diseñador_id}}</td>
                        <td>{{ $contrato->proyecto_id}}</td>
                        <td class="action-buttons">
                            <form action="{{route('contratos.eliminar', $contrato->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button style="width: 127px">
                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20" height="20" viewBox="0 0 30 30">
                                        <path d="M 14.984375 2.4863281 A 1.0001 1.0001 0 0 0 14 3.5 L 14 4 L 8.5 4 A 1.0001 1.0001 0 0 0 7.4863281 5 L 6 5 A 1.0001 1.0001 0 1 0 6 7 L 24 7 A 1.0001 1.0001 0 1 0 24 5 L 22.513672 5 A 1.0001 1.0001 0 0 0 21.5 4 L 16 4 L 16 3.5 A 1.0001 1.0001 0 0 0 14.984375 2.4863281 z M 6 9 L 7.7929688 24.234375 C 7.9109687 25.241375 8.7633438 26 9.7773438 26 L 20.222656 26 C 21.236656 26 22.088031 25.241375 22.207031 24.234375 L 24 9 L 6 9 z"></path>
                                    </svg>
                                    
                                </button>
                            </form>
                            <a href="{{route('contratos.mostrar', $contrato->id)}}" class="btn btn-primary"><button>Ver</button></a>
                            <a href="{{route('contratos.editar', $contrato->id)}}" class="btn btn-primary"><button>Editar</button></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </main>
    <footer>
        <p>liamthomas@epet12smandes.edu.ar &copy; Todos los derechos reservados.</p>
    </footer>
    <a href="{{url('/contratos/crear')}}" class="btn btn-primary">Agregar contrato</a>
@endsection