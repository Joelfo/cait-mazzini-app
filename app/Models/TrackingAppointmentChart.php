<?php

namespace App\Models;

use App\Models\Interfaces\IAppointment;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrackingAppointmentChart extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'schema',
        'evolution',
        'conduct',
        'appointment_id',
        'vital_signs_measurement_id',
        'patient_id'
    ];

    public function patient(){
        return $this->belongsTo(Patient::class);
    }

    public function appointment(){
        return $this->morphTo();
    }

    public function patientExams(){
        return $this->morphToMany(PatientExam::class, 'chart', 'patient_exams_charts');
    }
    
    public function vitalSignsMeasurement(){
        return $this->belongsTo(VitalSignsMeasurement::class);
    }
}
