<?php

use App\Http\Controllers\Alumnos\alumnosController;
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

Route::get('/compac', [TestController::class,'UsandoCompact'])->name('compac');

Route::get('/custom', function () {
    $msj = "Hola estoy probando Laravel";
    $data = ['msj'=>$msj , 'edad'=>15 ];
    return view('custom',$data);
});


Route::get('/', [TestController::class,'Test']);

Route::resource('alumnos', alumnosController ::class);

/*
Route::get('alumnos', [alumnosController::class,'index']);
Route::get('alumnos/{alumno}', [alumnosController::class,'show']);
Route::get('alumnos/create', [alumnosController::class,'create']);
Route::get('alumnos/{alumno}/edit', [alumnosController::class,'edit']);
Route::get('alumnos', [alumnosController::class,'index']);

Route::post('alumnos', [alumnosController::class,'store']);
Route::put('alumnos', [alumnosController::class,'update']);
Route::delete('alumnos', [alumnosController::class,'delete']);
*/
