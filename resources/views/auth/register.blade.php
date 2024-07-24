<!DOCTYPE html>
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
</html>