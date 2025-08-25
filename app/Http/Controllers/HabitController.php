<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHabitRequest;
use App\Http\Requests\UpdateHabitRequest;
use App\Http\Resources\HabitResource;
use App\Models\Habit;
use App\Models\HabitLog;
use GuzzleHttp\Psr7\Request;

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

    public function update(UpdateHabitRequest $request, Habit $habit)
    {
        $data = $request->validated();

        $habit->update($data);

        return HabitResource::make($habit);
    }

    public function destroy(Habit $habit)
    {
        HabitLog::whereHabitId($habit->id)->delete();
        $habit->delete();
        return response()->noContent();
    }

    public function store(StoreHabitRequest $request)
    {
        // $data = $request->validate();
        $data = $request->only(['title', 'uuid']);

        $habit = Habit::create($data);

        return HabitResource::make($habit);
    }
}
