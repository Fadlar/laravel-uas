<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WargaController;
use Illuminate\Support\Facades\Route;

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
    Route::resource('warga', WargaController::class);
    Route::get('/export_pdf', [WargaController::class, 'export_pdf'])->name('export.pdf');
    Route::get('/export_excel', [WargaController::class, 'export_excel'])->name('export.excel');
    Route::post('/import_excel', [WargaController::class, 'import_excel'])->name('import.excel');
});

require __DIR__ . '/auth.php';
