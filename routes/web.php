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

Route::get('/clientes/index', [ClienteController::class, 'index'])->name('clientes.index');
Route::get('/clientes/editar/{cliente}', [ClienteController::class, 'editar'])->name('clientes.editar');
Route::patch('/clientes/actualizar/{cliente}', [ClienteController::class, 'actualizar'])->name('clientes.actualizar');
Route::get('/clientes/crear', [ClienteController::class, 'crear']);
Route::post('/clientes/grabar', [ClienteController::class, 'grabar']);
Route::delete('/clientes/{cliente}', [ClienteController::class, 'eliminar'])->name('clientes.eliminar');

Route::get('/contratos/index', [ContratoController::class, 'index'])->name('contratos.index');
Route::get('/contratos/editar/{contrato}', [ContratoController::class, 'editar'])->name('contratos.editar');
Route::patch('/contratos/actualizar/{contrato}', [ContratoController::class, 'actualizar'])->name('contratos.actualizar');
Route::get('/contratos/crear', [ContratoController::class, 'crear']);
Route::post('/contratos/grabar', [ContratoController::class, 'grabar']);

Route::get('/diseñadors/index', [DiseñadorController::class, 'index'])->name('diseñadors.index');
Route::get('/diseñadors/editar/{diseñador}', [DiseñadorController::class, 'editar'])->name('diseñadors.editar');
Route::patch('/diseñadors/actualizar/{diseñador}', [DiseñadorController::class, 'actualizar'])->name('diseñadors.actualizar');
Route::get('/diseñadors/crear', [DiseñadorController::class, 'crear']);
Route::post('/diseñadors/grabar', [DiseñadorController::class, 'grabar']);

Route::get('/materials/index', [MaterialController::class, 'index'])->name('materials.index');
Route::get('/materials/editar/{material}', [MaterialController::class, 'editar'])->name('materials.editar');
Route::patch('/materials/actualizar/{material}', [MaterialController::class, 'actualizar'])->name('materials.actualizar');
Route::get('/materials/crear', [MaterialController::class, 'crear']);
Route::post('/materials/grabar', [MaterialController::class, 'grabar']);

Route::get('/pagos/index', [PagoController::class, 'index'])->name('pagos.index');
Route::get('/pagos/editar/{pago}', [PagoController::class, 'editar'])->name('pagos.editar');
Route::patch('/pagos/actualizar/{pago}', [PagoController::class, 'actualizar'])->name('pagos.actualizar');
Route::get('/pagos/crear', [PagoController::class, 'crear']);
Route::post('/pagos/grabar', [PagoController::class, 'grabar']);

Route::get('/proyectos/index', [ProyectoController::class, 'index'])->name('proyectos.index');
Route::get('/proyectos/editar/{proyecto}', [ProyectoController::class, 'editar'])->name('proyectos.editar');
Route::patch('/proyectos/actualizar/{proyecto}', [ProyectoController::class, 'actualizar'])->name('proyectos.actualizar');
Route::get('/proyectos/crear', [ProyectoController::class, 'crear']);
Route::post('/proyectos/grabar', [ProyectoController::class, 'grabar']);