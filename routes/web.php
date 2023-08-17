<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\WargaController;
use App\Http\Controllers\PengurusController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\PembayaranController;
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
// DIJALANKAN APABILA MELAKSANAKAN LOGIN
Route::middleware(['guest'])->group(function(){
	Route::get('/',[LoginController::class, 'index'])->name('login');
	Route::post('/login', [LoginController::class, 'login']);
});

// DIJALANKAN SESUDAH MELAKUKAN LOGIN
Route::middleware(['auth'])->group(function () {
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

    // WARGA
	Route::get('/warga', [WargaController::class, 'index'])->name('warga');
	
	Route::get('/wargaIndex', [WargaController::class, 'wargaIndex'])->name('wargaIndex');
	Route::get('/wargaTampil', [WargaController::class, 'wargaTampil'])->name('wargaTampil');

	Route::get('/wargaTambah', [WargaController::class, 'wargaTambah'])->name('wargaTambah');
	Route::post('/wargaAdd', [WargaController::class, 'wargaAdd'])->name('wargaAdd');

	Route::get('/wargaEdit/{id}', [WargaController::class, 'wargaEdit'])->name('wargaEdit');
	Route::post('/wargaUpdate/{id}', [WargaController::class, 'wargaUpdate'])->name('wargaUpdate');
	Route::delete('/wargaDelete/{id}', [WargaController::class, 'wargaDelete'])->name('wargaDelete');


	// PENGURUS
	Route::get('/pengurus', [PengurusController::class, 'PengurusIndex'])->name('PengurusIndex');

	Route::get('/PengurusTampil', [PengurusController::class, 'PengurusTampil'])->name('PengurusTampil');
	Route::post('/PengurusAdd', [PengurusController::class, 'PengurusAdd'])->name('PengurusAdd');

	Route::get('/PengurusEdit/{id}', [PengurusController::class, 'PengurusEdit'])->name('PengurusEdit');
	Route::post('/PengurusUpdate/{id}', [PengurusController::class, 'PengurusUpdate'])->name('PengurusUpdate');
	Route::delete('/PengurusDelete/{id}', [PengurusController::class, 'PengurusDelete'])->name('PengurusDelete');


	// KEGIATAN
	Route::get('/kegiatan', [KegiatanController::class, 'KegiatanIndex'])->name('KegiatanIndex');

	Route::get('/kegiatanTambah', [KegiatanController::class, 'kegiatanTambah'])->name('kegiatanTambah');
	Route::post('/kegiatanAdd', [KegiatanController::class, 'kegiatanAdd'])->name('kegiatanAdd');

	Route::get('/kegiatanEdit/{id}', [KegiatanController::class, 'kegiatanEdit'])->name('kegiatanEdit');
	Route::post('/kegiatanUpdate/{id}', [KegiatanController::class, 'kegiatanUpdate'])->name('kegiatanUpdate');

	Route::delete('/kegiatanDelete/{id}', [KegiatanController::class, 'kegiatanDelete'])->name('kegiatanDelete');

	// PEMBAYARAN
	Route::get('/pembayaran', [PembayaranController::class, 'PembayaranIndex'])->name('pembayaranIndex');
	Route::get('/PembayaranFilter', [PembayaranController::class, 'PembayaranFilter'])->name('PembayaranFilter');

	Route::get('/pembayaranTambah', [PembayaranController::class, 'PembayaranTambah'])->name('pembayaranTambah');
	Route::post('/pembayaranAdd', [PembayaranController::class, 'PembayaranAdd'])->name('pembayaranAdd');

	Route::get('/PembayaranEdit/{id}', [PembayaranController::class, 'PembayaranEdit'])->name('PembayaranEdit');
	Route::post('/PembayaranUpdate/{id}', [PembayaranController::class, 'PembayaranUpdate'])->name('PembayaranUpdate');

	Route::delete('/PembayaranDelete/{id}', [PembayaranController::class, 'PembayaranDelete'])->name('PembayaranDelete');

	// CETAK PEMBAYARAN
	Route::get('/cetakPembayaran', [PembayaranController::class, 'PembayaranCetak'])->name('PembayaranCetak');
	Route::get('/cetakPembayaranPertanggal/{startDate}/{endDate}', [PembayaranController::class, 'CetakPembayaranPertanggal'])->name('cetakPembayaranPertanggal');

	// BUKU KAS
	Route::get('/bukuKas', [BukuController::class, 'indexKas'])->name('indexKas');
	Route::get('/KasFilter', [BukuController::class, 'KasFilter'])->name('KasFilter');

	Route::get('/TambahKas', [BukuController::class, 'TambahKas'])->name('TambahKas');
	Route::post('/AddKas', [BukuController::class, 'AddKas'])->name('AddKas');

	Route::get('/EditKas/{id}', [BukuController::class, 'EditKas'])->name('EditKas');
	Route::post('/UpdateKas/{id}', [BukuController::class, 'UpdateKas'])->name('UpdateKas');

	Route::delete('/DeleteKas/{id}', [BukuController::class, 'DeleteKas'])->name('DeleteKas');

	// CETAK BUKU KAS
	Route::get('/cetakKas', [BukuController::class, 'KasCetak'])->name('cetakKas');
	Route::get('/CetakKasPertanggal/{startDate}/{endDate}', [BukuController::class, 'CetakKasPertanggal'])->name('CetakKasPertanggal');

});
