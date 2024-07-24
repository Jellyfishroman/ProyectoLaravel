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
        @csrf
        <input type="text" name="username" placeholder="nombre de usuario o correo">
        <input type="password" name="password" placeholder="contraseña">
        <input type="submit" value="iniciar sesion">
    </form>
    <p>¿no tienes una cuenta? <a href="/register">registrate</a></p>
</body>
</html>