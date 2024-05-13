<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\SurferController;
use App\Http\Controllers\Api\SurfingExperienceController;
use App\Http\Middleware\CheckToken;

Route::middleware(['api', CheckToken::class])->group(function () {
    // Surfer Routes
    Route::controller(SurferController::class)->group(function () {
        Route::get('/surfers', 'index');
        Route::get('/surfers/{id}', 'show');
        Route::post('/surfers', 'store');
        Route::put('/surfers/{id}', 'update');
        Route::delete('/surfers/{id}', 'destroy');
    });

    // Surfing Experience Routes
    Route::controller(SurfingExperienceController::class)->group(function () {
        Route::get('/surfing-experiences', 'index');
        Route::get('/surfing-experiences/{id}', 'show');
        Route::post('/surfing-experiences', 'store');
        Route::put('/surfing-experiences/{id}', 'update');
        Route::delete('/surfing-experiences/{id}', 'destroy');
    });
});
