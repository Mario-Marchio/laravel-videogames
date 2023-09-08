<?php

// Home
use App\Http\Controllers\Guest\HomeController as GuestHomeController;
use App\Http\Controllers\Admin\HomeController as AdminHomeController;
// Videogame
use App\Http\Controllers\Guest\VideogameController as GuestVideogameController;
use App\Http\Controllers\Admin\VideogameController as AdminVideogameController;
// Publisher
use App\Http\Controllers\Admin\PublisherController as AdminPublisherController;
// Console
use App\Http\Controllers\Admin\ConsoleController as AdminConsoleController;
// Genre
use App\Http\Controllers\Admin\GenreController as AdminGenreController;

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


// Rotte admin
Route::prefix('/admin')->name('admin.')->middleware(['auth'])->group(function () {
    Route::get('/', [AdminHomeController::class, 'index'])->name('home');

    // Videogames
    Route::get('/videogames/trash', [AdminVideogameController::class, 'trash'])->name('videogames.trash');
    Route::resource('videogames', AdminVideogameController::class);
    Route::put('/videogames/{videogame}/restore', [AdminVideogameController::class, 'restore'])->name('videogames.restore');

    // Publisher
    Route::resource('publishers', AdminPublisherController::class);

    // Console
    Route::resource('consoles', AdminConsoleController::class);

    // Genres
    Route::resource('genres', AdminGenreController::class);
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
