<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ResumesController;
use App\Http\Controllers\DashboardController;
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


    Route::resource('resumes', ResumesController::class);

    Route::get('/resumes/create', [ResumesController::class, 'create'])->name('resumes.create');
    Route::post('/resumes', [ResumesController::class, 'store'])->name('resumes.store');

    //Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    
});

require __DIR__.'/auth.php';
