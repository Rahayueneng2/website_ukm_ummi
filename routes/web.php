<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\UkmController;
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

// Route untuk halaman utama mengarah ke login
Route::get('/', function () {
    return redirect()->route('login'); // Redirect ke halaman login
});

// Route untuk login
Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store']);

// Route dashboard (contoh tambahan)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route untuk logout
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

// Route dengan middleware 'auth'
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route untuk members
Route::prefix('members')->middleware('auth')->group(function () {
    Route::get('/', [MemberController::class, 'index'])->name('members.index');
    Route::get('/create', [MemberController::class, 'create'])->name('members.create');
    Route::post('/', [MemberController::class, 'store'])->name('members.store');
    Route::get('/{member}/edit', [MemberController::class, 'edit'])->name('members.edit');
    Route::put('/{member}', [MemberController::class, 'update'])->name('members.update');
    Route::delete('/{member}', [MemberController::class, 'destroy'])->name('members.destroy');
});

// Route untuk ukms
Route::prefix('ukms')->middleware('auth')->group(function () {
    Route::get('/', [UkmController::class, 'index'])->name('ukms.index'); // Halaman UKMS
    Route::get('/create', [UkmController::class, 'create'])->name('ukms.create');
    Route::post('/', [UkmController::class, 'store'])->name('ukms.store');
    Route::get('/{ukm}/edit', [UkmController::class, 'edit'])->name('ukms.edit');
    Route::put('/{ukm}', [UkmController::class, 'update'])->name('ukms.update');
    Route::delete('/{ukm}', [UkmController::class, 'destroy'])->name('ukms.destroy');
});

// Tambahkan auth.php jika ada
require __DIR__.'/auth.php';
