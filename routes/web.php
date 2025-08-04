<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KYCController;

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
});

Route::get('/kyc', [KYCController::class, 'showForm'])->name('kyc.form');
Route::post('/kyc', [KYCController::class, 'submit'])->name('kyc.submit');
Route::get('/kyc-status', [KYCController::class, 'status'])->name('kyc.status');

// Route::get('/form', function () {
//     return view('kyc.form');
// })->name('kyc.form');

// Route::get('/status', function () {
//     return view('kyc.status');
// })->name('kyc.status');

require __DIR__.'/auth.php';
