<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstadoController;
use App\Http\Controllers\OwnerController;

use App\Http\Controllers\PropiedadController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\LoginController as login;

use App\Http\Livewire\Roles;
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
Route::get('/',[HomeController::class, 'index']);

Route::group(['middleware' => 'web'], function(){

    //Login
    Route::get('/login',[HomeController::class, 'login'])->name('/login');


    //
    //Register

    //
    // Route::get('login/{provider}', [LoginController::class,'redirectToProvider']);
    // Route::get('login/{provider}/callback', [LoginController::class,'handleProviderCallback']);
    //Propiedad
    Route::get('/propiedad', [PropiedadController::class, 'index']);
    Route::resource('mantenedor-propiedad', PropiedadController::class);
    Route::post('/buscar-propiedad', [PropiedadController::class, 'filtro']);
    Route::get('/crear-propiedad', [PropiedadController::class, 'create']);
    //
    //Clientes
    Route::get('/clientes', [ClienteController::class, 'index']);
    Route::resource('mantenedor-cliente', ClienteController::class);
    Route::get('crear-clientes', [ClienteController::class, 'create']);
    Route::get('crear-perfil-clientes', [ClienteController::class, 'volver']);
    Route::post('create-cliente-perfil', [ClienteController::class, 'GuardarPerfil']);


    //
    //Propietarios
    Route::get('/propietario', [OwnerController::class, 'index']);
    Route::resource('mantenedor-owner', OwnerController::class);

    //
    Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/logout', [HomeController::class, 'logout']);








    Auth::routes();

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

});
