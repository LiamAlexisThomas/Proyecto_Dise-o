@extends('plantilla')
@section('titulo', 'Login')
@section('contenido')
    <h1>Login</h1>

    @guest
        <a class="nav-link {{ request()->routeIs('registro') ? 'active' : '' }}" aria-current="page" href="{{ route('registro') }}">Registro</a>
    @endguest

    <form action="{{ route('login') }}" method="POST">
        @csrf
        <label>
            <span>Email</span>

            <input name="email" type="email" value="{{ old('email') }}"> <br>
            @error('email')
                <small style="color: red">{{ $message }}</small>
                <br>
            @enderror
        </label>
        <label>
            <span>Password</span>

            <input name="password" type="password"> <br>
            @error('password')
                <small style="color: red">{{ $message }}</small>
                <br>
            @enderror
        </label>
        <label>
            <span>Recuerdame</span>
            <input name="remember" type="checkbox"> <br>
        </label>

        <button type="submit">Login</button> <br>

    </form>

@endsection