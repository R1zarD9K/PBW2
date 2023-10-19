<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KoleksiController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\UsersController;
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
    Nama : Azka Faris Akbar
    Nim : 6706220020
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
 
    Route::post('/userStore', [RegisteredUserController::class, 'store'])->name('user.store');
    Route::get('/user', [UserController::class, 'index'])->name('user.daftarPengguna');
    Route::get('/userRegistration', [UserController::class, 'create'])->name('user.registrasi');
    Route::get('/userView/{username}', [UserController::class, 'showUser'])->name('user.infoPengguna');

    Route::post('/koleksiStore', [KoleksiController::class, 'store'])->name('koleksi.store');
    Route::get('/koleksi', [KoleksiController::class, 'index'])->name('koleksi.daftarKoleksi');
    Route::get('/koleksiTambah', [KoleksiController::class, 'create'])->name('koleksi.registrasi');
    Route::get('/koleksiView/{id}', [KoleksiController::class, 'show'])->name('koleksi.infoKoleksi');
});

// Route::get('/users', [UsersController::class, 'index'])->name('users.index');

require __DIR__.'/auth.php';
// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
