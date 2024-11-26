<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LojaController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('livewire/indexo');
}); 


Route::get('/loja', [LojaController::class, 'index'])->name('loja');
Route::get('/carrinho', [LojaController::class, 'index'])->name('carrinho');
Route::get('/assinaturas', [LojaController::class, 'index'])->name('assinaturas');




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
