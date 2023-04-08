<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Relapse extends Model
{
    use HasFactory;
    protected $fillable = [
        'reason',
        'more_than_six_months',
        'patient_id'
    ];

}
