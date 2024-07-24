<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bienvenido</title>
</head>
<body>
    <h1>Home</h1>
    @auth
        <p>Bienvenido {{auth()->user()->username}}</p> 
        <a href="/logout">salir</a>
    @endauth
    @guest
        Bienvenido invitado, para acceder a todo el contenido <a href="/login">inicia sesión</a> o <a href="/register">regístrate</a>
    @endguest
</body>
</html>