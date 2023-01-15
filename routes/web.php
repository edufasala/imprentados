<?php

use App\Http\Controllers\CentralFileController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\ColorSchemeController;
use App\Http\Controllers\ConfiguracionesController;
use App\Http\Controllers\DarkModeController;
use App\Http\Controllers\DisenoController;
use App\Http\Controllers\EntregasController;
use App\Http\Controllers\EstadisticasController;
use App\Http\Controllers\FacturasController;
use App\Http\Controllers\ImpresionController;
use App\Http\Controllers\PreciosController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\TesoreriaController;
use App\Http\Controllers\UsuariosController;
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
Route::get('dark-mode-switcher', [DarkModeController::class, 'switch'])->name('dark-mode-switcher');
Route::get('color-scheme-switcher/{color_scheme}', [ColorSchemeController::class, 'switch'])->name('color-scheme-switcher');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/perfil', [ProfileController::class, 'index'])->name('profile.index');
    // Route::get('/perfil', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::patch('/perfil', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/perfil', [ProfileController::class, 'destroy'])->name('profile.destroy');

    #Usuarios
    Route::get('/usuarios', [UsuariosController::class, 'index'])->name('usuarios.index');
    Route::post('/usuarios/guardar-usuario', [UsuariosController::class, 'store'])->name('usuarios.store');
    Route::get('/usuarios/{id}/editar-usuario', [UsuariosController::class, 'edit'])->name('usuarios.edit');
    Route::put('/usuarios/{id}/actualizar-usuario', [UsuariosController::class, 'update'])->name('usuarios.update');
    Route::post('/usuarios/{id}/inactivar-usuario', [UsuariosController::class, 'destroy'])->name('usuarios.destroy');

    #Clientes
    Route::get('/clientes', [ClientesController::class, 'index'])->name('clientes.index');
    Route::get('/clientes/ver-detalles', [ClientesController::class, 'show'])->name('clientes.show');


    #Central File
    Route::get('/central-file', [CentralFileController::class, 'index'])->name('centralfile.index');


    #Diseños
    Route::get('/disenos', [DisenoController::class, 'index'])->name('disenos.index');


    #Entregas
    Route::get('/entregas', [EntregasController::class, 'index'])->name('entregas.index');


    #Estadisticas
    Route::get('/estadisticas', [EstadisticasController::class, 'index'])->name('estadisticas.index');


    #Facturas
    Route::get('/facturas', [FacturasController::class, 'index'])->name('facturas.index');


    #Impresion
    Route::get('/impresion', [ImpresionController::class, 'index'])->name('impresion.index');


    #Precios
    Route::get('/precios', [PreciosController::class, 'index'])->name('precios.index');


    #Tesoreria
    Route::get('/tesoreria', [TesoreriaController::class, 'index'])->name('tesoreria.index');


    #Configuraciones
    Route::get('/configuraciones', [ConfiguracionesController::class, 'index'])->name('configuraciones.index');

    #Configuraciones - Roles
    Route::get('/configuraciones/roles/editar-rol', [RolesController::class, 'edit'])->name('configuraciones.roles.edit');
});

require __DIR__.'/auth.php';
