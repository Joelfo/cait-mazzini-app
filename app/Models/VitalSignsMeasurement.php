<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VitalSignsMeasurement extends Model
{
    use HasFactory;

    public $fillable = [
        'datetime',
        'pa_mmhg',
        'fc_bpm',
        'fr_irpm',
        'tax_celsius',
        'oxygen_saturation_percentage',
        'weight_kg',
        'height_m',
        'patient_id'
    ];

    public function patient(){
        return $this->hasOne(Patient::class);
    }

    public function TrackingAppointmentChart(){
        return $this->hasMany(TrackingAppointmentChart::class);
    }

}
