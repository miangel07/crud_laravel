<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
 Route::get('/', function () {
   return view('principal');
});
Route::get('/registro',[UsuarioController::class,'index'])->name('registro');
Route::get('/index',[UsuarioController::class,'show'])->name('index');
Route::delete('index/{id}',[UsuarioController::class,'destroy'])->name('index.destroy');

/* Route::get('/principal',[UsuarioController::class,'show'])->name('principal'); */


/* Route::post('/registro',[UsuarioController::class,'create']);  */
Route::post('/registro',[UsuarioController::class,'store']); 
/* Route::resource('registro',UsuarioController::class); */

