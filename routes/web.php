<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\dashboardController;
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
Route::group(['middleware' => ['auth', 'verified']], function () {
 
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::middleware('admin')->group(function () {
        
        Route::get('/dashboardAdmin', [dashboardController::class, 'index'])->name('dashboardAdmin');
        Route::resource('jnsmotor', jnsmotorController::class);
        
        
       
    });
    Route::middleware('user')->group(function () {
        Route::get('/dashboard', function () {
            return view('dashboard');
        })->middleware(['auth', 'verified'])->name('dashboard');
    });
    Route::middleware('user')->group(function () {
        Route::get('/dashboardsuperadmin', function () {
            return view('dashboard');
        })->middleware(['auth', 'verified'])->name('dashboardsuperadmin');
    });
});
require __DIR__.'/auth.php';
