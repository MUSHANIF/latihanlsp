<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\dashboardController;
use App\Models\jnslayanan;
use App\Models\kursi;
use App\Models\layanan;
use App\Http\Controllers\jnslayananController;
use App\Http\Controllers\layananController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\userController;
use App\Http\Controllers\kursiController;
use App\Http\Controllers\laporanController;
use App\Http\Controllers\TransaksiController;
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
    $datas = jnslayanan::all();
    $user = Auth::id();
    
    
    $data = layanan::with(['layanan','carts'])
    ->where('status', 1)->get();

    return view('welcome',compact('datas','data','user'));
});
Route::group(['middleware' => ['auth', 'verified']], function () {
 
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::middleware('admin')->group(function () {
        Route::resource('jns', jnslayananController::class);
        Route::get('/dashboardAdmin', [dashboardController::class, 'index'])->name('dashboardAdmin');
        Route::resource('layanan', layananController::class);
        Route::resource('kursi', kursiController::class);
        Route::get('/laporan', [laporanController::class, 'index']);
        Route::get('/laporanexcel', [laporanController::class, 'excel']);
        Route::get('/laporanpdf', [laporanController::class, 'pdf']);
        
       
    });
    Route::middleware('user')->group(function () {
        Route::get('/dashboard', [dashboardController::class, 'index'])->name('dashboard');
        Route::get('/keranjang/{id}', [App\Http\Controllers\TransaksiController::class, 'keranjang'])->name('keranjang');
        Route::post('/validation', [App\Http\Controllers\profileController::class, 'validasi'])->name('validation');
        Route::post('/tambah/{id}', [App\Http\Controllers\TransaksiController::class, 'tambah'])->name('tambah');
        Route::get('/pembayaran/{id}', [App\Http\Controllers\TransaksiController::class, 'pembayaran'])->name('pembayaran');
        Route::post('/bayar/{id}', [App\Http\Controllers\TransaksiController::class, 'bayar'])->name('bayar');
        Route::delete('/hapus/{id}', [App\Http\Controllers\TransaksiController::class, 'hapus'])->name('hapus');
    });
    Route::middleware('superadmin')->group(function () {
        Route::get('/dashboardsuperadmin', [dashboardController::class, 'index'])->name('dashboardsuperadmin');
        Route::resource('dataadmin', adminController::class);
        Route::resource('datauser', userController::class);
    });
});
require __DIR__.'/auth.php';

