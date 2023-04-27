<?php


namespace App\Models;

use App\Models\Interfaces\Appointment;
use App\Models\Interfaces\IAppointment;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TbAppointment extends Model {
    use HasFactory;

    protected $fillable = [
        'date',
        'appointment_type',
    ];

    public function trackingChart(){
        return $this->morphMany(TrackingAppointmentChart::class, 'appointment', );
    }   

    public function patient(){
        return $this->belongsTo(Patient::class);
    }
}