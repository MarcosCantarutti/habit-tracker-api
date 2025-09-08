<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHabitLogRequest;
use App\Http\Resources\HabitLogResource;
use App\Models\Habit;
use App\Models\HabitLog;
use Illuminate\Http\Request;

class HabitLogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Habit $habit)
    {
        return HabitLogResource::collection(
            $habit
                ->logs()
                ->paginate()
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreHabitLogRequest $request, Habit $habit)
    {
        $log = $habit->logs()->updateOrCreate([
            'completed_at' => $request->date('completed_at'),
        ], [
            'uuid'  => $request->uuid,

        ]);

        return HabitLogResource::make($log);
    }

    /**
     * Display the specified resource.
     */
    public function show(Habit $habit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Habit $habit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Habit $habit)
    {
        //
    }
}
