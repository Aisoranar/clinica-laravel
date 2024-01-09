<?php

use App\Http\Controllers\MedicoController;
use App\Http\Controllers\PacienteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/medico', [MedicoController::class, 'index']);
Route::get('/paciente', [PacienteController::class, 'index']);

Route::get('/paciente', [PacienteController::class, 'index']);
Route::post('/paciente', [PacienteController::class, 'store'])->name('paciente.store');
Route::get('/paciente/create', [PacienteController::class, 'create'])->name('paciente.create');
Route::put('/paciente/{id}', [PacienteController::class, 'update'])->name('paciente.update');
Route::delete('/paciente/{id}', [PacienteController::class, 'destroy'])->name('paciente.destroy');
Route::get('/paciente/{id}/edit', [PacienteController::class, 'edit'])->name('paciente.edit');






Route::get('/medico', [MedicoController::class, 'index']);
Route::post('/medico', [MedicoController::class, 'store'])->name('medico.store');
Route::put('/medico/{id}', [MedicoController::class, 'update'])->name('medico.update');
Route::delete('/medico/{id}', [MedicoController::class, 'destroy'])->name('medico.destroy');
Route::get('/medico/{id}/edit', [MedicoController::class, 'edit'])->name('medico.edit');
