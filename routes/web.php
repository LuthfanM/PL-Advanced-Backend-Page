<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\SurferController;
use App\Http\Controllers\Api\SurfingExperienceController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test-db', function () {
    $users = DB::select('SELECT * FROM users');
    return response()->json($users);
});

