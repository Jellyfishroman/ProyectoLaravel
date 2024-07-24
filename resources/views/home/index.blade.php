@extends('layouts.app-master')

@section('title')
    <title>Home</title>
@endsection

@section('content')
    <h1>HOME</h1>
    @auth
        <p>Bienvenido {{auth()->user()->username}}</p> 
        <a href="/logout">salir</a>
    @endauth
    
    @guest
        <p>Bienvenido invitado, para acceder a todo el contenido <a href="/login">inicia sesión</a> o <a href="/register">regístrate</a></p>
    @endguest  
@endsection

