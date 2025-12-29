<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\GymController;

Route::get('/gyms', [GymController::class, 'index'])->name('gyms.index');
