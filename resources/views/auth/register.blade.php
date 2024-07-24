@extends('layouts.app-master')

@section('title')
    <title>Registro</title>
@endsection

@section('content')
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card p-4 shadow-sm">
            <h2 class="text-center mb-4">Crear Cuenta</h2>
            <form action="/register" method="POST">
                <div class="mb-3">
                    <label for="fullName" class="form-label">Nombre Completo</label>
                    <input type="text" class="form-control" id="fullName" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="username" class="form-label">Nombre de Usuario</label>
                    <input type="text" class="form-control" id="username" name="username" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Correo</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <div class="mb-3">
                    <label for="confirmPassword" class="form-label">Repetir Contraseña</label>
                    <input type="password" class="form-control" id="confirmPassword" name="password_confirmation" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Registrar Cuenta</button>
            </form>
            <div class="mt-4">
                <p>¿tienes una cuenta? <a href="/login">inicia sesión</a></p>
                <a href="/home">volver</a>
            </div>
            <div></div>            
        </div>
    </div>    
@endsection

<!--<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>
<body>
    <form action="/register" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Nombre Completo">
        <input type="text" name="username" placeholder="Nombre de Usuario">
        <input type="email" name="email" placeholder="Email">
        <input type="password" name="password" placeholder="Contraseña">
        <input type="password" name="password_confirmation" placeholder="Repetir contraseña">
        <input type="submit" value="Registrarse">
    </form>
    <p>¿tienes una cuenta? <a href="/login">inicia sesión</a></p>
</body>
</html>-->