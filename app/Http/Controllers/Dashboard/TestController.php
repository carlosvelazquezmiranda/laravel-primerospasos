<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class TestController extends Controller
{
    function inicio(){
        //$user =  User::all();
        $user = User::find(1);
        $usuarios = User::all();
        $html_ = '<h1>Escapando codigo html o java script </h1><script> alert("Mi primer alert");</script>';
        $edad = 36;
        // echo ("Hola desde el controlador");
        return view('index',['user' => $user , 'html' => $html_, 'edad' => $edad,'usuarios'=> $usuarios]);
     }

    function Test(){
       $user =  User::find(1);
        
       // echo ("Hola desde el controlador");
       return view('welcome',['user' => $user ]);
    }

    function UsandoCompact(){
        //Se puede usar la variable compact para evitar los arreglos 'usuarios'=> $usuarios
        $user =  User::find(1);
        $var2 = "Este es otro parametro";
        return view('welcome',compact('user','var2'));

    }
    
}
