<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\GymController;

Route::get('/gyms', [GymController::class, 'index'])->name('gyms.index');
Route::get('/gyms/{slug}', [GymController::class, 'show'])->name('gyms.show');

