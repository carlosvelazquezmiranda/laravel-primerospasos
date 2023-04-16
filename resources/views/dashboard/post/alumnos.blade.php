@include("bootstrap")
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create alumnos</title>
</head>
<body>
    <div class="container text-center">
     
        <div class="row">
          <div class="col">
            1 of 3
        
          </div>
          <div class="col">
            <h1>Crear alumnos</h1>
            <form class="form-control" action="{{ route('alumnos.store')}}" method="post" enctype="multipart/form-data">
                @csrf
        
                <input class="form-control" type="text" name="Nombre" id="Nombre" placeholder="Nombre" value="{{ old("Nombre"," ")}}" >
                <input class="form-control" type="number" name="edad" id="edad" placeholder="edad" value="{{ old("edad"," ")}}">
                <label>Fecha</label>
                <input class="form-control" type="date" name="fecha_cumpleanios" id="fecha_cumpleanios" value="{{ old("fecha_cumpleanios"," ")}}">
                <select name="nombres">
                    <option value=""></option>
                    @foreach ($todos_nombres as $N)
                    <option {{ old("nombres","") == $N->idalumno ? "selected" : "" }} value="{{$N->idalumno}}">{{$N->Nombre}}</option>
                        
                    @endforeach
                </select>
                <input type="file" name="imagen">
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