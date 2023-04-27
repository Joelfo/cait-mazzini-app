<?php


namespace App\Models;

use App\Models\Interfaces\IAppointment;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class PntAppointment extends Model {
    use HasFactory;

    protected $fillable = [
        "date",
        "appointment_type",
        'patient_id'
    ];

    
}