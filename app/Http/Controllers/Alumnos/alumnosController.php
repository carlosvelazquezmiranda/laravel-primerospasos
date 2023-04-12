<?php

namespace App\Http\Controllers\Alumnos;

use  App\Http\Requests\alumnos\storerequest;
use App\Http\Controllers\Controller;
use App\Models\alumnos;
use Illuminate\Http\Request;

class alumnosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        echo "Index";
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
        
        echo "Nombre:".$nombre;
        echo "<p>Fecha </p>".$fecha;
        alumnos::create(array(
            'Nombre' => $nombre,
            'edad'  => $edad ,
            'fecha_cumpleanios' => $fecha
        ));


        //dd($request);
        //echo "store";
    }

    /**
     * Display the specified resource.
     */
    public function show(alumnos $alumnos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(alumnos $alumnos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, alumnos $alumnos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(alumnos $alumnos)
    {
        //
    }
}
