<?php

use App\Http\Controllers\Dashboard\TestController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/escribeme', function () {
    return view('contactame');
})->name('contacto');


Route::get('/inicio', [TestController::class,'inicio'])->name('inicio');

Route::get('/custom', function () {
    $msj = "Hola estoy probando Laravel";
    $data = ['msj'=>$msj , 'edad'=>15 ];
    return view('custom',$data);
});


Route::get('/', [TestController::class,'Test']);
