<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServicioController;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\TipoVehiculoController;
use App\Http\Controllers\Seguridad;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Crypt;


Route::get('roles', [Seguridad\RolesController::class, 'index'])->name('roles.index')->middleware('auth');

Route::resource('usuarios', UserController::class)->names('admin.usuarios');


Route::get('/', function () {
    return view('sitioweb.index');
});

/* Route::get('/login', function () {
    return view('sitiogestion.login');
});
 */
Route::get('/Inicio', function () {
    return view('sitiogestion.inicio');
});

Route::get('/tienda', function () {
    return view('sitioweb.tienda');
});

Route::get('/servicios', function () {
    return view('sitioweb.servicios');
});

Route::get('/contacto', function () {
    return view('sitioweb.contacto');
});

Route::get('/acercade', function () {
    return view('sitioweb.acercade');
});


Route::get('/cart', function () {
    return view('sitioweb.cart');
});

Route::get('/checkout', function () {
    return view('sitioweb.checkout');
});

Route::get('/gracias', function () {
    return view('sitioweb.gracias');
});

Route::get('/servicios', [ServicioController::class, 'servicioweb'])->name('servicioweb');
Route::get('/', [ServicioController::class, 'indexservicios'])->name('indexservicios');

Route::get('servicio', [ServicioController::class, 'index'])->name('servicio_index')->middleware('can:role:admin');

Route::get('servicio/create', [ServicioController::class, 'create'])->name('servicio_create');
Route::post('servicio/store', [ServicioController::class, 'store'])->name('servicio_store');

Route::get('servicio/{id}/edit', [ServicioController::class, 'edit'])->name('servicio_edit')->where('id', '[0-9]+');
Route::post('servicio/{id}/update', [ServicioController::class, 'update'])->name('servicio_update')->where('id', '[0-9]+');
/* $id =  Crypt::decrypt($id); */
Route::get('marca', [MarcaController::class, 'index'])->name('marca_index');

Route::get('marca/create', [MarcaController::class, 'create'])->name('marca_create');
Route::post('marca/store', [MarcaController::class, 'store'])->name('marca_store');

Route::get('marca/{id}/edit', [MarcaController::class, 'edit'])->name('marca_edit')->where('id', '[0-9]+');
Route::post('marca/{id}/update', [MarcaController::class, 'update'])->name('marca_update')->where('id', '[0-9]+');

Route::get('tipovehiculo', [TipoVehiculoController::class, 'index'])->name('tipovehiculo_index');

Route::get('tipovehiculo/create', [TipoVehiculoController::class, 'create'])->name('tipovehiculo_create');
Route::post('tipovehiculo/store', [TipoVehiculoController::class, 'store'])->name('tipovehiculo_store');

Route::get('tipovehiculo/{id}/edit', [TipoVehiculoController::class, 'edit'])->name('tipovehiculo_edit')->where('id', '[0-9]+');
Route::post('tipovehiculo/{id}/update', [TipoVehiculoController::class, 'update'])->name('tipovehiculo_update')->where('id', '[0-9]+');


//Route::get('empresa', [EmpresaController::class, 'index'])->name('servicio_index');
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
