<?php

namespace App\Models;

use App\Enums\PatientIncomeSource;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NurseryIdentificationInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'civil_state',
        'color',
        'home_type',
        'home_property_type',
        'scholarity',
        'ocupation',
        'has_potable_water',
        'has_basic_sanitation',
        'has_urban_cleaning_services',
        'religion',
        'children_number',
        'gender',
        'patient_id',
        'income_source',
        'other_income_source',
        'is_spouse_a_housemate',
        'is_children_a_housemate',
        'is_parent_a_housemate',
        'other_housemates'
    ];

    protected $casts = [
        'income_source' => PatientIncomeSource::class
    ];

    public $timestamps = false;

    public function patient(){
        return $this->hasOne(Patient::class);
    }

}
