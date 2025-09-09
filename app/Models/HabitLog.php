<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Traits\HasUUid;

class HabitLog extends Model
{
    use HasFactory;
    use HasUUid;

    public function habit(): BelongsTo
    {
        return $this->belongsTo(Habit::class);
    }
}
