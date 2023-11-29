<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
Route::get('/', function () {
   return view('principal');
});
Route::get('/registro',[UsuarioController::class,'index'])->name('registro');



