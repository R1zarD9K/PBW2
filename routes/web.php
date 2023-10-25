<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CollectionController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

//Route::get('/user',[user::class, 'aMethod']);

Route::get('/user', [UserController::class, 'index'])->name('user');

Route::get('/userRegistration', [UserController::class, 'create'])->name('userRegistration');;

Route::post('/userStore', [UserController::class, 'store'])->name('userStore');

Route::get('userView/{user}', [UserController::class, 'show'])->name('userView');

route::get('/getAllUsers', [UserController::class, 'getAllUsers'])->middleware(['auth', 'verified']);

route::post('/userUpdate/{id}', [UserController::class, 'update'])->name('userUpdate');

// Routing Collection
Route::get('/koleksi', [CollectionController::class, 'index'])->name('koleksi');;

Route::get('/koleksiTambah', [CollectionController::class, 'create'])->name('koleksiTambah');;

Route::post('/koleksiStore', [CollectionController::class, 'store'])->name('koleksiStore');;

Route::get('/koleksiView/{collection}', [CollectionController::class, 'show'])->name('koleksi.infoKoleksi');;

route::get('/getAllCollections', [CollectionController::class, 'getAllCollections'])->middleware(['auth', 'verified']);

route::post('/koleksiUpdate/{id}', [CollectionController::class, 'update'])->name('koleksiUpdate');

Route::get('/koleksiEdit/{id}', [KoleksiController::class, 'edit'])
    ->middleware(['auth', 'verified'])
    ->name('koleksiEdit');
require __DIR__.'/auth.php';


