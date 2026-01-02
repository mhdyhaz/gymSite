<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\GymController;
use App\Http\Controllers\ArticleController;


Route::controller(GymController::class)->group(function(){
    Route::get('/','index')->name('gyms.index');
    Route::get('/gyms/{gym:slug}', 'show')->name('gyms.show');
    });

    Route::controller(ArticleController::class)->group(function(){
        Route::get('/articles','index')->name('articles.index');
        Route::get('/articles/{slug}', 'show')->name('articles.show');
        });
    