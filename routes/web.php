<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\JenisObatController;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\ObatMasukController;
use App\Http\Controllers\ObatKeluarController;
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
Route::resources([
    'jenisobat', JenisObatController::class,
    'obat', ObatControllers::class,
    'obatmasuk', ObatMasukControllers::class,
    'obatkeluar', ObatKeluarControllers::class
]);
// Route::resource('jenisobat', JenisObatController::class);
// Route::resource('obat', ObatControllers::class);
// Route::resource('obatmasuk', ObatMasukControllers::class);
// Route::resource('obatkeluar', ObatKeluarControllers::class);

// Route::get('/jenis_obat', function () {
//     return view('jenis_obat/index');
// });
// Route::get('/obat', function () {
//     return view('obat/index');
// });
// Route::get('/obat_masuk', function () {
//     return view('obat_masuk/index');
// });
// Route::get('/obat_keluar', function () {
//     return view('obat_keluar/index');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
