<?php

namespace App\Http\Controllers;

use App\Http\Resources\HabitLogResource;
use App\Models\Habit;
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
    public function store(Request $request)
    {
        //
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
