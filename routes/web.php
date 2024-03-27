<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/home', function () {
    return view('home');
})->middleware(['auth', 'verified', 'role:siswa|admin'])->name('home');

// Route::get('/jadwal', function () {
//     return view('jadwal');
// });

// Route::get('/home', [AppController::class, 'index']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified', 'role:admin'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('posts', PostController::class);
});

Route::get('/jadwal', [SiswaController::class, 'index'])->middleware(['auth', 'verified', 'role:admin'])->name('jadwal.form');
Route::get('/jadwal/create', [SiswaController::class, 'create'])->middleware(['auth', 'verified', 'role:admin'])->name('jadwal.create');
Route::get('/jadwal/store', [SiswaController::class, 'store'])->middleware(['auth', 'verified', 'role:admin'])->name('jadwal.store');
Route::get('/jadwal/destroy', [SiswaController::class, 'destroy'])->middleware(['auth', 'verified', 'role:admin'])->name('jadwal.form');

require __DIR__.'/auth.php';
