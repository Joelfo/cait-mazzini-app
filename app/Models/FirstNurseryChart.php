<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FirstNurseryChart extends Model
{
    use HasFactory;

    protected $fillable = [
        'diagnostic',
        'conduct',
        'patient_id',
        'vital_signs_measurements_id',
        'staff_id'
    ]

}
