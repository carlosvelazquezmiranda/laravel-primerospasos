@include("bootstrap")
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pagina de Inicio</title>
</head>
<body>


    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{(session('status'))}}
    </div>
        
    @endif
    @if (session('status2'))
    <div class="alert alert-danger" role="alert">
        {{(session('status2'))}}
    </div>
        
    @endif

    <a href=" {{ route("alumnos.create")}} "> Crear</a>

    <center>Listado de la tabla alumnos</center>
    <table class="table">
        <thead>
        <tr>
            <td>Nombre</td>
            <td>Edad</td>
            <td>Fecha cumpleaños</td>
            <td></td>
            <td></td>
        </tr>
        </thead>
        <tbody>
        
        @foreach ($lista as $l)
        <tr>
            <td>{{$l->Nombre}}</td>
            <td>{{$l->edad}}</td>
            <td>{{$l->fecha_cumpleanios}}</td>
            <td> <a href=" {{ route("alumnos.show", $l->idalumno)}} "> Ver</a> </td>
            <td> <a href=" {{ route("alumnos.edit", $l->idalumno)}} "> Editar</a> </td>
            <td> 
                <form action="{{ route("alumnos.destroy",$l->idalumno)}}" method="post">
                    @method("DELETE")
                    @csrf
           <input type="submit" value="Eliminar">
            </form>
        </td>
        </tr>
        @endforeach
       
        </tbody>
    </table>
    {{ $lista->links() }}
</body>
</html>