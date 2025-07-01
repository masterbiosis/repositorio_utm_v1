<?php

use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\AsesorController;
use App\Http\Controllers\CarreraController;
use App\Http\Controllers\DirectorController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\ProgramaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




//Carrera
Route::get('carreras',[CarreraController::class,'index'])->name('carreras.index');
Route::get('carreras/create',[CarreraController::class,'create'])->name('carreras.create');
Route::post('carreras',[CarreraController::class,'store'])->name('carreras.store');
Route::get('carreras/{carrera}',[CarreraController::class,'show'])->name('carreras.show');
Route::get('carreras/{carrera}/edit',[CarreraController::class,'edit'])->name('carreras.edit');
Route::match(['put','patch'],'carreras/{carrera}',[CarreraController::class,'update'])->name('carreras.update');
Route::delete('carreras/{carrera}',[CarreraController::class,'destroy'])->name('carreras.destroy');


//Alumno
Route::get('alumnos',[AlumnoController::class,'index'])->name('alumnos.index');
Route::get('alumnos/create',[AlumnoController::class,'create'])->name('alumnos.create');
Route::post('alumnos',[AlumnoController::class,'store'])->name('alumnos.store');
Route::get('alumnos/{alumno}',[AlumnoController::class,'show'])->name('alumnos.show');
Route::get('alumnos/{alumno}/edit',[AlumnoController::class,'edit'])->name('alumnos.edit');
Route::match(['put','patch'],'alumnos/{alumno}',[AlumnoController::class,'update'])->name('alumnos.update');
Route::delete('alumno/{alumno}',[AlumnoController::class,'destroy'])->name('alumnos.destroy');

//Director de Carrera
Route::get('directors',[DirectorController::class,'index'])->name('directors.index');
Route::get('directors/create',[DirectorController::class,'create'])->name('directors.create');
Route::post('directors',[DirectorController::class,'store'])->name('directors.store');
Route::get('directors/{director}',[DirectorController::class,'show'])->name('directors.show');
Route::get('directors/{director}/edit',[DirectorController::class,'edit'])->name('directors.edit');
Route::match(['put','patch'],'directors/{director}',[DirectorController::class,'update'])->name('directors.update');
Route::delete('directors/{director}',[DirectorController::class,'destroy'])->name('directors.destroy');


//Programas Educativos
Route::get('programas',[ProgramaController::class,'index'])->name('programas.index');
Route::get('programas/create',[ProgramaController::class,'create'])->name('programas.create');
Route::post('programas',[ProgramaController::class,'store'])->name('programas.store');
Route::get('programas/{programa}',[ProgramaController::class,'show'])->name('programas.show');
Route::get('programas/{programa}/edit',[ProgramaController::class,'edit'])->name('programas.edit');
Route::match(['put','patch'],'programas/{programa}',[ProgramaController::class,'update'])->name('programas.update');
Route::delete('programas/{programa}',[ProgramaController::class,'destroy'])->name('programas.destroy');

//Empresa
Route::get('empresas',[EmpresaController::class,'index'])->name('empresas.index');
Route::get('empresas/create',[EmpresaController::class,'create'])->name('empresas.create');
Route::post('empresas',[EmpresaController::class,'store'])->name('empresas.store');
Route::get('empresas/{empresa}',[EmpresaController::class,'show'])->name('empresas.show');
Route::get('empresas/{empresa}/edit',[EmpresaController::class,'edit'])->name('empresas.edit');
Route::match(['put','patch'],'empresas/{empresa}',[EmpresaController::class,'update'])->name('empresas.update');
Route::delete('asempresasesors/{empresa}',[EmpresaController::class,'destroy'])->name('empresas.destroy');



//Asesor Externo
Route::get('asesors',[AsesorController::class,'index'])->name('asesors.index');
Route::get('asesors/create',[AsesorController::class,'create'])->name('asesors.create');
Route::post('asesors',[AsesorController::class,'store'])->name('asesors.store');
Route::get('asesors/{asesor}',[AsesorController::class,'show'])->name('asesors.show');
Route::get('asesors/{asesor}/edit',[AsesorController::class,'edit'])->name('asesors.edit');
Route::match(['put','patch'],'asesors/{asesor}',[AsesorController::class,'update'])->name('asesors.update');
Route::delete('asesors/{asesor}',[AsesorController::class,'destroy'])->name('asesors.destroy');
