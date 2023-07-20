<?php

namespace App\Models;

use App\Enums\SexualHabitualLevel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LifeHabitsInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'sexual_habitual_level' ,
        'partners_quantity',
        'uses_preservative',
        'uses_prep',
        'uses_contraceptive_method',
        'sexual_observation',
        'has_satisfying_sleeping',
        'sleeping_hours_per_night',
        'meals_per_day',
        'water_cups_per_day',
        'eating_and_water_observation',
        'ex_smoker',
        'time_has_stopped_smoking',
        'leisure_time_observation',
        'patient_id',
    ];

    public $timestamps = false;

    protected $casts = [
        'sexual_habitual_lavel' => SexualHabitualLevel::class
    ];

    public function patient(){
        return $this->belongsTo(Patient::class);
    }
}
