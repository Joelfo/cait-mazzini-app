<?php

namespace App\Models;

use App\Enums\Arrival;
use App\Enums\PatientType;
use App\Enums\SpecialPopulation;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\HealthUnity;
use App\Models\Nationality;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Casts\Attribute;
use OpenApi\Annotations as OA;


class Patient extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'name',
        'sus_card',
        'rg',
        'cpf',
        'admission_date',
        'type',
        'arrival',
        'telephone_1',
        'telephone_2',
        'cep',
        'is_pregnant',
        'birth_date',
        'record_code',
        'mother_name',
        'street',
        'number',
        'complement',
        'special_population_type',
        'other_special_population',
        'biological_gender',
        'district_id',
        'birthplace_id',
        'nationality_id',
        'health_unity_id'
    ];

    protected $casts = [
        'pregnant' => 'boolean',
        'admission_date' => 'datetime',
        'birth_date' => 'datetime',
        'arrival' => Arrival::class,
        'special_population_type' => SpecialPopulation::class,
        'type' => PatientType::class
    ];

    public function healthUnity(){
        return $this->belongsTo(HealthUnity::class, 'health_unity_id');
    }

    public function nationality(){
        return $this->belongsTo(Nationality::class);
    }

    public function district(){
        return $this->belongsTo(District::class);
    }

    public function releases(){
        return $this->hasMany(Release::class);
    }

    public function relapses(){
        return $this->hasMany(Relapse::class);
    }

    public function birthplace(){
        return $this->belongsTo(City::class);
    }

    public function patientExams(){
        return $this->hasMany(PatientExam::class);
    }

    public function vitalSignsMeasurements(){
        return $this->hasMany(VitalSignsMeasurement::class);
    }

    public function TbAppointments(){
        return $this->hasMany(TbAppointment::class);
    }

    public function TrackingAppointmentCharts(){
        return $this->hasMany(TrackingAppointmentChart::class);
    }

    protected static function booted(){
        self::addGlobalScope('alphabeticOrdered', function(Builder $queryBuilder){
            $queryBuilder->orderBy('name');
        });
    }
}
