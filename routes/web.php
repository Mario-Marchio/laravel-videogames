<?php

use App\Http\Controllers\Guest\HomeController as GuestHomeController;
use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Guest\VideogameController as GuestVideogameController;
use App\Http\Controllers\Admin\VideogameController as AdminVideogameController;
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


// Rotte admin
Route::prefix('/admin')->name('admin.')->middleware(['auth'])->group(function () {
    Route::get('/', [AdminHomeController::class, 'index'])->name('home');
    Route::get('/videogames/trash', [AdminVideogameController::class, 'trash'])->name('videogames.trash');
    Route::resource('videogames', AdminVideogameController::class);
    Route::put('/videogames/{videogame}/restore', [AdminVideogameController::class, 'restore'])->name('videogames.restore');
});

// Rotte guest
Route::get('/', [GuestHomeController::class, 'index'])->name('guest.home');
Route::prefix('/guest')->name('guest.')->group(function () {
    Route::get('/', [GuestVideogameController::class, 'index'])->name('videogames.index');
    Route::get('/videogames/{videogame}', [GuestVideogameController::class, 'show'])->name('videogames.show');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
