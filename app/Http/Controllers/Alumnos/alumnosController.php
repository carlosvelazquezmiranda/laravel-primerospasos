<?php

namespace App\Http\Controllers\Alumnos;

use  App\Http\Requests\alumnos\storerequest;
use App\Http\Controllers\Controller;
use App\Models\alumnos;
use Illuminate\Http\Request;
use Carbon\Carbon;

class alumnosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lista =  alumnos::paginate(5);
        return view("dashboard/post/index", compact('lista'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //$todos_nombres = alumnos::get();
        
        $todos_nombres = alumnos::select("*")
            ->where([
                ["edad",">=",18],
                ["Nombre","=","Carlos"]
            ])->get();

      return view("dashboard/post/alumnos",compact('todos_nombres'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(storerequest $request)
    {
        //echo request('Nombre');
        $nombre = trim($request->input('Nombre'));
        $edad = trim($request->input('edad'));
        $fecha = trim($request->input('fecha_cumpleanios'));
        $lista =  alumnos::paginate(5);
      
        if (isset($request['imagen'])){
            $nombre_archivo = time().".".$request['imagen']->extension();
            $request["imagen"]->move(public_path("imagenes"),$nombre_archivo);
        }


        alumnos::create(array(
            'Nombre' => $nombre,
            'edad'  => $edad ,
            'fecha_cumpleanios' => $fecha,
            'imagen' =>  $nombre_archivo
        ));

        $request->session()->flash('status',"Se Agrego con exito el Registro .");
        
        return view("dashboard/post/index", compact('lista'));


        //dd($request);
        //echo "store";
    }

    /**
     * Display the specified resource.
     */
    public function show($idalumno)
    {
        //
        $parametros =  alumnos::select("*")
        ->where([
            ["idalumno",">=",$idalumno]
        ])->get();
        
        return view("dashboard/post/show",compact('parametros'));
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($idalumno)
    {
        
        echo "Editar". $idalumno;
        $parametros =  alumnos::select("*")
        ->where([
            ["idalumno",">=",$idalumno]
        ])->get();
        $alumnos2 =  alumnos::select("*")->get();
        return view("dashboard/post/edit",compact('parametros','alumnos2'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(request $request, alumnos $alumnos)
    {
        
        $request->session()->flash('status',"Registro actualizado.");
        alumnos::where('idalumno', $request['idalumno'])
      ->update(['Nombre' => $request['Nombre'],'edad' => $request['edad'] ,'fecha_cumpleanios' => $request['fecha_cumpleanios']  ]);
      //return redirect("/alumnos");
      //return redirect()->route("alumnos.index");
      return to_route("alumnos.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $idalumno)
    {
        $deleted = alumnos::where('idalumno', $idalumno)->delete();
        //$alumnos->forceDelete();
        return to_route("alumnos.index")->with('status2',"Se elimino el registro .");
   
    }
}
