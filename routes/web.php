<?php

use App\Http\Controllers\Admin\EstatusPropiedadController;
use App\Http\Controllers\Admin\GaleriaPropiedadesController;
use App\Http\Controllers\Admin\LocacionController;
use App\Http\Controllers\Admin\NearbysController;
use App\Http\Controllers\Admin\PropiedadesController;
use App\Http\Controllers\Admin\ReviewsController;
use App\Http\Controllers\Admin\ReviewSellerController;
use App\Http\Controllers\Admin\SolicitudVendedorController;
use App\Http\Controllers\Admin\TipoPropiedadController;
use App\Http\Controllers\Admin\ZonasController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Cliente\IndexController;
use App\Http\Controllers\SellerController;
use App\Models\Propiedades;

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

/* ------------- Admin Route -------------- */

Route::prefix('admin')->group(function () {

    Route::get('/login', [AdminController::class, 'Index'])->name('login_from');

    Route::post('/login/owner', [AdminController::class, 'Login'])->name('admin.login');

    Route::get('/dashboard', [AdminController::class, 'Dashboard'])->name('admin.dashboard')->middleware('admin');

    Route::get('/logout', [AdminController::class, 'AdminLogout'])->name('admin.logout')->middleware('admin');

    Route::get('/register', [AdminController::class, 'AdminRegister'])->name('admin.register');

    Route::post('/register/create', [AdminController::class, 'AdminRegisterCreate'])->name('admin.register.create');
});




/* ------------- End Admin Route -------------- */



/* ------------- Tipos Propiedades -------------- */
Route::prefix('tipopropiedades')->group(function () {

    Route::get('/index', [TipoPropiedadController::class, 'index'])->name('tipopropiedad.index');
    Route::get('/create', [TipoPropiedadController::class, 'create'])->name('tipopropiedad.create');
    Route::post('/store', [TipoPropiedadController::class, 'store'])->name('tipopropiedad.store');
    Route::get('/edit/{id}', [TipoPropiedadController::class, 'edit'])->name('tipopropiedad.edit');
    Route::post('/update/{id}', [TipoPropiedadController::class, 'update'])->name('tipopropiedad.update');
    Route::get('/destroy/{id}', [TipoPropiedadController::class, 'destroy'])->name('tipopropiedad.destroy');
});

/* ------------- End Tipo Propiedades -------------- */

/* ------------- Zonas -------------- */
Route::prefix('zonas')->group(function () {
    Route::get('/index', [ZonasController::class, 'index'])->name('zonas.index');
    Route::get('/create', [ZonasController::class, 'create'])->name('zonas.create');
    Route::post('/store', [ZonasController::class, 'store'])->name('zonas.store');
    Route::get('/edit/{id}', [ZonasController::class, 'edit'])->name('zonas.edit');
    Route::post('/update/{id}', [ZonasController::class, 'update'])->name('zonas.update');
    Route::get('/destroy/{id}', [ZonasController::class, 'destroy'])->name('zonas.destroy');
});
/* ------------- End Zonas -------------- */

/* ------------- locaciones -------------- */
Route::prefix('locaciones')->group(function () {
    Route::get('/index', [LocacionController::class, 'index'])->name('locacion.index');
    Route::get('/create', [LocacionController::class, 'create'])->name('locacion.create');
    Route::post('/store', [LocacionController::class, 'store'])->name('locacion.store');
    Route::get('/edit/{id}', [LocacionController::class, 'edit'])->name('locacion.edit');
    Route::post('/update/{id}', [LocacionController::class, 'update'])->name('locacion.update');
    Route::get('/destroy/{id}', [LocacionController::class, 'destroy'])->name('locacion.destroy');
});
/* ------------- End locaciones -------------- */


/* ------------- StatusPropiedad -------------- */
Route::prefix('statuspropiedad')->group(function () {
    Route::get('/index', [EstatusPropiedadController::class, 'index'])->name('statuspropiedad.index');
    Route::get('/create', [EstatusPropiedadController::class, 'create'])->name('statuspropiedad.create');
    Route::post('/store', [EstatusPropiedadController::class, 'store'])->name('statuspropiedad.store');
    Route::get('/edit/{id}', [EstatusPropiedadController::class, 'edit'])->name('statuspropiedad.edit');
    Route::post('/update/{id}', [EstatusPropiedadController::class, 'update'])->name('statuspropiedad.update');
    Route::get('/destroy/{id}', [EstatusPropiedadController::class, 'destroy'])->name('statuspropiedad.destroy');
});
/* ------------- End StatusPropiedad -------------- */


/* ------------- Nearbys -------------- */
Route::prefix('nearby')->group(function () {
    Route::get('/index', [NearbysController::class, 'index'])->name('nearby.index');
    Route::get('/create', [NearbysController::class, 'create'])->name('nearby.create');
    Route::post('/store', [NearbysController::class, 'store'])->name('nearby.store');
    Route::get('/edit/{id}', [NearbysController::class, 'edit'])->name('nearby.edit');
    Route::post('/update/{id}', [NearbysController::class, 'update'])->name('nearby.update');
    Route::get('/destroy/{id}', [NearbysController::class, 'destroy'])->name('nearby.destroy');
});
/* ------------- End Nearbys -------------- */


/* ------------- Reviews -------------- */
Route::prefix('review')->group(function () {
    Route::get('/index', [ReviewsController::class, 'index'])->name('review.index');
    Route::get('/create', [ReviewsController::class, 'create'])->name('review.create');
    Route::post('/store', [ReviewsController::class, 'store'])->name('review.store');
    Route::get('/edit/{id}', [ReviewsController::class, 'edit'])->name('review.edit');
    Route::post('/update/{id}', [ReviewsController::class, 'update'])->name('review.update');
    Route::get('/destroy/{id}', [ReviewsController::class, 'destroy'])->name('review.destroy');
});
/* ------------- End Reviews -------------- */

/* ------------- Solicitud Vendedor -------------- */
Route::prefix('solicitudvendedor')->group(function () {
    Route::get('/index', [SolicitudVendedorController::class, 'index'])->name('solicitudvendedor.index');
    Route::get('/create', [SolicitudVendedorController::class, 'create'])->name('solicitudvendedor.create');
    Route::post('/store', [SolicitudVendedorController::class, 'store'])->name('solicitudvendedor.store');
    Route::get('/edit/{id}', [SolicitudVendedorController::class, 'edit'])->name('solicitudvendedor.edit');
    Route::post('/update/{id}', [SolicitudVendedorController::class, 'update'])->name('solicitudvendedor.update');
    Route::get('/destroy/{id}', [SolicitudVendedorController::class, 'destroy'])->name('solicitudvendedor.destroy');
});
/* ------------- End Solicitud Vendedor -------------- */

/* ------------- Galeria propiedades -------------- */
Route::prefix('galeriapropiedad')->group(function () {
    Route::get('/index', [GaleriaPropiedadesController::class, 'index'])->name('galeriapropiedad.index');
    Route::get('/create', [GaleriaPropiedadesController::class, 'create'])->name('galeriapropiedad.create');
    Route::post('/store', [GaleriaPropiedadesController::class, 'store'])->name('galeriapropiedad.store');
    Route::get('/edit/{id}', [GaleriaPropiedadesController::class, 'edit'])->name('galeriapropiedad.edit');
    Route::post('/update/{id}', [GaleriaPropiedadesController::class, 'update'])->name('galeriapropiedad.update');
    Route::get('/destroy/{id}', [GaleriaPropiedadesController::class, 'destroy'])->name('galeriapropiedad.destroy');
});
/* ------------- End Galeria propiedades -------------- */

/* ------------- Review Sellers -------------- */
Route::prefix('reviewsellers')->group(function () {
    Route::get('/index', [ReviewSellerController::class, 'index'])->name('reviewsellers.index');
    Route::get('/create', [ReviewSellerController::class, 'create'])->name('reviewsellers.create');
    Route::post('/store', [ReviewSellerController::class, 'store'])->name('reviewsellers.store');
    Route::get('/edit/{id}', [ReviewSellerController::class, 'edit'])->name('reviewsellers.edit');
    Route::post('/update/{id}', [ReviewSellerController::class, 'update'])->name('reviewsellers.update');
    Route::get('/destroy/{id}', [ReviewSellerController::class, 'destroy'])->name('reviewsellers.destroy');
});
/* ------------- End Review Sellers -------------- */

/* ------------- Propiedades -------------- */
Route::prefix('propiedades')->group(function () {
    Route::get('/index', [PropiedadesController::class, 'index'])->name('propiedades.index');
    Route::get('/create', [PropiedadesController::class, 'create'])->name('propiedades.create');
    Route::post('/store', [PropiedadesController::class, 'store'])->name('propiedades.store');
    Route::get('/edit/{id}', [PropiedadesController::class, 'edit'])->name('propiedades.edit');
    Route::post('/update/{id}', [PropiedadesController::class, 'update'])->name('propiedades.update');
    Route::get('/destroy/{id}', [PropiedadesController::class, 'destroy'])->name('propiedades.destroy');
});
/* ------------- End Propiedades -------------- */





/* ------------- Seller Route -------------- */

Route::prefix('seller')->group(function () {

    Route::get('/login', [SellerController::class, 'SellerIndex'])->name('seller_login_from');

    Route::get('/dashboard', [SellerController::class, 'SellerDashboard'])->name('seller.dashboard')->middleware('seller');

    Route::post('/login/owner', [SellerController::class, 'SellerLogin'])->name('seller.login');



    Route::get('/logout', [SellerController::class, 'SellerLogout'])->name('seller.logout')->middleware('seller');

    Route::get('/register', [SellerController::class, 'SellerRegister'])->name('seller.register');

    Route::post('/register/create', [SellerController::class, 'SellerRegisterCreate'])->name('seller.register.create');
});
/* ------------- End Seller Route -------------- */


/// Rutas del index
Route::prefix('properties')->group(function () {
    Route::get('/grid', [IndexController::class, 'propertiesGrid'])->name('properties.grid');
    Route::get('/grid/{id}', [IndexController::class, 'propertyGrid'])->name('properties.grid-single');
});

/// fin de las  Rutas del index
Route::get('/', function () {
    return view('cliente.index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
