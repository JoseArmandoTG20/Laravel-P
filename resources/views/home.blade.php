@extends('layouts.app')

@section('head')
    <-- Hello, Soy una Prueba -->
@endsection

@section('contenido')
<h1>Hola {{ Auth::user()->name}}</h1>

<a href="{{url('users')}}">Ir a Usuarios.</a>

<form method="post" action="{{url('logout')}}">
    @csrf

    <button type="submit">
        Salir
    </button>
</form>

@endsection
