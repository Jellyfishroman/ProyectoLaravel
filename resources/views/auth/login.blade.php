@extends('layouts.app-master')

@section('title')
    <title>login</title>
@endsection

@section('content')
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card p-4 shadow-sm">
            <h2 class="text-center mb-4">Iniciar Sesión</h2>
            <form action="/login" method="POST">
                @csrf
                @include('layouts.partials.messages')
                <div class="mb-3">
                    <label for="username" class="form-label">Nombre de Usuario / Correo</label>
                    <input type="text" class="form-control" id="username" name="username" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Iniciar Sesión</button>
            </form>
            <div class="mt-2">
                <p>¿no tienes una cuenta? <a href="/register">registrate</a></p>
                <a href="/home">volver</a>
            </div>
        </div>
    </div>
    
@endsection


<!--
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <form action="/login" method="POST">
        
        <input type="text" name="username" placeholder="nombre de usuario o correo">
        <input type="password" name="password" placeholder="contraseña">
        <input type="submit" value="iniciar sesion">
    </form>
    <p>¿no tienes una cuenta? <a href="/register">registrate</a></p>
</body>
</html>
-->