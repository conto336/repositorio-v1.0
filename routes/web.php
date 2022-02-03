<?php

use App\Http\Controllers\Admin\DocumentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OnlyCategoriesController;
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
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('register', function (){ abort(404); });


Route::get('about', [HomeController::class, 'about'])->name('about');

Route::get('carreras/', [HomeController::class, 'homeLibrary'])->name('library');

/**Rutas del ELectronica */
Route::get('carrera/ingenieria electronica/', [HomeController::class, 'electronicFiles'])->name('electronicFiles');

/**Rutas de Industrial */
Route::get('carrera/ingenieria industrial/', [HomeController::class, 'industrialFiles'])->name('industrialFiles');

/**Rutas de Geologia */
Route::get('carrera/ingenieria geologica/', [HomeController::class, 'geologyFiles'])->name('geologyFiles');

Route::get('archivos/{nombre}&{id}', [HomeController::class, 'show'])->name('showFile');

Route::get('archivos/carrera={carrera}/lineas={lineas}', [HomeController::class, 'showLines'])->name('showLines');

