<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionarioController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(callback: function () {
    Route::get('dashboard', [QuestionarioController::class, 'index'])->name('dashboard');
    Route::get('dashboard/questionario', [QuestionarioController::class, 'questionario'])->name('dashboard.questionario');
    Route::post('dashboard/questionario/store', [QuestionarioController::class, 'store'])->name('dashboard.store'); 
    Route::post('dashboard/ficha', [QuestionarioController::class, 'ficha'])->name('dashboard.ficha'); 
    Route::post('dashboard/ficha/{questionario}', [QuestionarioController::class, 'show'])->name('dashboard.show'); 

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
