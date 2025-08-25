<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHabitRequest;
use App\Http\Resources\HabitResource;
use App\Models\Habit;

class HabitController extends Controller
{
    public function store(StoreHabitRequest $request)
    {
        $data = $request->validate();

        $habit = Habit::create($data);

        return HabitResource::make($habit);
    }
}
