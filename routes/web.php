<?php

use App\Http\Controllers\AgendaController;
use App\Http\Controllers\FontaneriaController;
use App\Http\Controllers\FontaneriaclienteController;
use App\Http\Controllers\AveriasController;
use App\Http\Controllers\CitasController;
use App\Http\Controllers\ComentariosController;
use App\Http\Controllers\ContactenosController;
use App\Http\Controllers\IntraAveriasController;
use App\Http\Controllers\IntraCitasController;
use App\Http\Controllers\UsuarioController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

//Routa de error
Route::get('/error', ['as' => 'error', function() {
    return view('error');
}]);

// Route::prefix('dashboard')->middleware(['auth:sanctum', 'verified'])->group(function () {
    // return view('dashboard');
    Route::get('/dashboard', [UsuarioController::class, 'index'])->middleware(['auth:sanctum', 'verified'])->name('dashboard');
    Route::get('/dashboard/{id?}/update', [UsuarioController::class, 'update'])->middleware(['auth:sanctum', 'verified'])->name('dashboard');
    Route::get('/dashboard/{id?}/delete', [UsuarioController::class, 'destroy'])->middleware(['auth:sanctum', 'verified'])->name('dashboard');

/*GRUPO INTRANET*/
Route::prefix('intranet')->middleware('auth')->group(function () {

    Route::group(['middleware' => 'role:trabajador', 'prefix' => 'trabajador', 'as' => 'trabajador'], function () {

        $id = Auth::id();
        $user = User::find($id);

        /*Seccion Citas*/
        Route::get('/citas', [IntraCitasController::class, 'index']);
        Route::get('/citas/{id}/delete_cita', [IntraCitasController::class, 'destroy']);
        Route::get('/citas/{id}/update_cita', [IntraCitasController::class, 'update']);
        Route::post('/citas/{id}/fecha_cita', [IntraCitasController::class, 'fecha_cita']);


        /*Seccion Averias*/
        Route::get('/averias', [IntraAveriasController::class, 'index']);
        Route::get('/averias/{id}/delete_averia', [IntraAveriasController::class, 'destroy']);
        Route::get('/averias/{id}/update_averia', [IntraAveriasController::class, 'update']);
        Route::post('/averias/{id}/fecha_averia', [IntraAveriasController::class, 'fecha_averia']);


        /*Seccion Fontaneria*/
        Route::get('/fontaneria', [FontaneriaController::class, 'index']);
        Route::get('/fontaneria/{id}/delete', [FontaneriaController::class, 'destroy']);
        Route::post('/fontaneria/store', [FontaneriaController::class, 'store']);
        Route::Post('/fontaneria/{id}/update', [FontaneriaController::class, 'update']);

        /*Seccion Agenda*/
        Route::get('/agenda', function () {
            return view('intranet.agenda');
        });
        Route::get('agenda/{fecha}', [AgendaController::class, 'index']);
        Route::get('agenda/{id}/update_cita', [AgendaController::class, 'update_cita']);
        Route::get('agenda/{id}/update_averia', [AgendaController::class, 'update_averia']);


    });

    Route::group(['middleware' => 'role:cliente', 'prefix' => 'cliente', 'as' => 'cliente'], function () {
        Route::get('/', function () {
            return view('tienda.fontaneria');
        });
    });
});


Route::prefix('/tienda')->middleware('auth')->group(function () {
    /*Seccion Fontaneria*/
    Route::get('/fontaneria', [FontaneriaclienteController::class, 'index']);
    Route::get('/fontaneria/{categoria}', [FontaneriaclienteController::class, 'indexCateg']);

    /*Seccion Citas*/
    Route::get('/citas', [CitasController::class, 'index']);
    Route::get('/citas/pedido/{id}', [CitasController::class, 'index_pedido']);
    Route::POST('/citas/store', [CitasController::class, 'store']);
    Route::get('/citas/{id}/delete', [CitasController::class, 'destroy']);

    /*Seccion Averias*/
    Route::get('/averias', [AveriasController::class, 'index']);
    Route::POST('/averias/store', [AveriasController::class, 'store']);
    Route::get('/averias/{id}/delete', [AveriasController::class, 'destroy']);

    /*Seccion Comentarios*/
    Route::get('/comentarios', [ComentariosController::class, 'index']);
    Route::post('/comentarios/store', [ComentariosController::class, 'store']);
    Route::get('/comentarios/{id}/delete', [ComentariosController::class, 'destroy']);

    /*Seccion Contactenos*/
    Route::get('/contactenos', [ContactenosController::class, 'index']);
});
