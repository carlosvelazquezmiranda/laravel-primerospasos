<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Probando los componentes de la plantilla BLADE</title>
</head>
<body>

    <p>Esta es una impresion de datos</p>
    <p>Nombre : {{ $user->name }} </p>
    <p>Email :  {{ $user->email }}</p>

    <p>Codigo sin escape {{$html}}</p>
    <p> Escapando codigo html o java script</p>
    <p> {!! $html !!}</p>

    <p>Comentarios</p>
    <p>Email :  {{-- $user->email --}}</p>

    <p>Condicionales</p>
    @if ($edad >= 18)
    Es una persona adulta!
    @elseif ($edad < 1  || $edad > 100)
        No se pase de pendejo esa no es una edad correcta!
    @else
        No es una persona adulta!
    @endif


    <p>Ciclos</p>
    {{ count($usuarios)}}
    {{$usuarios[0]['name']}}
    {{$usuarios[1]['name']}}
    <p>Ciclo que muestra el paso de los años de tu edad </p>
    @for ($i = 0; $i < $edad; $i++)
    Tu edad es {{ $i }}
    @endfor

<br>
    @for ($i = 0; $i < count($usuarios) ; $i++)
    {{$usuarios[$i]['name']}} <br>
    @endfor


    <p>Ciclo que recorre todos los nombres</p>
    @foreach ($user as $userr)
    <p>El nombre de usuario es: {{ $userr }}</p>
    @endforeach

    <p>Ciclo que muestra si hay datos , si no hay datos no muestra nada</p>
    @forelse ($user as $userr)
    <li>{{ $userr }}</li>
    @empty
    <p>No users</p>
    @endforelse

</body>
</html>