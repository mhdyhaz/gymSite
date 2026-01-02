<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\GymController;

Route::controller(GymController::class)->group(function(){
    Route::get('/','index')->name('gyms.index');
    Route::get('/gyms/{gym:slug}', 'show')->name('gyms.show');
    });

