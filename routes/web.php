<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ContratoController;
use App\Http\Controllers\DiseñadorController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\PagoController;
use App\Http\Controllers\ProyectoController;
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

Route::get('clientes/index', [ClienteController::class, 'index'])->name('clientes.index');
Route::get('clientes/crear', [ClienteController::class, 'crear'])->name('clientes.crear');
Route::post('clientes', [ClienteController::class, 'grabar'])->name('clientes.grabar');
Route::get('clientes/{cliente}', [ClienteController::class, 'mostrar'])->name('clientes.mostrar');
Route::get('clientes/{cliente}/editar', [ClienteController::class, 'editar'])->name('clientes.editar');
Route::patch('clientes/{cliente}', [ClienteController::class, 'actualizar'])->name('clientes.actualizar');
Route::delete('clientes/{cliente}', [ClienteController::class, 'eliminar'])->name('clientes.eliminar');

Route::get('contratos/index', [ContratoController::class, 'index'])->name('contratos.index');
Route::get('contratos/crear', [ContratoController::class, 'crear'])->name('contratos.crear');
Route::post('contratos', [ContratoController::class, 'grabar'])->name('contratos.grabar');
Route::get('contratos/{contrato}', [ContratoController::class, 'mostrar'])->name('contratos.mostrar');
Route::get('contratos/{contrato}/editar', [ContratoController::class, 'editar'])->name('contratos.editar');
Route::patch('contratos/{contrato}', [ContratoController::class, 'actualizar'])->name('contratos.actualizar');
Route::delete('contratos/{contrato}', [ContratoController::class, 'eliminar'])->name('contratos.eliminar');

Route::get('diseñadors/index', [diseñadorController::class, 'index'])->name('diseñadors.index');
Route::get('diseñadors/crear', [diseñadorController::class, 'crear'])->name('diseñadors.crear');
Route::post('diseñadors', [diseñadorController::class, 'grabar'])->name('diseñadors.grabar');
Route::get('diseñadors/{diseñador}', [diseñadorController::class, 'mostrar'])->name('diseñadors.mostrar');
Route::get('diseñadors/{diseñador}/editar', [diseñadorController::class, 'editar'])->name('diseñadors.editar');
Route::patch('diseñadors/{diseñador}', [diseñadorController::class, 'actualizar'])->name('diseñadors.actualizar');
Route::delete('diseñadors/{diseñador}', [diseñadorController::class, 'eliminar'])->name('diseñadors.eliminar');

Route::get('materials/index', [materialController::class, 'index'])->name('materials.index');
Route::get('materials/crear', [materialController::class, 'crear'])->name('materials.crear');
Route::post('materials', [materialController::class, 'grabar'])->name('materials.grabar');
Route::get('materials/{material}', [materialController::class, 'mostrar'])->name('materials.mostrar');
Route::get('materials/{material}/editar', [materialController::class, 'editar'])->name('materials.editar');
Route::patch('materials/{material}', [materialController::class, 'actualizar'])->name('materials.actualizar');
Route::delete('materials/{material}', [materialController::class, 'eliminar'])->name('materials.eliminar');

Route::get('pagos/index', [pagoController::class, 'index'])->name('pagos.index');
Route::get('pagos/crear', [pagoController::class, 'crear'])->name('pagos.crear');
Route::post('pagos', [pagoController::class, 'grabar'])->name('pagos.grabar');
Route::get('pagos/{pago}', [pagoController::class, 'mostrar'])->name('pagos.mostrar');
Route::get('pagos/{pago}/editar', [pagoController::class, 'editar'])->name('pagos.editar');
Route::patch('pagos/{pago}', [pagoController::class, 'actualizar'])->name('pagos.actualizar');
Route::delete('pagos/{pago}', [pagoController::class, 'eliminar'])->name('pagos.eliminar');

Route::get('proyectos/index', [proyectoController::class, 'index'])->name('proyectos.index');
Route::get('proyectos/crear', [proyectoController::class, 'crear'])->name('proyectos.crear');
Route::post('proyectos', [proyectoController::class, 'grabar'])->name('proyectos.grabar');
Route::get('proyectos/{proyecto}', [proyectoController::class, 'mostrar'])->name('proyectos.mostrar');
Route::get('proyectos/{proyecto}/editar', [proyectoController::class, 'editar'])->name('proyectos.editar');
Route::patch('proyectos/{proyecto}', [proyectoController::class, 'actualizar'])->name('proyectos.actualizar');
Route::delete('proyectos/{proyecto}', [proyectoController::class, 'eliminar'])->name('proyectos.eliminar');