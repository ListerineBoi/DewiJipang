<?php

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
    return redirect()->route('homeP');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/homeP', [App\Http\Controllers\PublicController::class, 'home'])->name('homeP');
Route::get('/tentang', [App\Http\Controllers\PublicController::class, 'tentang'])->name('tentang');
Route::get('/wisata-edukasi', [App\Http\Controllers\PublicController::class, 'wisedu'])->name('wisedu');
Route::get('/paket-wisata', [App\Http\Controllers\PublicController::class, 'paket'])->name('paket');
Route::get('/Kerajinan', [App\Http\Controllers\PublicController::class, 'krjn'])->name('krjn');
Route::get('/Kerajinan-UMKM', [App\Http\Controllers\PublicController::class, 'umkm'])->name('umkm');
Route::get('/Homestay', [App\Http\Controllers\PublicController::class, 'hmsty'])->name('hmsty');
Route::get('/Homestay/pemesanan/{id}', [App\Http\Controllers\PublicController::class, 'Dhmsty'])->name('Dhmsty');
Route::get('/Kerajinan-UMKM/detail/{id}', [App\Http\Controllers\PublicController::class, 'toko'])->name('toko');
Route::get('/paket-wisata/pemesanan/{id}', [App\Http\Controllers\PublicController::class, 'index'])->name('pemesanan');
Route::get('/paket-wisata/cal', [App\Http\Controllers\PemesananController::class, 'cal'])->name('cal');
Route::get('/umkm', [App\Http\Controllers\AdminController::class, 'Iumkm'])->name('Iumkm');
Route::post('/umkm/input', [App\Http\Controllers\AdminController::class, 'input'])->name('input');
Route::post('/umkm/delete', [App\Http\Controllers\AdminController::class, 'delete'])->name('delete');
Route::post('/umkm/edit', [App\Http\Controllers\AdminController::class, 'edit'])->name('edit');
Route::post('/umkm/update', [App\Http\Controllers\AdminController::class, 'update'])->name('update');
Route::get('/umkm/katalog/{id}', [App\Http\Controllers\AdminController::class, 'Ikatalog'])->name('Ikatalog');
Route::post('/umkm/katalog/input', [App\Http\Controllers\AdminController::class, 'inputK'])->name('inputK');
Route::post('/umkm/katalog/delete', [App\Http\Controllers\AdminController::class, 'deletek'])->name('deletek');
Route::post('/umkm/katalog/edit', [App\Http\Controllers\AdminController::class, 'editk'])->name('editk');
Route::post('/umkm/katalog/update', [App\Http\Controllers\AdminController::class, 'updatek'])->name('updatek');

Route::get('/link', [App\Http\Controllers\AdminController::class, 'linkadd'])->name('linkadd');
Route::post('/link/input', [App\Http\Controllers\AdminController::class, 'inputaddL'])->name('inputaddL');
Route::post('/link/delete', [App\Http\Controllers\AdminController::class, 'linkdeleteL'])->name('linkdeleteL');

Route::get('/umkm/link/{id}', [App\Http\Controllers\AdminController::class, 'Ilink'])->name('Ilink');
Route::post('/umkm/link/input', [App\Http\Controllers\AdminController::class, 'inputL'])->name('inputL');
Route::post('/umkm/link/delete', [App\Http\Controllers\AdminController::class, 'deleteL'])->name('deleteL');

Route::get('/umkm/link/{id}', [App\Http\Controllers\AdminController::class, 'Ilink'])->name('Ilink');
Route::post('/umkm/link/input', [App\Http\Controllers\AdminController::class, 'inputL'])->name('inputL');
Route::post('/umkm/link/delete', [App\Http\Controllers\AdminController::class, 'deleteL'])->name('deleteL');

Route::get('/wisata', [App\Http\Controllers\AdminController::class, 'Iwisata'])->name('Iwisata');
Route::post('/wisata/input', [App\Http\Controllers\AdminController::class, 'inputW'])->name('inputW');
Route::post('/wisata/delete', [App\Http\Controllers\AdminController::class, 'deleteW'])->name('deleteW');
Route::post('/wisata/edit', [App\Http\Controllers\AdminController::class, 'editW'])->name('editW');
Route::post('/wisata/update', [App\Http\Controllers\AdminController::class, 'updateW'])->name('updateW');

Route::get('/homestay', [App\Http\Controllers\AdminController::class, 'Ihmsty'])->name('Ihmsty');
Route::post('/homestay/input', [App\Http\Controllers\AdminController::class, 'inputH'])->name('inputH');
Route::post('/homestay/delete', [App\Http\Controllers\AdminController::class, 'deleteH'])->name('deleteH');
Route::post('/homestay/edit', [App\Http\Controllers\AdminController::class, 'editH'])->name('editH');
Route::post('/homestay/update', [App\Http\Controllers\AdminController::class, 'updateH'])->name('updateH');

Route::get('/paketlist', [App\Http\Controllers\PemesananController::class, 'paketlist'])->name('paketlist');
Route::get('/paketlist/penjadwalan/{id}', [App\Http\Controllers\PemesananController::class, 'index'])->name('penjadwalan');
Route::get('/paketlist/penjadwalanH/{id}', [App\Http\Controllers\PemesananController::class, 'indexH'])->name('penjadwalanH');
Route::post('/paketlist/penjadwalan/input', [App\Http\Controllers\PemesananController::class, 'inputJ'])->name('inputJ');
Route::post('/paketlist/penjadwalan/delete', [App\Http\Controllers\PemesananController::class, 'deleteJ'])->name('deleteJ');
Route::post('/paketlist/penjadwalanH/input', [App\Http\Controllers\PemesananController::class, 'inputJH'])->name('inputJH');
Route::post('/paketlist/penjadwalanH/delete', [App\Http\Controllers\PemesananController::class, 'deleteJH'])->name('deleteJH');

Route::get('/carousel_list', [App\Http\Controllers\AdminController::class, 'carlist'])->name('carlist');
Route::get('/carousel_list/{type}/{id?}', [App\Http\Controllers\AdminController::class, 'inputcar'])->name('inputcar');
Route::post('/carousel_list/save', [App\Http\Controllers\AdminController::class, 'savecar'])->name('savecar');
Route::post('/carousel_list/delete', [App\Http\Controllers\AdminController::class, 'deletecar'])->name('deletecar');
Route::post('/carousel_list/edit', [App\Http\Controllers\AdminController::class, 'editcar'])->name('editcar');
Route::post('/carousel_list/update', [App\Http\Controllers\AdminController::class, 'updatecar'])->name('updatecar');