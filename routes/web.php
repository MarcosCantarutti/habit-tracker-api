<?php

declare(strict_types=1);

use App\Http\Controllers\HabitController;
use App\Http\Controllers\HabitLogController;
use App\Models\Habit;
use Illuminate\Support\Facades\Route;

Route::get('/', fn(): array => [config('app.name')]);
Route::prefix('/api')->name('api.')->group(function () {
    Route::apiResource('habits', HabitController::class)->scoped(['habit' => 'uuid']);
    Route::apiResource('habits.logs', HabitLogController::class)->scoped(['habit' => 'uuid']);
});
