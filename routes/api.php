<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HabitController;
use App\Http\Controllers\HabitLogController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::apiResource('habits', HabitController::class)->scoped(['habit' => 'uuid']);

Route::apiResource('habits.logs', HabitLogController::class)
    ->only(['index', 'show', 'store', 'destroy'])
    ->scoped(['habit' => 'uuid', 'log' => 'uuid']);
