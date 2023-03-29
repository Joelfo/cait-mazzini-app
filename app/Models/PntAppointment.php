<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class PntAppointment extends Model  {
    use HasFactory;

    protected $fillable = [
        "appointment_type"
    ];

    public function trackingChart(){
        return $this->morphMany(TrackingAppointmentChart::class, "appointment");
    }
}