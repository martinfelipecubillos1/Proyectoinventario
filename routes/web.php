<?php

use Illuminate\Support\Facades\Route;
//agregamos los siguientes controladores
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\CompaniaController;
use App\Http\Controllers\DependenciaController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\ResponsableController;
use App\Http\Controllers\ContactoproveedorController;
use App\Http\Controllers\ContratoController;
use App\Http\Controllers\ElementoController;
use App\Http\Controllers\ElementoinventarioController;
use App\Http\Controllers\GrupoelementoController;
use App\Http\Controllers\ResponsablespordependenciaController;
use App\Http\Controllers\MovimientoController;
use App\Http\Controllers\MovimientoinvController;
use App\Http\Controllers\SubgrupoelementoController;
use App\Http\Livewire\Crearcontratos;
use App\Http\Livewire\Crearelementoinv;
use App\Http\Livewire\Crearproveedores;
use App\Http\Livewire\Movi;
use Illuminate\Support\Facades\Storage as FacadesStorage;

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


Route::get('/serfpt', function(){
$files = FacadesStorage::disk('ftp')->allFiles();
dd($files);
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

      //y creamos un grupo de rutas protegidas para los controladores}
Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RolController::class);
    Route::resource('usuarios', UsuarioController::class);
    Route::resource('companias', CompaniaController::class);
    Route::resource('dependencias', DependenciaController::class);
    Route::resource('proveedores', ProveedorController::class);
    Route::resource('responsables', ResponsableController::class);
    Route::resource('responsablespordependencias', ResponsablespordependenciaController::class);
    Route::resource('movimientos', MovimientoController::class);
    Route::resource('movimientoinvs', MovimientoinvController::class);
    Route::resource('elementosinv', ElementoinventarioController::class);
    Route::resource('elementos', ElementoController::class);
    Route::resource('grupos', GrupoelementoController::class);
    Route::resource('subgrupos', SubgrupoelementoController::class);
    Route::resource('contratos', ContratoController::class);
    Route::resource('contactosproveedor', ContactoproveedorController::class);
    Route::get('movi', Movi::class);
    Route::get('crearcontratos', Crearcontratos::class);
    Route::get('crearproveedores', Crearproveedores::class);
    Route::get('crearelementoinv', Crearelementoinv::class);

    Route::get('/elementosinv/export', [ElementoinventarioController::class, 'exportarElementos'])->name('elementos.export');
});
