<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\HealthUnity;
use App\Models\Nationality;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Casts\Attribute;

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
        'health_unity_id',
        'district_id',
        'nationality_id',
        'birthplace_id',

    ];
    
    protected $casts = [
        'pregnant' => 'boolean'
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

    protected static function booted(){
        self::addGlobalScope('alphabeticOrdered', function(Builder $queryBuilder){
            $queryBuilder->orderBy('name');
        });
    }
}
