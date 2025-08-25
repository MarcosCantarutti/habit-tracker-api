<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHabitRequest;
use App\Http\Resources\HabitResource;
use App\Models\Habit;

class HabitController extends Controller
{

    public function index()
    {
        $habits = Habit::all();

        return HabitResource::collection($habits);
    }

    public function show(Habit $habit)
    {
        return HabitResource::make($habit);
    }

    public function store(StoreHabitRequest $request)
    {
        // $data = $request->validate();
        $data = $request->only(['title', 'uuid']);

        $habit = Habit::create($data);

        return HabitResource::make($habit);
    }
}
