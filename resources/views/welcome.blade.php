<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Bienvenido</h1>
    <a href="{{ route('inicio') }}">Inicio</a>
    <a href="/contacto">Contacto</a>
    <a href="{{ route('contacto') }}">Ruta con nombre Contacto</a>
    {{ $user->name}}
</body>
</html>