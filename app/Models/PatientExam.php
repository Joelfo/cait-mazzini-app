<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatientExam extends Model
{
    use HasFactory;
    protected $fillable = [
        'file_path',
        'date',
        'patient_id'
    ];

    public function patient(){
        return $this->hasOne(Patient::class);
    }

    public function charts(){
        return $this->morphedByMany(TrackingAppointmentChart::class, 'chart', 'patient_exams_charts');
    }

}
