<?php

use App\Http\Controllers\MedicoController;
use App\Http\Controllers\PacienteController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
    

Route::get('/Paciente', [PacienteController::class,'index']);//Mostrar
Route::post('/Paciente', [PacienteController::class,'store']);//Crear
Route::put('/Paciente', [PacienteController::class,'update']);//Actualizar
Route::delete('/Paciente', [PacienteController::class,'destroy']);//Eliminar

Route::get('/Medico', [MedicoController::class,'index']);//Mostrar
Route::post('/Medico', [MedicoController::class,'store']);//Crear
Route::put('/Medico', [MedicoController::class,'update']);//Actualizar
Route::delete('/Medico', [MedicoController::class,'destroy']);//Eliminar

/*
Route::get('/Paciente','App\Http\Controllers\PacienteController@index');//Mostrar
Route::post('/Paciente','App\Http\Controllers\PacienteController@store');//Crear
Route::put('/Paciente/{id}','App\Http\Controllers\PacienteController@update');//Actualizar
Route::delete('/Paciente/{id}','App\Http\Controllers\PacienteController@destroy');//Eliminar

Route::get('/Medico','App\Http\Controllers\MedicoController@index');//Mostrar
Route::post('/Medico','App\Http\Controllers\MedicoController@store');//Crear
Route::put('/Medico/{id}','App\Http\Controllers\MedicoController@update');//Actualizar
Route::delete('/Medico/{id}','App\Http\Controllers\MedicoController@destroy');//Eliminar*/
    
});
