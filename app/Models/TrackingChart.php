<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrackingChart extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'schema',
        'vital_signs_measurement_id',
        'evolution',
        'conduct',
        'patient_id'
    ];

    public function patient(){
        return $this->belongsTo(Patient::class);
    }
}
