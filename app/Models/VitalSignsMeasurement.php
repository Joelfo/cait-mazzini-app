<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VitalSignsMeasurement extends Model
{
    use HasFactory;

    public $fillable = [
        'date',
        'patient_id',
        'pa',
        'fc',
        'oxygen_saturation',
        'weight',
        'height'
    ];

    
}
