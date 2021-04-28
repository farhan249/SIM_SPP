<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KelasController as KC;
use App\Http\Controllers\SiswaController as SC;
use App\Http\Controllers\SppController as SppC;
use App\Http\Controllers\PetugasController as PC;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PembayaranController as PCC;
use App\Http\Controllers\HistoryController as H;
use App\Http\Controllers\HistoryExportController as HE;


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

Auth::routes();
Route::get('admin/home', [App\Http\Controllers\HomeController::class, 'index'])->name('admin.home')->middleware('is_admin');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/petugashome', [App\Http\Controllers\HomeController::class, 'petugashome'])->name('petugashome');
Route::get('/siswahome', [App\Http\Controllers\HomeController::class, 'siswahome'])->name('siswahome');

Route::get('/kelass',[KC::class, 'index'])->name('kelass.index');
Route::get('/kelass/create',[KC::class, 'create'])->name('kelass.create');
Route::post('/kelass/store',[KC::class, 'store'])->name('kelass.store');
Route::get('/kelass/{id}/show',[KC::class, 'show'])->name('kelass.show');
Route::put('/kelass/{id}/update',[KC::class, 'update'])->name('kelass.update');
Route::delete('/kelass/destroy/{id_kelas}',[KC::class, 'destroy'])->name('kelass.destroy');
Route::get('/kelass/{id}/edit',[KC::class, 'edit'])->name('kelass.edit');

Route::get('/spps',[SppC::class, 'index'])->name('spps.index');
Route::get('/spps/create',[SppC::class, 'create'])->name('spps.create');
Route::post('/spps/store',[SppC::class, 'store'])->name('spps.store');
Route::get('/spps/{id}/show',[SppC::class, 'show'])->name('spps.show');
Route::put('/spps/{id}/update',[SppC::class, 'update'])->name('spps.update');
Route::delete('/spps/destroy/{id_spp}',[SppC::class, 'destroy'])->name('spps.destroy');
Route::get('/spps/{id}/edit',[SppC::class, 'edit'])->name('spps.edit');

Route::get('/siswas',[SC::class, 'index'])->name('siswas.index');
Route::get('/siswas/create',[SC::class, 'create'])->name('siswas.create');
Route::post('/siswas/store',[SC::class, 'store'])->name('siswas.store');
Route::get('/siswas/{id}/show',[SC::class, 'show'])->name('siswas.show');
Route::put('/siswas/{id}/update',[SC::class, 'update'])->name('siswas.update');
Route::delete('/siswas/destroy/{id_siswa}',[SC::class, 'destroy'])->name('siswas.destroy');
Route::get('/siswas/{id}/edit',[SC::class, 'edit'])->name('siswas.edit');

Route::get('/petugass',[PC::class, 'index'])->name('petugass.index');
Route::get('/petugass/create',[PC::class, 'create'])->name('petugass.create');
Route::post('/petugass/store',[PC::class, 'store'])->name('petugass.store');
Route::get('/petugass/{id}/show',[PC::class, 'show'])->name('petugass.show');
Route::put('/petugass/{id}/update',[PC::class, 'update'])->name('petugass.update');
Route::delete('/petugass/destroy/{id_petugas}',[PC::class, 'destroy'])->name('petugass.destroy');
Route::get('/petugass/{id}/edit',[PC::class, 'edit'])->name('petugass.edit');

Route::get('/pembayarans',[PCC::class, 'index'])->name('pembayarans.index');
Route::get('/pembayarans/create',[PCC::class, 'create'])->name('pembayarans.create');
Route::post('/pembayarans/store',[PCC::class, 'store'])->name('pembayarans.store');
Route::get('/pembayarans/{id}/show',[PCC::class, 'show'])->name('pembayarans.show');
Route::put('/pembayarans/{id}/update',[PCC::class, 'update'])->name('pembayarans.update');
Route::delete('/pembayarans/destroy/{id_pembayaran}',[PCC::class, 'destroy'])->name('pembayarans.destroy');
Route::get('/pembayarans/{id}/edit',[PCC::class, 'edit'])->name('pembayarans.edit');
Route::get('pembayaranGetdata/{nisn}', [PCC::class, 'getData']);
Route::get('/pembayarans/history_pdf', [PCC::class, 'history.pdf']);

//History
Route::get('/historys',[H::class, 'index'])->name('historys.index');

//export
Route::get('/HistoryExport/export_excel',[HE::class, 'export_excel'])->name('history.export');
Route::get('/entry',[PCC::class, 'index'])->name('entry.index');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
