<?php


use App\Http\Controllers\HomeController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PresensiController;
use App\Http\Controllers\ProfileController;
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
})->middleware('guest');

Route::get('/home', [HomeController::class, 'index']);

// Route::get('/jadwal', function () {
//     return view('jadwal');
// });


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified', 'role:admin'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('posts', PostController::class)->middleware('auth','verified', 'role:admin');
});

Route::get('/jadwal', [JadwalController::class, 'index'])->name('jadwal')->middleware('auth', 'verified', 'role:admin');
Route::get('/jadwal/create', [JadwalController::class, 'create'])->name('jadwal.create')->middleware('auth', 'verified', 'role:admin');
Route::post('/jadwal/store', [JadwalController::class, 'store'])->name('jadwal.store')->middleware('auth', 'verified', 'role:admin');
Route::get('/jadwal/edit/{id}', [JadwalController::class, 'edit'])->name('jadwal.edit')->middleware('auth', 'verified', 'role:admin');
Route::post('/jadwal/update/{id}', [JadwalController::class, 'update'])->name('jadwal.update')->middleware('auth', 'verified', 'role:admin');
Route::post('/jadwal/destroy/{id}', [JadwalController::class, 'destroy'])->name('jadwal.destroy')->middleware('auth', 'verified', 'role:admin');

// presensi
Route::get('/presensi', [PresensiController::class, 'create'])->middleware('auth', 'verified');

require __DIR__.'/auth.php';
