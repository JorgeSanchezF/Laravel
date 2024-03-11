<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/alumno')->group(function () {
    route::get('/index', [App\Http\Controllers\alumnoController::class, 'index'])->name('alumno_index');
    route::post('/store', [App\Http\Controllers\alumnoController::class, 'store'])->name('alumno_store');
    route::get('/create', [App\Http\Controllers\alumnoController::class, 'create'])->name('alumno_create');
    route::get('/edit/{id}', [App\Http\Controllers\alumnoController::class, 'edit'])->name('alumno_edit');
    route::post('/update/{id}', [App\Http\Controllers\alumnoController::class, 'update'])->name('alumno_update');
    route::get('/delete/{id}', [App\Http\Controllers\alumnoController::class, 'delete'])->name('alumno_delete');
});
Route::prefix('/asignatura')->group(function () {
    route::get('/index', [App\Http\Controllers\asignaturaController::class, 'index'])->name('asignatura_index');
    route::post('/store', [App\Http\Controllers\asignaturaController::class, 'store'])->name('asignatura_store');
    route::get('/create', [App\Http\Controllers\asignaturaController::class, 'create'])->name('asignatura_create');
    route::get('/edit/{id}', [App\Http\Controllers\asignaturaController::class, 'edit'])->name('asignatura_edit');
    route::post('/update/{id}', [App\Http\Controllers\asignaturaController::class, 'update'])->name('asignatura_update');
    route::get('/delete/{id}', [App\Http\Controllers\asignaturaController::class, 'delete'])->name('asignatura_delete');
});
Route::prefix('/aula')->group(function () {
    route::get('/index', [App\Http\Controllers\aulaController::class, 'index'])->name('aula_index');
    route::post('/store', [App\Http\Controllers\aulaController::class, 'store'])->name('aula_store');
    route::get('/create', [App\Http\Controllers\aulaController::class, 'create'])->name('aula_create');
    route::get('/edit/{id}', [App\Http\Controllers\aulaController::class, 'edit'])->name('aula_edit');
    route::post('/update/{id}', [App\Http\Controllers\aulaController::class, 'update'])->name('aula_update');
    route::get('/delete/{id}', [App\Http\Controllers\aulaController::class, 'delete'])->name('aula_delete');
});
Route::prefix('/ciclo')->group(function () {
    route::get('/index', [App\Http\Controllers\cicloController::class, 'index'])->name('ciclo_index');
    route::post('/store', [App\Http\Controllers\cicloController::class, 'store'])->name('ciclo_store');
    route::get('/create', [App\Http\Controllers\cicloController::class, 'create'])->name('ciclo_create');
    route::get('/edit/{id}', [App\Http\Controllers\cicloController::class, 'edit'])->name('ciclo_edit');
    route::post('/update/{id}', [App\Http\Controllers\cicloController::class, 'update'])->name('ciclo_update');
    route::get('/delete/{id}', [App\Http\Controllers\cicloController::class, 'delete'])->name('ciclo_delete');
});
Route::prefix('/curso')->group(function () {
    route::get('/index', [App\Http\Controllers\cursoController::class, 'index'])->name('curso_index');
    route::post('/store', [App\Http\Controllers\cursoController::class, 'store'])->name('curso_store');
    route::get('/create', [App\Http\Controllers\cursoController::class, 'create'])->name('curso_create');
    route::get('/edit/{id}', [App\Http\Controllers\cursoController::class, 'edit'])->name('curso_edit');
    route::post('/update/{id}', [App\Http\Controllers\cursoController::class, 'update'])->name('curso_update');
    route::get('/delete/{id}', [App\Http\Controllers\cursoController::class, 'delete'])->name('curso_delete');
});
Route::prefix('/documento')->group(function () {
    route::get('/index', [App\Http\Controllers\documentoController::class, 'index'])->name('documento_index');
    route::post('/store', [App\Http\Controllers\documentoController::class, 'store'])->name('documento_store');
    route::get('/create', [App\Http\Controllers\documentoController::class, 'create'])->name('documento_create');
    route::get('/edit/{id}', [App\Http\Controllers\documentoController::class, 'edit'])->name('documento_edit');
    route::post('/update/{id}', [App\Http\Controllers\documentoController::class, 'update'])->name('documento_update');
    route::get('/delete/{id}', [App\Http\Controllers\documentoController::class, 'delete'])->name('documento_delete');
});
Route::prefix('/entrega')->group(function () {
    route::get('/index', [App\Http\Controllers\entregaController::class, 'index'])->name('entrega_index');
    route::post('/store', [App\Http\Controllers\entregaController::class, 'store'])->name('entrega_store');
    route::get('/create', [App\Http\Controllers\entregaController::class, 'create'])->name('entrega_create');
    route::get('/edit/{id}', [App\Http\Controllers\entregaController::class, 'edit'])->name('entrega_edit');
    route::post('/update/{id}', [App\Http\Controllers\entregaController::class, 'update'])->name('entrega_update');
    route::get('/delete/{id}', [App\Http\Controllers\entregaController::class, 'delete'])->name('entrega_delete');
});
Route::prefix('/grupo')->group(function () {
    route::get('/index', [App\Http\Controllers\grupoController::class, 'index'])->name('grupo_index');
    route::post('/store', [App\Http\Controllers\grupoController::class, 'store'])->name('grupo_store');
    route::get('/create', [App\Http\Controllers\grupoController::class, 'create'])->name('grupo_create');
    route::get('/edit/{id}', [App\Http\Controllers\grupoController::class, 'edit'])->name('grupo_edit');
    route::post('/update/{id}', [App\Http\Controllers\grupoController::class, 'update'])->name('grupo_update');
    route::get('/delete/{id}', [App\Http\Controllers\grupoController::class, 'delete'])->name('grupo_delete');
});
Route::prefix('/profesor')->group(function () {
    route::get('/index', [App\Http\Controllers\profesorController::class, 'index'])->name('profesor_index');
    route::post('/store', [App\Http\Controllers\profesorController::class, 'store'])->name('profesor_store');
    route::get('/create', [App\Http\Controllers\profesorController::class, 'create'])->name('profesor_create');
    route::get('/edit/{id}', [App\Http\Controllers\profesorController::class, 'edit'])->name('profesor_edit');
    route::post('/update/{id}', [App\Http\Controllers\profesorController::class, 'update'])->name('profesor_update');
    route::get('/delete/{id}', [App\Http\Controllers\profesorController::class, 'delete'])->name('profesor_delete');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
