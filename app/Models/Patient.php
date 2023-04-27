<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\HealthUnity;
use App\Models\Nationality;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Casts\Attribute;
use OpenApi\Annotations as OA;

/**
 * @OA\Schema(
 *   schema="Patient",
 *   description="Um modelo de paciente",
 *   @OA\Property(property="id", type="number", example="29"),
 *   @OA\Property(property="name", type="string", example="Moisés"),
 *   @OA\Property(property="susCard", type="string", example="12345678"),
 *   @OA\Property(property="rg", type="string", example="123456789"),
 *   @OA\Property(property="cpf", type="string", example="12345678910"),
 *   @OA\Property(property="admissionDate", type="string", example="11-11-2020"),
 *   @OA\Property(property="type", type="string", example="TB"),
 *   @OA\Property(property="arrival", type="string", example="Referenciado"),
 *   @OA\Property(property="telephone1", type="string", example="21999999999"),
 *   @OA\Property(property="telephone2", type="string", example="2155555555"),
 *   @OA\Property(property="cep", type="string", example="21111050"),
 *   @OA\Property(property="isPregnant", type="bool", example="false"),
 *   @OA\Property(property="birthDate", type="string", example="21-02-1954"),
 *   @OA\Property(property="recordCode", type="string", example="TB99999"),
 *   @OA\Property(property="motherName", type="string", example="Rute"),
 *   @OA\Property(property="address", type="string", example="Rua do Nunca, número 999, apartamento 1851"),
 * )
 */
class Patient extends Model
{
    use HasFactory;

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
        'pregnant', 
        'birth_date', 
        'record_code', 
        'mother_name', 
        'address',
        'district_id',
        'birthplace_id',
        'nationality_id',
        'health_unity_id'
    ];
    
    protected $casts = [
        'pregnant' => 'boolean',
        'admission_date' => 'datetime',
        'birth_date' => 'datetime'
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
