@include("bootstrap")
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar alumnos</title>
</head>
<body>
    <div class="container text-center">
     
        <div class="row">
          <div class="col">
            1 of 3
        
          </div>
          <div class="col">
            <h1>Crear alumnos</h1>
            <p>Editar el alumno: {{$parametros[0]['Nombre']}}</p>
            <form class="form-control" action="{{ route('alumnos.update',$parametros[0]['idalumno'])}}" method="post">
                @csrf
                @method("PUT")
                
                <input class="form-control" type="hidden" name="idalumno" id="idalumno"  value="{{$parametros[0]['idalumno'] }}" >
                <input class="form-control" type="text" name="Nombre" id="Nombre" placeholder="Nombre"  value="{{$parametros[0]['Nombre']}}" >
                <input class="form-control" type="number" name="edad" id="edad" placeholder="edad" value="{{$parametros[0]['edad']}}" >
                <label>Fecha</label>
                
                <input class="form-control" type="date" name="fecha_cumpleanios" id="fecha_cumpleanios" value="{{Carbon\Carbon::parse($parametros[0]['fecha_cumpleanios'])->format('Y-m-d')}}">
                <select name="nombres">
                    <option value=""> </option>
                    @foreach ($alumnos2 as $N )
                      <option  {{ $N->idalumno == $parametros[0]['idalumno'] ? 'selected' :' '}} value="{{ $parametros[0]['idalumno'] }}" >{{$N->Nombre}}</option>
                    @endforeach
                </select>
                
                <button type="submit"> Enviar</button>
        
            </form>



          </div>
          <div class="col">
            3 of 3
        @include('dashboard._errors._errores')
          
              
          
          </div>
        </div>
      </div>
   
</body>
</html>