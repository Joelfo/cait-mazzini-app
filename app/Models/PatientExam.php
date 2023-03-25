<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatientExam extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'file_path',
        'patient_id'
    ];

    public function patient(){
        return $this->hasOne(Patient::class);
    }

    public function trackingCharts(){
        return $this->morphedByMany(TrackingAppointmentChart::class, 'chart', 'patient_exams_charts');
    }

}
