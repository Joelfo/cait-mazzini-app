<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use function PHPSTORM_META\map;

class PhysicalExam extends Model
{
    use HasFactory;

    protected $physicalExam = [
        'general_aspect',
        'hygiene_conditions',
        'head',
        'neck',
        'chest',
        'abdomen',
        'mmss_mmii',
        'urinary_track',
        'skin_and_mucous',
        'patient_id',
    ];
}
