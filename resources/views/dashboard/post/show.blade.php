<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalle del alumno</title>
</head>
<body>
    <p>Detalle del Alumno</p>
    <p>Nombre: {{$parametros[0]['Nombre']}}</p>
    <p>Edad: {{$parametros[0]['edad']}}</p>
    <p>Cumpleaños: {{$parametros[0]['fecha_cumpleanios']}}</p>
</body>
</html>